<?php
/**
 * @author  Hartley Jean-Aimee
 * An ajax interface for any discount validation requests
 *
 * @todo:
 * Ban a user after a certain number of attempts
 */

header('Content-type: application/json');
// require_once( '../../lib/base.inc.php' );

$eventId        = ( !empty( $_GET['eid'] ) ? $_GET['eid'] : null );
$courseId       = ( !empty( $_GET['cid'] ) ? $_GET['cid'] : null );
$code           = ( !empty( $_GET['did'] ) ? $_GET['did'] : null );

//Discount Object
$discounts      = new Discounts;
$discountValid  = $discounts->isVerified( $code ); //Validates Discount
$discountInfo   = $discounts->getDiscountInfo( $code, array( 'courseid', 'type', 'percentage' ) );
$result         = $discounts->redeem( $code, $courseId, $_SESSION['mdl_userid'] );

//Course Object
$course         = Course::find( $courseId );

//If the discountInfo return, then something went wrong with the discounts
if( !is_array( $discountInfo ) || $discountValid == false )
{
    $response = array(
        'valid'         =>  false,
        'transaction'   =>  false,
        'errorTitle'    =>  'Invalid Discount Code',
        'errorMessage'  =>  $discounts->errors
    );
}
//If the discount doesn't have a courseid of '0' (Any Course) and the id
//doesn't match with the course then Awww shit son you ain't going further
else if( ( $discountInfo['courseid'] != 0
        && $discountInfo['courseid'] != $_GET['cid'] )
        || strtolower( $discountInfo['type'] ) != strtolower( $course->getType() ) )
{
    $response = array(
        'valid'         =>  false,
        'transaction'   =>  false,
        'errorTitle'    =>  'Discount code isn\'t valid for this course',
        'errorMessage'  =>
            'The Discount code you\'ve attempted to use is not valid for this '.
            'course.<br /> Please check the email sent by your local client '.
            'management team.'
    );
}
else
{
    //Get Course Fees
    $courseFeeInfo = $course->getFees(
        ( isset( $eventId )
            ? array( 'eventid' => $eventId )
            : array( 'courseid' => $courseId ) ),
              array( 'field' => 'fee' )
    );

    //Convert Discount Percentage into decimal
    $discountMultiplier = $discountInfo['percentage'] / 100;

    $courseFee = $courseFeeInfo['fee'];

    //Calculate new Fee
    $newFee = $courseFee - ( $courseFee * $discountMultiplier );

    $response = array(
        'valid'         => true,
        'transaction'   => true,
        'data'          => $newFee,
        'errorTitle'    => 'Discount Accepted',
        'errorMessage'  =>
            'Your discount code has been redeemed. Please note the change in Fee '.
            'for this course.'
    );
}
/*
//Something went wrong with the redeeming aspect I blame the *Zilla
//RAWWWWWR !! *#%X$%@$*&)^ <-- Da Zilla just cursed the shit out of you homie
else if( $result === false )
{
    $response = array(
        'valid'         =>  false,
        'transaction'   =>  false,
        'errorTitle'    =>  'Discount not redeemed',
        'errorMessage'  =>
            ( !empty( $discounts->errors ) ? $discounts->errors :
            'We apologize, however you\'re discount code was not '.
            'successfully redeemed. Please try again, or consult your '.
            'local client management team for further assitance.' )

    );
}
//You made it this far my boy. You deserve an award....
//RAWWWWWR !! #$%#% --> You just cursed the shit out of the Zilla...DAYUUUMMMMM !
else
{
    //Get Course Fees
    $courseFeeInfo = $course->getFees(
        ( isset( $eventId )
            ? array( 'eventid' => $eventId )
            : array( 'courseid' => $courseId ) ),
              array( 'field' => 'fee' )
    );

    //Convert Discount Percentage into decimal
    $discountMultiplier = $discountInfo['percentage'] / 100;

    $courseFee = $courseFeeInfo['fee'];

    //Calculate new Fee
    $newFee = $courseFee - ( $courseFee * $discountMultiplier );

    $response = array(
        'valid'         => true,
        'transaction'   => true,
        'data'          => $newFee,
        'errorTitle'    => 'Discount Accepted',
        'errorMessage'  =>
            'Your discount code has been redeemed. Please note the change in Fee '.
            'for this course.'
    );
}*/

echo json_encode( $response );

$Result['pagelayout'] = false;

eZDebug::updateSettings(
	array(
		'debug-enabled' => false
	)
);

eZExecution::cleanExit();