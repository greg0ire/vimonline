<?php

require("include/init.inc");

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
// include the page header
$page_title = "account info";
include("$BASE_DIR/header.php");
?>

<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">

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
    <a href="register.php">Sign up now</a>.
    </td>

    <td><img src="images/spacer.gif" width="10" height="1" alt=""></td>
    <td class="darkbg"><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td><img src="images/spacer.gif" width="10" height="1" alt=""></td>
    
    <td valign="top" width="2000">
    <h2>Existing vim online users</h2>
    <p>
    <form name="login" method="post">
        <input type="hidden" name="authenticate" value="true">
        <input type="hidden" name="referrer" value="<?=$HTTP_GET_VARS{'referrer'}?>">
    <table cellspacing="4" cellpadding="2" border="0">
        <tr>
            <td class="prompt">user name</td>
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
            <td colspan="2"><a href="<?=$BASE?>/account/forgot.php">Password Help</a></td>
        </tr>
    </table>
    </form>
    </p>
    </td>
</tr>
</table>
<p>
</p>


</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
