<?php
// displays a user's profile
// this is the page that is visible to the world when people
// click through a name as oppose to account.php which shows 
// a user their account info
require_once("../include/init.inc");
require_once("../include/string_utils.inc");
require_once("../scripts/include/script.inc");
$page_title = "user profile";

$userId = $HTTP_GET_VARS{"user_id"};
if(!$user_id){
    $msg = "profile: " . "unspecified user_id";
    include("$BASE_DIR/error.php");
    exit;
}
$user = getUserById($userId);
if(!$user->getUserId()){
    $msg = "profile: " . "unknown user id $user_id";
    include("$BASE_DIR/error.php");
    exit;
}

include("../header.php");
?>
<h1>Profile</h1>
<table cellpadding="4" cellspacing="2" border="0">
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
    <td><?= $user->getLastName()?></td>
</tr>
<tr>
    <td class="prompt">email</td>
    <td><?=escapeEmail($user->getEmail())?></td>
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

<h1>Script Contributions</h1>
<?php
$scripts = getUsersScripts($user->getUserId());
if(sizeof($scripts)==0){
?>
<i><?=$user->getFirstName()?> has not contributed any scripts</i>
<?php 
} else {
?>
<table cellspacing="4" cellpadding="2" border="0">
<?php 
    for($i=0;$i<sizeof($scripts);$i++){
        $script_data = $scripts[$i];
        $rowclass = ($i & 0x1)?"rowodd":"roweven";
?>
<tr>
    <td class="<?=$rowclass?>"><a href="script.php?script_id=<?=$script_data{'script_id'}?>"><?=$script_data{'script_name'}?></a></td>
    <td class="<?=$rowclass?>"><?=$script_data{'summary'}?></td>
</tr>
<?php
    }
?>
</table>
<?php
}
?>
<?php
include("../footer.php");
?>

