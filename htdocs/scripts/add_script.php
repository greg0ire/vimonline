<?php
// adds a new script to the repository
require_once("../include/init.inc");
require_once("include/script.inc");
$error_msg;
if (!isSessionValid()) {
    redirectToLoginPage("/scripts/add_script.php");
}
// handle actions
if($HTTP_POST_VARS{"add_script"} == "cancel"){
    header("Location: index.php");
    exit;
} else if($HTTP_POST_VARS{"add_script"} == "upload"){
    // handle save
    $package_name = basename($HTTP_POST_FILES["script_file"]["name"]);
    $script_name = $HTTP_POST_VARS{"script_name"};
    $script_type = $HTTP_POST_VARS{"script_type"};
    $summary = $HTTP_POST_VARS{"summary"};
    $description = $HTTP_POST_VARS{"description"};
    $install_details = $HTTP_POST_VARS{"install_details"};
    if($HTTP_POST_FILES["script_file"]["size"]==0) {
        $error_msg = "The package you uploaded ($package_name) is empty, are you sure you specified the correct path?";
    } else if(!$package_name || !$script_name || !$script_type || !$summary || !$description || !$script_version){
        $error_msg = "All fields are required except install details.";
    } else {
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
} 

// paint the page

$page_title = "upload script";
$nav_main = "scripts";
$nav_sub = "script_add";
$page_sid = "$BASE_DIR/sid_empty.php";

include("../header.php");
?>
<h1>Upload a New Script</h1>

<p>
<span class="errortext">If this is a new version of a script already uploaded
to vim online, you should add the new version from the page detailing that
script.</span>
</p>

<?php if($error_msg!=""){ ?>
    <p><span class="errortext">* * * <?=$error_msg?></span></p>
<?php } ?>


<form name="script" method="post" enctype="multipart/form-data">
<input type="hidden" name="ACTION" value="UPLOAD_NEW">
<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
<table border="0" width="100%" cellpadding="0" cellspacing="4">
<tr>
    <td colspan="2">
    The script name is the name that vim online users will associate with your script.
    The script name can be different from the package you upload in the case
    where your script is made up of several different files. An example is if I was writing
    a script foo.vim that also had vim help file and a README file I would name the script 
    foo.vim but my script package would be foo.tar.gz.
    </td>
</tr>
<tr>
    <td class="prompt">script name *</td>
    <td><input type="text" name="script_name" size="40" maxlength="80" value="<?=$HTTP_POST_VARS{'script_name'}?>"></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
    <td colspan="2">
    The script package is the script file or a collection of bundled files. 
    </td>
</tr>
<tr>
    <td class="prompt">script package *</td>
    <td><input type="file" name="script_file"></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
    <td class="prompt">type *</td>
    <td>
        <select name="script_type">
        <option value=""></option>
        <?=getScriptTypeDropDown()?>
        </select>
    </td>
</tr>
<tr>
    <td nowrap class="prompt">Vim version *</td>
    <td>
        <select name="vim_version">
        <option value="5.7">5.7</option>
        <option value="6.0" selected>6.0</option>
        </select>
    </td>
</tr>
<tr>
    <td nowrap class="prompt">initial script version *</td>
    <td><input name="script_version" type="text" size="6" maxlength="8" value="<?=$HTTP_POST_VARS{'script_version'}?>"></td>
</tr>
<tr>
    <td class="prompt">summary *</td>
    <td><input type="text" name="summary" size="40" maxlength="80" value="<?=$HTTP_POST_VARS{'summary'}?>"></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
    <td colspan="2">
    All HTML in descriptions will be escaped for security reasons. If you want to use links, just enter "http://...." 
    and it will be turned into a link. Spaces and returns will be maintained so the general structure of your description
    and install details will be as you entered it. If you want to refer to other tips or scripts you should use the
    syntax "keyword #id" and it will be linked to the correct place. For example: vimtip #6 or vimscript #10.
    </td>
</tr>
<tr>
    <td class="prompt" valign="top" nowrap>detailed description *</td>
    <td>
        <textarea wrap="virtual" rows="10" cols="40" name="description"><?=$HTTP_POST_VARS{"description"}?></textarea>
    </td>
</tr>
<tr>
    <td class="prompt" valign="top">install details</td>
    <td>
        <textarea wrap="virtual" rows="5" cols="40" name="install_details"><?=$HTTP_POST_VARS{"install_details"}?></textarea>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>
    <input type="submit" name="add_script" value="upload">
    <input type="submit" name="add_script" value="cancel">
    </td>
</tr>
</table>

</form>
<?php
include("../footer.php");
?>
