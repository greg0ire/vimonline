<?php
// page for viewing script info (including available versions)
// @requires script_id

require("../include/init.inc");
require("include/script.inc");
require("$BASE_DIR/include/string_utils.inc");

$script_id = $HTTP_GET_VARS{"script_id"};
if(!$script_id){
    $msg = "script: hmmm...missing a script_id. Did you get here from a vim online link?";
    include("$BASE_DIR/error.php");
    exit;
}

if($HTTP_GET_VARS{"rating"}){
    rateScript($REMOTE_ADDR,$script_id,$HTTP_GET_VARS{"rating"});
}
$script_data = loadScript($script_id);
if(mysql_errno()){
    $msg = "script:" . mysql_error();
    include("$BASE_DIR/error.php");
    exit;
} 
if(!$script_data{"script_id"}){
    $msg = "script: I couldn't find the script you requested (script_id=$script_id), are you sure it exists?";
    include("$BASE_DIR/error.php");
    exit;
} 
$isOwner = false;
if (isSessionValid()) {
    $user = getSessionUser();
    if($script_data{'user_id'} == $user->getUserId()){
        $isOwner = true;
    }
}
// paint the page

// include the page header
$page_title = $script_data{'script_name'};
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
<br>
<span class="txth1"><?=$script_data{"script_name"}?> : <?=escapeForHTML($script_data{"summary"})?></span> 
<?php
if ($isOwner) {
?>
        (<a href="edit_script.php?script_id=<?=$script_data{"script_id"}?>">edit details</a>)
<?php
    }
?>

<br>
<br>

<!-- karma table -->
<table cellpadding="0" cellspacing="0" border="0" bordercolor="#f00000">
<tr>
  <td colspan="8" bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="2" width="1" alt=""></td>
  <td colspan="3" class="lightbg"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
  <td colspan="3"><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
  <td class="lightbg"><img src="images/spacer.gif" height="1" width="8" alt=""></td>
  <td class="lightbg"><b>script karma</b></td>
  <td class="lightbg"><img src="images/spacer.gif" height="1" width="8" alt=""></td>
  <td><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td>Rating <b><?=$script_data{"rating_score"}?>/<?=$script_data{"ratings"}?></b>, Downloaded by <?=$script_data{"downloads"}?></td>
  <td><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="2" width="1" alt=""></td>
  <td colspan="3" class="lightbg"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
  <td colspan="3"><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td colspan="8" bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" border="0">
<tr><td><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr><td class="prompt">created by</td></tr>
<tr><td><a href="<?=$BASE?>/account/profile.php?user_id=<?=$script_data{'user_id'}?>"><?=$script_data{'first_name'}?> <?=$script_data{'last_name'}?></a></td></tr>
<tr><td><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr><td class="prompt">script type</td></tr>
<tr><td><?=$script_data{'script_type'}?></td></tr>
<tr><td><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr><td class="prompt">description</td></tr>
<tr><td><?=escapeForHTML($script_data{'description'})?></td></tr>
<tr><td><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr><td class="prompt">install details</td></tr>
<tr><td><?=escapeForHTML($script_data{'install_details'})?></td></tr>
<tr><td><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
</table>

<?php if(!hasRatedScript($REMOTE_ADDR,$script_id)) {  ?>
<!-- rating table -->
<form name="rating">
<input type="hidden" name="script_id" value="<?=$script_id?>">
<table cellpadding="0" cellspacing="0" border="0" bordercolor="#f00000">
<tr>
  <td colspan="8" bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="2" width="1" alt=""></td>
  <td colspan="3" class="lightbg"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
  <td colspan="3"><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
  <td class="lightbg"><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td class="lightbg"><b>rate this script</b></td>
  <td class="lightbg"><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td>
<input type="radio" name="rating" value="life_changing">Life Changing
<input type="radio" name="rating" value="helpful">Helpful
<input type="radio" name="rating" value="unfulfilling">Unfulfilling&nbsp;
<input type="submit" value="rate">
</td>
  <td><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="2" width="1" alt=""></td>
  <td colspan="3" class="lightbg"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
  <td colspan="3"><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
<tr>
  <td colspan="8" bgcolor="#000066"><img src="images/spacer.gif" height="1" width="1" alt=""></td>
</tr>
</table>
</form>
<?php 
} // !hasRatedScript 
?>
<span class="txth2">script versions</span> (<a href="add_script_version.php?script_id=<?=$script_data{"script_id"}?>">upload new version</a>)
<p>
Click on the package to download.

<table cellspacing="0" cellpadding="4" border="0" width="100%">
<tr><td colspan="6"><img src="images/spacer.gif" height="10" width="1" alt=""></td></tr>
<?php 
$versions = loadScriptVersions($script_id);
?>
<tr>
    <?php if($isOwner && sizeof($versions)!=1) { ?>
    <td valign="top" class="tableheader"></td>
    <?php } ?>
    <td valign="top" class="tableheader">package</td>
    <td valign="top" class="tableheader">script version</td>
    <td valign="top" class="tableheader">date</td>
    <td valign="top" class="tableheader">vim version</td>
    <td valign="top" class="tableheader">user</td>
    <td valign="top" class="tableheader">release notes</td>
</tr>
<?php 
$versions = loadScriptVersions($script_id);
for($i=0;$i<sizeof($versions);$i++){
    $source_data = $versions[$i];
    $rowclass = ($i & 0x1)?"roweven":"rowodd";
?>
<tr>
    <?php if($isOwner && sizeof($versions)!=1) { ?>
    <td class="<?=$rowclass?>" valign="top" nowrap><a href="delete_script_version.php?script_source_id=<?=$source_data{'script_source_id'}?>"><img alt="delete this version" src="<?=$IMAGES?>/delete.gif" border="0"></a></td>
    <?php } ?>
    <td class="<?=$rowclass?>" valign="top" nowrap><a href="download.php?src_id=<?=$source_data{'script_source_id'}?>"><?=$source_data{'package'}?></a></td>
    <td class="<?=$rowclass?>" valign="top" nowrap><b><?=$source_data{"script_version"}?></b></td>
    <td class="<?=$rowclass?>" valign="top" nowrap><i><?=formatNewsDate($source_data{"creation_date"})?></i></td>
    <td class="<?=$rowclass?>" valign="top" nowrap><?=$source_data{"vim_version"}?></td>
    <td class="<?=$rowclass?>" valign="top"><i><a href="<?=$BASE?>/account/profile.php?user_id=<?=$source_data{'user_id'}?>"><?=$source_data{"first_name"}?> <?=$source_data{"last_name"}?></a></i></td>
    <td class="<?=$rowclass?>" valign="top" width="2000"><?=escapeForHTML($source_data{"version_comment"})?></td>
</tr>
<?php } ?>
</table>


</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>

