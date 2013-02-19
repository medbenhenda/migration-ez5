<?php
// URI:       extension/dcdgroup/design/group/templates/_common/connect.tpl
// Filename:  extension/dcdgroup/design/group/templates/_common/connect.tpl
// Timestamp: 1359052770 (Thu Jan 24 19:39:30 CET 2013)
$oldSetArray_af8854db2418f72cfaf688a0d9c8d7e5 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/dcdgroup/cache/template/compiled/common.php' );

$text .= '
<!-- START: including template: extension/dcdgroup/design/group/templates/_common/connect.tpl (extension/dcdgroup/design/group/templates/_common/connect.tpl) -->
<div class="block block_right">
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_logged_in' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <li><a href="/" class="" title="Access to your profile">Access to your profile</a></li>
        <li><a href="/user/logout" class="" title="Logout">Logout</a></li>
    ';
}
else
{
$text .= '
        <h2>CONNECT WITH US</h2>

            <div class="form_box">
            <div class="leftform">
                <p class="title">Sign in</p>
            <form action="http://www.datacenterdynamics.com/user/login" method="post" accept-charset="UTF-8">
                    <label>Username:</label>
                <input type="text" class="inputbox" value="" name="name"/>
                <label>Password:</label>
                <input type="password" class="inputbox" value="" name="pass"/>
                <input id="edit-user-login" type="hidden" value="user_login" name="form_id">
                
                <input type="submit" value=\'GO\' class="sbtn" name="op" />
            </form>
            </div>

            <div class="rightform">
                <p>Create MyDCD account</p>
                <form action="http://www.datacenterdynamics.com/create-an-account" method="POST">
                <input type="submit" value=\'Sign up \' class="signup" />
                
                </form>
            </div><!--rightformn end-->

            <div class="clr"></div>

            <div class="join">
                <span class="title">Join Us At</span>
                <span class="icons">
                    <a class="newsletter" title="Newsletter" href="http://www.datacenterdynamics.com/user/register?account_type=silver/" target="_blank">newsletter</a>
                    <a class="twitter" title="twitter" href="http://twitter.com/dcdfocus" target="_blank">twitter</a>
                    <a class="rss" title="rss" href="http://www.datacenterdynamics.com/rss-feeds" target="_blank">Rss</a>
                    <a class="in" title="in" href="http://www.linkedin.com/groups?gid=153665" target="_blank">In</a>
                </span>
                <div class="clr"></div>
            </div><!--join end-->

        </div><!--form_box end-->

    ';
}
unset( $if_cond );
// if ends

$text .= '    </div><!--block end-->
<!-- STOP: including template: extension/dcdgroup/design/group/templates/_common/connect.tpl (extension/dcdgroup/design/group/templates/_common/connect.tpl) -->
';

$setArray = $oldSetArray_af8854db2418f72cfaf688a0d9c8d7e5;
$tpl->Level--;
?>
