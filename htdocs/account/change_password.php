<?php
// index page for account info
require_once("../include/init.inc");
// include the page header
$page_title = "update password";
$nav_main = "account";
$nav_sub = "account_passwd";
$page_sid = "$BASE_DIR/sid_empty.php";

// handle actions
if (!isSessionValid()) {
    redirectToLoginPage();
}
$user = getSessionUser();
$error_msg;

if($HTTP_POST_VARS{"action"}=="update"){
    if($HTTP_POST_VARS{"password"} != $HTTP_POST_VARS{"confirm_password"}){
        $error_msg = "Passwords did not match, please try again";
    } else if($HTTP_POST_VARS{"password"} == ""){
        $error_msg = "You cannot have an empty password, please try again";
    } else {
        updatePasswd($user->getUserId(),$HTTP_POST_VARS{"password"});
        header("Location: index.php");
    }
}

include("../header.php");
?>
<h1>&nbsp;Update Password</h1>

<?php if($error_msg != ""){ ?>
<p class="errortext">
    <?=$error_msg?>
</p>
<?php } ?>

<form name="update_passwd" method="post">
<table cellpadding="4" cellspacing="2" border="0">
<tr>
    <td class="prompt">new password</td>
    <td><input type="password" name="password"></td>
</tr>
<tr>
    <td class="prompt">confirm password</td>
    <td><input type="password" name="confirm_password"></td>
</tr>
<tr>
    <td colspan="2" align="right">
    <input type="submit" name="action" value="update">
    </td>
</table>
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
include("../footer.php");
?>
