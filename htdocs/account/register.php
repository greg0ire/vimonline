<?php
require_once("../include/init.inc");
$page_title = "create an account";
$nav_main = "account";
$nav_sub = "register";
$page_sid = "$BASE_DIR/sid_empty.php";

// if an account was requested, attempt to create it
$errorMessage = "";
if($HTTP_POST_VARS{"createUser"}){
    if ($HTTP_POST_VARS{"password"} == $HTTP_POST_VARS{"passwordConfirm"}) {
        $userId = createUser($HTTP_POST_VARS{"userName"}, $HTTP_POST_VARS{"password"}, $HTTP_POST_VARS{"firstName"}, $HTTP_POST_VARS{"lastName"},$HTTP_POST_VARS{"email"},$HTTP_POST_VARS{"homepage"});
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

include("../header.php");
?>
<h1>Create an Account</h1>
<?php
if($errorMessage != ""){
?>
<p class="errortext"><?=$errorMessage?></p>
<?php
}
?>

<p>
Information with a * is required to create an account.
</p>
<p>
Please note we are not going to send you junk email "member updates" or sell your address to spammers. This email exists so that you can receive your password, and/or retrieve it if you forget. That's all. Addresses are stored in a protected mysql database at SourceForge.</p>

<p>Providing an email address will also allow users to contact you if they have problems with your scripts.</p>
<p>Finally, don't worry about spam address harvests, when we display an email address we remove the @ sign so spammers could not easily harvest this site. For example my address would be displayed as "scrott at users.sf.net."
</p>
<p>
Oh, and one more thing. We use a one way hash to encrypt your password just in case you were wondering.
</p>
<form name="login" method="post">
<input type="hidden" name="createUser" value="true">
<table cellspacing="4" cellpadding="2" border="0">
    <tr>
        <td class="prompt">user name *</td>
        <td><input type="text" name="userName" maxlength="40" value="<?=$HTTP_POST_VARS{'userName'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">first name *</td>
        <td><input type="text" name="firstName" maxlength="40" value="<?=$HTTP_POST_VARS{'firstName'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">last name *</td>
        <td><input type="text" name="lastName" maxlength="40" value="<?=$HTTP_POST_VARS{'lastName'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">email *</td>
        <td><input type="text" name="email" maxlength="200" value="<?=$HTTP_POST_VARS{'email'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">homepage</td>
        <td><input type="text" name="homepage" maxlength="255" value="<?=$HTTP_POST_VARS{'homepage'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">password *</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td class="prompt">confirm password *</td>
        <td><input type="password" name="passwordConfirm"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="create"></td>
    </tr>
</table>

</form>

<?php
include("../footer.php");
?>
