<?php
// page for deleting script versions
// @requires script_source_id

require("../include/init.inc");
require("$BASE_DIR/include/string_utils.inc");
require("include/script.inc");

$script_source_id = $HTTP_GET_VARS{'script_source_id'};
$version_data = loadScriptVersion($script_source_id);
if(!$version_data{'script_source_id'}){
    $msg = "I can't find that script version...are you sure it exists?";
    include("$BASE_DIR/error.php");
    exit;
}
$script_id = $version_data{'script_id'};
if(getTotalScriptVersions($script_id)==1){
    $msg = "A script must have at least 1 version, you cannot delete the last one.";
    include("$BASE_DIR/error.php");
    exit;
}
if (!isSessionValid()) {
    redirectToLoginPage("/scripts/delete_script_version.php?script_source_id=$script_source_id");
} else{
    // make sure they are the creator
    $user = getSessionUser();
    if($version_data{'user_id'} != $user->getUserId()){
        $msg = "Only the script owner can delete script versions";
        include("$BASE_DIR/error.php");
        exit;
    }
    if($HTTP_GET_VARS{'confirm'}=="yep"){
        // delete the script
        deleteScriptVersion($script_source_id);
        header("Location: script.php?script_id=$script_id");
    }
    if($HTTP_GET_VARS{'nope'}=="nope"){
        // cancel, return to script detail
        header("Location: script.php?script_id=$script_id");
    }
}

$page_title = "confirm delete";
include("$BASE_DIR/header.php");

?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
    <br>

Are you sure you want to delete script version <?=$version_data{'script_version'}?> for
    <?=$version_data{'script_name'}?>?
    <form>
    <input type="hidden" name="script_source_id" value="<?=$script_source_id?>">
    <input type="submit" name="confirm" value="yep">
    <input type="submit" name="confirm" value="nope">
    </form>


</td>
</tr>
</table>


<?php
include("$BASE_DIR/footer.php");
?>

