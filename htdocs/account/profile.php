<?php
// displays a user's profile

require("../include/init.inc");
require("../include/string_utils.inc");

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
// include the page header
$page_title = "profile";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
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
<tr>
</tr>
</table>
</p>
<h1>Script Contributions</h1>
<table cellspacing="4" cellpadding="2" border="0">
<?php
require("$BASE_DIR/scripts/include/script.inc");
$scripts = getUsersScripts($user->getUserId());
if(sizeof($scripts)==0){
?>
<i><?=$user->getFirstName()?> has not contributed any scripts</i>
<?php 
} else {
    for($i=0;$i<sizeof($scripts);$i++){
        $script_data = $scripts[$i];
        $rowclass = ($i & 0x1)?"rowodd":"roweven";
?>
<tr>
    <td class="<?=$rowclass?>"><a href="<?=$BASE?>/scripts/script.php?script_id=<?=$script_data{'script_id'}?>"><?=$script_data{'script_name'}?></a></td>
    <td class="<?=$rowclass?>"><?=$script_data{'summary'}?></td>
</tr>
<?php
    }
}
?>
</table>



</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
