<?php
/**
 * @copyright Copyright (C) 1999-2012 DatacenterDyanmics AS. All rights reserved.
 * @license  All rights reserved.
 * @version  2013.2
 * @package dcdshop
 */

$ini = eZINI::instance();
$http = eZHTTPTool::instance();
$user = eZUser::currentUser();
$access = false;

$accessToAdministrate = $user->hasAccessTo( 'shop', 'administrate' );
$accessToAdministrateWord = $accessToAdministrate['accessWord'];

if ( $accessToAdministrateWord != 'no' )
{
    $access = true;
}

$offset = isset( $Params['Offset']) && $Params['Offset'] != false ? $Params['Offset'] : 0;
$limit   = eZPreferences::value( 'vouchers_limit' ) ? eZPreferences::value( 'vouchers_limit' ) : 10;

$textFilter   = eZPreferences::value( 'vouchers_textfilter' ) ? eZPreferences::value( 'vouchers_textfilter' ) : '';
if ( $http->hasPostVariable( "TextFilter" ) )
{
	$textFilter = $http->postVariable( "TextFilter" );
	eZPreferences::setValue( 'vouchers_textfilter', $textFilter );
}

$courseID   = eZPreferences::value( 'vouchers_coursefilter' ) ? eZPreferences::value( 'vouchers_coursefilter' ) : false;
if ( $http->hasPostVariable( "CourseFilter" ) )
{
	$courseID = $http->postVariable( "CourseFilter" );
	eZPreferences::setValue( 'vouchers_coursefilter', $courseID );
}

$errors = $new_vouchers = array();

if( $http->hasPostVariable('GenerateVoucherButton') )
{
	$expected   = array( 'invoice', 'managerEmail', 'dcdEmail', 'group', 'type', 'voucherCode', 'expMonth', 'expDay', 'expYear', 'classroomID', 'quantity' );

	// Loop through our expected fields and check they're there.
	foreach( $expected as $e )
	{
		if(  $http->hasPostVariable($e) ) 
		{
			$errors[$e] = ezpI18n::tr( 'dcdshop/vouchers', 'All Fields required' );
		}

		$$e = $http->postVariable($e);
	}

	//Concatenate values into one variable (Date "Y-M-D")
	$expDate = strtotime( $expYear . "-" . $expMonth . "-" . $expDay);
	$keys      = explode( "\n", trim( $_POST['voucherCode'] ) );

	$vouchers   = new Vouchers();
	
	foreach( $keys as $key )
	{
		$key = trim( $key );
		$new_vouchers[] = $vouchers->addVoucher( $invoice, $group, $type, $key, $classroomID, date( 'Y-m-d', $expDate), $managerEmail, $dcdEmail );
	}
	
// 	var_dump("<pre>", $new_vouchers);
// 	die();
}



$results = dcdShop::fetchVouchers( $courseID, $offset, $limit, $textFilter );
$courseList = dcdShop::fetchDistinctVoucherCourses( );

$tpl = eZTemplate::factory();

$tpl->setVariable( "vouchers", $results['vouchers'] );
$tpl->setVariable( "vouchers_count", $results['vouchers_count'] );
$tpl->setVariable( "courseList", $courseList );
$tpl->setVariable( "courseID", $courseID );
$tpl->setVariable( "limit", $limit );
$tpl->setVariable( "errors", $errors );
$tpl->setVariable( "textFilter", $textFilter );

$tpl->setVariable( 'persistent_variable', false );

$viewParameters = array( 'offset' => $offset );
$tpl->setVariable( 'view_parameters', $viewParameters );

$Result = array();
$Result['content'] = $tpl->fetch( "design:shop/vouchers.tpl" );
$Result['path'] = array( array( 'url' => 'dcdshop/managevouchers',
                                'text' => ezpI18n::tr( 'kernel/shop', 'Manage Vouchers' ) ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
	$contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );

$Result['content_info'] = $contentInfoArray;

?>
