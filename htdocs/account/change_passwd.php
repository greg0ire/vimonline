<?php
// index page for account info

require("../include/init.inc");
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

// include the page header
$page_title = "update passwd";
include("$BASE_DIR/header.php");
?>

<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
<h1>Update Passwd</h1>
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

</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
