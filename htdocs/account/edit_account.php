<?php
// index page for account info

require("../include/init.inc");
// handle actions

if (!isSessionValid()) {
    redirectToLoginPage();
}
$user = getSessionUser();
$error_msg;

if($HTTP_POST_VARS{"action"}=="change"){
    if(!$HTTP_POST_VARS{"email"} ||
        !$HTTP_POST_VARS{"firstName"} ||
        !$HTTP_POST_VARS{"lastName"}){

        $error_msg = "You must complete first name, last name and email";
    } else {
        updateUser($user->getUserId(),
                    $HTTP_POST_VARS{"firstName"},
                    $HTTP_POST_VARS{"lastName"},
                    $HTTP_POST_VARS{"email"});
        header("Location: index.php");
    }
}

// include the page header
$page_title = "edit account info";
include("$BASE_DIR/header.php");
?>

<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
<h1>Edit Account</h1>
<?php if($error_msg != ""){ ?>
<p class="errortext">
    <?=$error_msg?>
</p>
<?php } ?>
<form name="edit_account" method="post">
<table cellpadding="4" cellspacing="2" border="0">
<tr>
    <td class="prompt">user name</td>
    <td><?=$user->getUserName()?></td>
</tr>
<tr>
    <td class="prompt">first name</td>
    <td><input type="text" name="firstName" maxlength="40" value="<?=$user->getFirstName()?>"></td>
</tr>
<tr>
    <td class="prompt">last name</td>
    <td><input type="text" name="lastName" maxlength="40" value="<?=$user->getLastName()?>"></td>
</tr>
<tr>
    <td class="prompt">email</td>
    <td><input type="text" name="email" maxlength="200" value="<?=$user->getEmail()?>"></td>
</tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="action" value="change"></td>
    </tr>
</table>


</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
