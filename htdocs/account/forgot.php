<?php
// index page for account info

require("../include/init.inc");

// handle actions
$success = "";
if($HTTP_POST_VARS{'mail'}){
    if(!$HTTP_POST_VARS{'email_address'}){
        $msg = "Please enter an email address";
    } else {
        $addr = $HTTP_POST_VARS{'email_address'};
        $user = getUserByEmail($addr);
        if(!$user){
            $msg = "Couldn't find a user with the email address <b>$addr</b>. Are you sure you have an account?";
        } else {
            generateNewPassword($user);
            $success = $addr;
        }
    }
}

// include the page header
$page_title = "password help";
include("$BASE_DIR/header.php");
?>

<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">

<h1>password help</h1>
<?php
    if(!$success){
        if($msg){
?>
    <p class="errortext"><?=$msg?></p>
<?php
        } else {
?>
<p>Please enter your email address and a new password will be mailed to you.</p>
<?php
        }
?>

<form method="post">
<table cellpadding="4" cellspacing="2" border="0">
<tr>
    <td class="prompt">email address</td>
    <td><input type="text" name="email_address" maxlength="40"></td>
</tr>
<tr>
    <td><input type="submit" name="mail" value="mail passwd"></td>
    <td></td>
</tr>
</table>
</form>
<?php
    } else {
?>
<p>A new email password has been sent to <b><?=$addr?></b>. It should arrive shortly.</p>
<p><a href="">Return to login page</a></p>
</tr>
<?php
    }
?>
</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
