<?php
// adds a new script to the repository

require("../include/init.inc");
$error_msg;
if (!isSessionValid()) {
    redirectToLoginPage("/scripts/add_script.php");
}
// handle actions
if($HTTP_POST_VARS{"add_script"} == "cancel"){
    header("Location: index.php");
    exit;
} else if($HTTP_POST_VARS{"add_script"} == "upload"){
    require("include/script.inc");
    // handle save
    $script_name = $HTTP_POST_FILES["script_file"]["name"];
    $script_type = $HTTP_POST_VARS{"script_type"};
    $summary = $HTTP_POST_VARS{"summary"};
    $description = $HTTP_POST_VARS{"description"};
    if($HTTP_POST_FILES["script_file"]["size"]==0) {
        $error_msg = "$script_name is empty, are you sure you specified the correct path?";
    } else if(!$script_name || !$script_type || !$summary || !$description){
        $error_msg = "All fields are required except install details.";
        if(!$script_name){
            $error_msg = $error_msg . " script name";
        }
    } else {
        $install_details = $HTTP_POST_VARS{"install_details"};
        $user = getSessionUser();
        $script_id = saveScript($user->getUserId(),$script_name,$script_type,$summary,$description,$install_details);
        if(mysql_errno()){
            $msg = mysql_error();
            include("$BASE_DIR/error.php");
            exit;
        } 
        $script_version = $HTTP_POST_VARS{'script_version'};
        $vim_version = $HTTP_POST_VARS{'vim_version'};
        $version_comment = "Initial upload";
        $mime_type = $HTTP_POST_FILES["script_file"]["type"];
        $data = addslashes(fread(fopen($HTTP_POST_FILES["script_file"]["tmp_name"], "r"),
                    $HTTP_POST_FILES["script_file"]["size"]));
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
} 

// paint the page

// include the page header
$page_title = "upload";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr>
    <td><img src="images/spacer.gif" width="5" height="1"></td>
    <td>
<br>
<h1>Upload a New Script</h1>
<p><span class="errortext">If this is a new version of a script already uploaded to vim online,
you should add the new version from the page detailing that script.</span>
</p>

<?php if($error_msg!=""){ ?>
    <p><span class="errortext">* * * <?=$error_msg?></span></p>
<?php } ?>


<form name="script" method="post" enctype="multipart/form-data">
<input type="hidden" name="ACTION" value="UPLOAD_NEW">
<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
    <td colspan="2">
    Scripts can be standard text files or collections of scripts as a zip or gzip. Please don't upload large binaries 
    or we will quickly run out of space.  The name of the script will be taken from the file you upload.
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt">script</td>
    <td width="2000"><input type="file" name="script_file"></td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt">type</td>
    <td>
        <select name="script_type">
        <option value="utility">utility</option>
        <option value="syntax">syntax</option>
        <option value="indent">indent</option>
        <option value="color scheme">color scheme</option>
        </select>
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td nowrap class="prompt">vim version</td>
    <td>
        <select name="vim_version">
        <option value="5.7">5.7</option>
        <option value="6.0" selected>6.0</option>
        </select>
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td nowrap class="prompt">initial script version</td>
    <td><input name="script_version" type="textfield" size="6" maxlength="8" value="<?=$HTTP_POST_VARS{'script_version'}?>"></td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt">summary</td>
    <td><input type="textfield" name="summary" size="40" maxlength="80" value="<?=$HTTP_POST_VARS{'summary'}?>"></td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td colspan="2">
    All HTML in descriptions will be escaped for security reasons. If you want to use links, just enter "http://...." 
    and it will be turned into a link. Spaces and returns will be maintained so the general structure of your description
    and install details will be as you entered it. If you want to refer to other tips or scripts you should use the
    syntax "keyword #id" and it will be linked to the correct place. For example: vimtip #6 or vimscript #10.
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt" valign="top">detailed description</td>
    <td>
        <textarea wrap="virtual" rows="10" cols="40" name="description"><?=$HTTP_POST_VARS{"description"}?></textarea>
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt" valign="top">install details</td>
    <td>
        <textarea wrap="virtual" rows="5" cols="40" name="install_details"><?=$HTTP_POST_VARS{"install_details"}?></textarea>
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10"></td></tr><!-- horizontal space -->
<tr>
    <td colspan="2" align="right">
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