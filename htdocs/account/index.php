<?php
// index page for account info
require_once("../include/init.inc");
require_once("../scripts/include/script.inc");
require_once("../include/string_utils.inc");
$page_title = "account info";
$nav_main = "account";
$nav_sub = "account";
$page_sid = "$BASE_DIR/sid_empty.php";


// handle actions

if (!isSessionValid()) {
    redirectToLoginPage("");
}

include("../header.php");
?>
<h1>Vim Online Account</h1>
    <a href="change_password.php">change password</a> | 
    <a href="edit_account.php">edit account info</a> | 
    <a href="../logout.php">log out</a>
<p>
<table cellpadding="4" cellspacing="2" border="0">
<?php $user = getSessionUser(); ?>
<tr>
    <td class="prompt">user name</td>
    <td><?=$user->getUserName()?></td>
</tr>
<tr>
    <td class="prompt">first name</td>
    <td><?=$user->getFirstName()?></td>
</tr>
<tr>
    <td class="prompt">last name</td>
    <td><?=$user->getLastName()?></td>
</tr>
<tr>
    <td class="prompt">email</td>
    <td><?=$user->getEmail()?></td>
</tr>
<tr>
    <td class="prompt">homepage</td>
    <? if($user->getHomepage()){ 
        $hp = $user->getHomepage();
        if(substr($hp,0,7) != "http://"){
            $hp = "http://" . $hp;
        } 
        $hp = escapeForHTML($hp);
    ?>
        <td><?=$hp?></td>
    <? } else { ?>
        <td></td>
    <? } ?>
</tr>
</table>
</p>
<p>
<?php
if($user->canSubmitNews()){
?>
<a href="<?=$BASE?>/news/submit.php">submit news item</a>
<?php
}
?>
</p>
<h1>Script Contributions</h1>
<table cellspacing="4" cellpadding="2" border="0">
<?php
$scripts = getUsersScripts($user->getUserId());
if(sizeof($scripts)==0){
?>
<i>You have not contributed any scripts</i>
<?php 
} else {
    for($i=0;$i<sizeof($scripts);$i++){
        $script_data = $scripts[$i];
        $rowclass = ($i & 0x1)?"rowodd":"roweven";
?>
<tr>
    <td class="<?=$rowclass?>"><a href="<?=$BASE?>/scripts/script.php?script_id=<?=$script_data{'script_id'}?>"><?=$script_data{'script_name'}?></a></td>
    <td class="<?=$rowclass?>"><?=$script_data{'summary'}?></td>
    <td class="<?=$rowclass?>"><a href="<?=$BASE?>/scripts/add_script_version.php?script_id=<?=$script_data{"script_id"}?>">upload new version</a></td>
    <td class="<?=$rowclass?>"><a href="<?=$BASE?>/scripts/edit_script.php?script_id=<?=$script_data{"script_id"}?>">edit details</a></td>
</tr>
<?php
    }
}
?>
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
