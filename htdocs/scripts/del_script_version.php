<?php
// page for deleting script versions
// @requires script_source_id

require_once("../include/init.inc");
require_once("../include/string_utils.inc");
require_once("include/script.inc");
$page_title = "confirm delete";

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
    redirectToLoginPage("/scripts/del_script_version.php?script_source_id=$script_source_id");
} else{
    // make sure they are the creator
    $user = getSessionUser();
    if($version_data{'script_owner'} != $user->getUserId()){
        $msg = "Only the script owner can delete script versions";
        include("$BASE_DIR/error.php");
        exit;
    }
    if($HTTP_GET_VARS{'confirm'}=="yep"){
        // delete the script
        deleteScriptVersion($script_source_id);
        header("Location: script.php?script_id=$script_id");
    }
    if($HTTP_GET_VARS{'confirm'}=="nope"){
        // cancel, return to script detail
        header("Location: script.php?script_id=$script_id");
    }
}

include("../header.php");
?>
Are you sure you want to delete script version <?=$version_data{'script_version'}?> for
    <?=$version_data{'script_name'}?>?
    <form>
    <input type="hidden" name="script_source_id" value="<?=$script_source_id?>">
    <input type="submit" name="confirm" value="yep">
    <input type="submit" name="confirm" value="nope">
    </form>

<!-- fill up with spaces to make the main field wide enough -->
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
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<?php
include("../footer.php");
?>
