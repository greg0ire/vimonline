<?php

require("include/init.inc");

// if an account was requested, attempt to create it
$errorMessage = "";
if($HTTP_POST_VARS{"createUser"}){
    if ($HTTP_POST_VARS{"password"} == $HTTP_POST_VARS{"passwordConfirm"}) {
        $userId = createUser($HTTP_POST_VARS{"userName"}, $HTTP_POST_VARS{"password"}, $HTTP_POST_VARS{"firstName"}, $HTTP_POST_VARS{"lastName"},$HTTP_POST_VARS{"email"});
        if ($userId) {
            createSession($userId);
            redirectToAccountPage();
        } else {
            $errorMessage = "An account with the user name ".$HTTP_POST_VARS{"userName"} . " already exists. Please
                choose another user name.";
        }
    } else {
        $errorMessage = "Passwords do not match. Please try again.";
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

<h1>Create an Account</h1>
<?php
if($errorMessage != ""){
?>
<p class="errortext"><?=$errorMessage?></p>
<?php
}
?>

<p>
The following information is required to create an account.
</p>
<form name="login" method="post">
<input type="hidden" name="createUser" value="true">
<table cellspacing="4" cellpadding="2" border="0">
    <tr>
        <td class="prompt">user name</td>
        <td><input type="text" name="userName" maxlength="40" value="<?=$HTTP_POST_VARS{'userName'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">first name</td>
        <td><input type="text" name="firstName" maxlength="40" value="<?=$HTTP_POST_VARS{'firstName'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">last name</td>
        <td><input type="text" name="lastName" maxlength="40" value="<?=$HTTP_POST_VARS{'lastName'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">email</td>
        <td><input type="text" name="email" maxlength="200" value="<?=$HTTP_POST_VARS{'email'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td class="prompt">confirm password</td>
        <td><input type="password" name="passwordConfirm"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" value="create"></td>
    </tr>
</table>

</form>
</p>

</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
