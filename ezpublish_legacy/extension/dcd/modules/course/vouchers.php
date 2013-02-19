<?php
/**
 * @author Daniel Noel-Davies
 * An Ajax interface for any voucher validation requests
 *
 * @todo:
 * 	Ban a user after 4 incorrect attempts.
 */

header('Content-type: application/json');
// require_once( '../../lib/base.inc.php' );

global $strings;

$eventid        = ( !empty( $_GET['eid'] ) ? $_GET['eid'] : null );
$voucher        = new Vouchers;
$moodle         = new Moodle;
$course         = new Course;
$voucherInfo    = $voucher->getVoucherInfo( $_GET['vid'], array( 'courseid', 'courseType' ) );
$result         = $voucher->redeem( $_GET['vid'], $_GET['cid'], $_SESSION['mdl_userid'], $eventid );
$courseType     = $course->getCourseType( $_GET['cid'] );

// If the voucherInfo function returned fuck all, then something's wrong
//      on our end with the voucher
if( !is_array( $voucherInfo ) )
{
    $response = array(
    	'valid'         => false,
    	'transaction'   => false,
    	'errorTitle'    => $strings['voucher-error-title-misconfigured'],
    	'errorMessage'  => $voucher->errors
    );
}
//Checks to make sure the types match (voucher and course)
else if( $voucherInfo['courseType'] !== $courseType )
{
	$response = array(
		'valid'         =>  false,
		'transaction'   =>  false,
		'errorTitle'    =>  $strings['voucher-error-title-match-type'],
		'errorMessage'  =>  $strings['voucher-error-msg-match-type']
	);
}
// If the course is a classroom course, yet, the voucher id doesn't match up
// Then error, there are big price differences with Classroom Courses!
else if( $voucherInfo['courseType'] !== 'online'
        && $voucherInfo['courseid'] !== $_GET['cid'] )
{
    $response = array(
    	'valid'         => false,
    	'transaction'   => false,
    	'errorTitle'    => $strings['voucher-error-title-match-type'],
    	'errorMessage'  => $strings['voucher-error-msg-match-courseid']
    );
}
// Something went wrong? =/ I blame it on this guy   --->                 >:)\-<
// The cheeky bastard is walking on a black tightrope
else if( $result === false )
{
    $response = array(
    	'valid'         => false,
    	'transaction'   => false,
    	'errorTitle'    => $strings['voucher-error-title-not-redeemed'],
    	'errorMessage'  => $strings['voucher-error-msg-not-redeemed']
    );
}
//User is Already Enrolled into the Course
//Let the cheeky bastard know
else if( $result === 1 )
{
    $response = array(
    	'valid'         => false,
    	'transaction'   => false,
    	'errorTitle'    => $strings['voucher-error-title-already-enrolled'],
    	'errorMessage'  => $strings['voucher-error-msg-already-enrolled'],
    );
}
// A =D You may pass...
else
{
    $course_id = $_GET['cid'];
    $course = Course::find($course_id);

    //Checks if user is already confirmed
    $isConfirmed = $moodle->isUserConfirmed( $_SESSION['mdl_userid'] );

    //Get moodle url for confirmation link
    $moodle_url = get_setting( 'paths', 'moodle_url');

    //Get user email
    $user = $moodle->getUserInfo( $_SESSION['mdl_userid'] );

    //setup booking url
    $bookingUrl = ( !is_null($course->getBookingUrl()) ? $course->getBookingUrl() : $moodle_url );

    //Estalish Link Message for Online Courses
    $extra = sprintf('
        <br /><br /> %s %s',
        $strings['begin-training'],
        ( $isConfirmed
            ? '<a style="color: blue;" href="'.$bookingUrl.'">'.$strings['clicking-here'].'</a>'
            : $strings['voucher-confirmation-msg']
        )
    );

    //only send email of student was successfully enrolled into the course
    $emailResult    = $moodle->sendConfirmationEmail( $_GET['cid'], $_SESSION['mdl_userid'], $eventid, $_GET['vid'] );

    //send email notification to admin if all is successfull
    $adminNotify    = $voucher->emailNotification( $_GET['cid'], $_GET['vid'], $_SESSION['mdl_userid'], $eventid );

    if( $emailResult === false )
    {
		$response = array(
			'valid'         => false,
			'transaction'   => false,
			'errorTitle'    => $strings['voucher-confirmation-title-not-sent'],
			'errorMessage'  => sprintf(
				'%s.%s',
                $strings['voucher-confirmation-msg-not-sent'],
				$extra
			)
		);
    }
    else
    {
    	$response = array(
    		'valid'         => true,
    		'transaction'   => true,
    		'adminNotification'  => $adminNotify,
    		'errorTitle'    => $strings['voucher-title-accepted'],
    		'errorMessage'  => sprintf(
    			'%s.%s',
                $strings['voucher-msg-accepted'],
    			$extra
    		)
    	);
    }
}

echo json_encode( $response );

$Result['pagelayout'] = false;
	eZDebug::updateSettings(
	array(
		'debug-enabled' => false
	)
);

eZExecution::cleanExit();