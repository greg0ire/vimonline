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

// handle actions
if($HTTP_POST_VARS{"add_script"}=="upload"){
    // handle save
    $script_name = $HTTP_POST_FILES["script_file"]["name"];
    $script_id = $HTTP_POST_VARS{"script_id"};
    $script_version = $HTTP_POST_VARS{'script_version'};
    $vim_version = $HTTP_POST_VARS{'vim_version'};
    $version_comment = $HTTP_POST_VARS{'version_comment'};
    if(!$script_version || !$vim_version || !$version_comment || !$script_name){
        $error_msg = "All fields are required.";
    } else if($HTTP_POST_FILES["script_file"]["size"]==0) {
        $error_msg = "$script_name is empty, are you sure you specified the correct path?";
    } else {
        $mime_type = $HTTP_POST_FILES["script_file"]["type"];
        $data = addslashes(fread(fopen($HTTP_POST_FILES["script_file"]["tmp_name"], "r"),
                    $HTTP_POST_FILES["script_file"]["size"]));
        $user = getSessionUser();
        saveScriptSource($user->getUserId(),$script_id,$vim_version,$script_version,$version_comment,$mime_type,$data);
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
    header("Location: index.php");
    exit;
}

// paint the page
$script_data = loadScript($script_id);
if(mysql_errno()){
    $msg = "add_script_version:" . mysql_error();
    include("$BASE_DIR/error.php");
    exit;
} 
if(!$script_data{"script_id"}){
    $msg = "add_script_version: I couldn't find the script you requested (script_id=$script_id), are you sure exists?";
    include("$BASE_DIR/error.php");
    exit;
} 
$recent_version = loadLatestScriptVersion($script_id);
if(mysql_errno()){
    $msg = "add_script_version:" . mysql_error();
    include("$BASE_DIR/error.php");
    exit;
} 

// include the page header
$page_title = "upload new version";
include("$BASE_DIR/header.php");
?>

<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td>
<br>
<h1>Upload a New Version of <?=$script_data{'script_name'}?></h1>
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
    <td class="prompt">script</td>
    <td width="2000"><input type="file" name="script_file"><?=$HTTP_POST_VARS{"script_file"}?></td>
</tr>
<tr>
    <td nowrap class="prompt">vim version</td>
    <td>
        <select name="vim_version">
        <option value="5.7">5.7</option>
        <option value="6.0" selected>6.0</option>
        </select>
    </td>
</tr>
<tr>
    <td nowrap class="prompt">script version</td>
    <td><input name="script_version" type="text" size="10" maxlength="10" value="<?=$HTTP_POST_VARS{'script_version'}?>"></td>
</tr>
<tr>
    <td class="prompt" valign="top">version comment</td>
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
</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
