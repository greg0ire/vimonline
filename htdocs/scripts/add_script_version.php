<?php
// adds a new script version to the repository
// @requires script_id

require("../include/init.inc");
require("include/script.inc");
$error_msg;
$script_id = $HTTP_GET_VARS{"script_id"};
if (!isSessionValid()) {
    redirectToLoginPage("/scripts/add_script_version.php?script_id=$script_id");
}
// paint the page
$script_data = loadScript($script_id);
if(mysql_errno()){
    $msg = "script_add_version: " . mysql_error();
    include("$BASE_DIR/error.php");
    exit;
} 
if(!$script_data{"script_id"}){
    $msg = "script_add_version: I couldn't find the script you requested (script_id=$script_id), are you sure exists?";
    include("$BASE_DIR/error.php");
    exit;
} 
$script_id = $script_data{"script_id"};
$user = getSessionUser();
if($script_data{'user_id'} != $user->getUserId()){
    $msg = "script add version: You must be the script owner to upload new versions.";
    include("$BASE_DIR/error.php");
    exit;
}

// handle actions
if($HTTP_POST_VARS{"add_script"}=="upload"){
    // handle save
    $package_name = basename($HTTP_POST_FILES["script_file"]["name"]);
    $script_version = $HTTP_POST_VARS{'script_version'};
    $vim_version = $HTTP_POST_VARS{'vim_version'};
    $version_comment = $HTTP_POST_VARS{'version_comment'};
    if(!$script_version || !$vim_version || !$version_comment || !$package_name){
        $error_msg = "All fields are required.";
    } else if($HTTP_POST_FILES["script_file"]["size"]==0) {
        $error_msg = "$package_name is empty, are you sure you specified the correct path?";
    } else {
        $mime_type = $HTTP_POST_FILES["script_file"]["type"];
        $data = addslashes(fread(fopen($HTTP_POST_FILES["script_file"]["tmp_name"], "r"),
                    $HTTP_POST_FILES["script_file"]["size"]));
        $user = getSessionUser();
        saveScriptSource($user->getUserId(),$script_id,$package_name,$vim_version,$script_version,$version_comment,$mime_type,$data);
        if(mysql_errno()){
            $msg = mysql_error();
            include("$BASE_DIR/error.php");
            exit;
        } 
        // save successfull, redirect to script detail
        header("Location: script.php?script_id=$script_id");
        exit;
    }
} else if ($HTTP_POST_VARS{"add_script"}=="cancel"){
    // handle cancel, redirect to index
    header("Location: script.php?script_id=$script_id");
    exit;
}

$recent_version = loadLatestScriptVersion($script_id);
if(mysql_errno()){
    $msg = "script_add_version:" . mysql_error();
    include("$BASE_DIR/error.php");
    exit;
} 

// include the page header
$page_title = "upload new version";

include("../header.php");
?>
<h1>Upload a new version of <?=$script_data{'script_name'}?></h1>
<?php if($error_msg!=""){ ?>
    <p><span class="errortext"><?=$error_msg?></span></p>
<?php } ?>

<p>
Current script version is <?=$recent_version{'script_version'}?>
</p>
<form name="script" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
<table cellpadding="2" cellspacing="2" border="0" width="100%">
<tr>
    <td class="prompt" nowrap>script package *</td>
    <td><input type="file" name="script_file"><?=$HTTP_POST_VARS{"script_file"}?></td>
</tr>
<tr>
    <td nowrap class="prompt">vim version *</td>
    <td>
        <select name="vim_version">
        <option value="5.7">5.7</option>
        <option value="6.0" selected>6.0</option>
        </select>
    </td>
</tr>
<tr>
    <td nowrap class="prompt">script version *</td>
    <td><input name="script_version" type="text" size="10" maxlength="10" value="<?=$HTTP_POST_VARS{'script_version'}?>"></td>
</tr>
<tr>
    <td class="prompt" valign="top">version comment *</td>
    <td>
        <textarea wrap="virtual" rows="5" cols="40" name="version_comment"><?=$HTTP_POST_VARS{"version_comment"}?></textarea>
    </td>
</tr>
<tr>
    <td colspan="2" align="right">
    <input type="hidden" name="script_id" value="<?=$script_id?>">
    <input type="submit" name="add_script" value="upload">
    <input type="submit" name="add_script" value="cancel">
    </td>
</table>

</form>
<?php
include("../footer.php");
?>
