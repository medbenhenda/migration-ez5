<div class="block block_right">
    {if $current_user.is_logged_in}
        <li><a href={"/"|ezurl()} class="" title="Access to your profile">{"Access to your profile"|i18n("dcdgroup/authenticate")}</a></li>
        <li><a href={"/user/logout"|ezurl()} class="" title="Logout">{"Logout"|i18n("dcdgroup/authenticate")}</a></li>
    {else}

        <h2>{"CONNECT WITH US"|i18n("dcdgroup/authenticate")}</h2>

            <div class="form_box">
            <div class="leftform">
                <p class="title">{"Sign in"|i18n("dcdgroup/authenticate")}</p>
            <form action="http://www.datacenterdynamics.com/user/login" method="post" accept-charset="UTF-8">
                    <label>{"Username"|i18n("dcdgroup/authenticate")}:</label>
                <input type="text" class="inputbox" value="" name="name"/>
                <label>{"Password"|i18n("dcdgroup/authenticate")}:</label>
                <input type="password" class="inputbox" value="" name="pass"/>
                <input id="edit-user-login" type="hidden" value="user_login" name="form_id">
                
                <input type="submit" value='{"GO"|i18n("dcdgroup/authenticate")}' class="sbtn" name="op" />
            </form>
            </div>

            <div class="rightform">
                <p>{"Create MyDCD account"|i18n("dcdgroup/authenticate")}</p>
                <form action="http://www.datacenterdynamics.com/create-an-account" method="POST">
                <input type="submit" value='{"Sign up "|i18n("dcdgroup/authenticate")}' class="signup" />
                
                </form>
            </div><!--rightformn end-->

            <div class="clr"></div>

            <div class="join">
                <span class="title">{"Join Us At"|i18n("dcdgroup/authenticate")}</span>
                <span class="icons">
                    <a class="newsletter" title="Newsletter" href="http://www.datacenterdynamics.com/user/register?account_type=silver/" target="_blank">{"newsletter"|i18n("dcdgroup/authenticate")}</a>
                    <a class="twitter" title="twitter" href="http://twitter.com/dcdfocus" target="_blank">twitter</a>
                    <a class="rss" title="rss" href="http://www.datacenterdynamics.com/rss-feeds" target="_blank">Rss</a>
                    <a class="in" title="in" href="http://www.linkedin.com/groups?gid=153665" target="_blank">In</a>
                </span>
                <div class="clr"></div>
            </div><!--join end-->

        </div><!--form_box end-->

    {/if}
    </div><!--block end-->