<?php
require_once("include/init.inc");
$page_title = "account info";
$nav_main = "account";
$nav_sub = "login";
$page_sid = "$BASE_DIR/sid_empty.php";


// if a login was submitted, attempt to authenticate
if($HTTP_POST_VARS{"authenticate"}){
    $userId = authenticateUser($HTTP_POST_VARS{"userName"}, $HTTP_POST_VARS{"password"});
    if ($userId) {
        createSession($userId);
        if($referrer){
            redirectToReferrer($referrer);
        } else {
            redirectToAccountPage();
        }
    }
}

include("header.php");
?>
<?php 
if($HTTP_POST_VARS{"authenticate"}){
    echo '<p><font color="red"><b>Authentication failed.</b></font></p>';
}
?>

<h1>Vim Online Login</h1>
<p>
Please log in. You must have cookies enabled.
</p>
<table cellspacing="0" cellpadding="0" border="0">
<tr>
    <td valign="top" nowrap>
    <h2>New to vim online?</h2>
    <a href="account/register.php">Sign up now</a>.
    </td>

    <td><img src="<?=$IMG_DIR?>/spacer.gif" width="10" height="1" alt=""></td>
    <td class="darkbg"><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="1" alt=""></td>
    <td><img src="<?=$IMG_DIR?>/spacer.gif" width="10" height="1" alt=""></td>
    
    <td valign="top">
    <h2>Existing vim online users</h2>
    <p>
    <form name="login" method="post">
        <input type="hidden" name="authenticate" value="true">
        <input type="hidden" name="referrer" value="<?=$HTTP_GET_VARS{'referrer'}?>">
    <table cellspacing="4" cellpadding="2" border="0">
        <tr>
            <td class="prompt">username or email</td>
            <td><input type="text" name="userName"></td>
        </tr>
        <tr>
            <td class="prompt">password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" value="Login"></td>
        </tr>
        <tr>
            <td colspan="2"><a href="account/forgot_password.php">Password Help</a></td>
        </tr>
    </table>
    </form>
    </td>
</tr>
</table>

<!-- fill up with spaces to make the main field wide enough -->
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<?php
include("footer.php");
?>
