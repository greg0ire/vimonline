<?php
// edit the script details

require_once("../include/init.inc");
require_once("include/script.inc");
$error_msg;
$script_data = loadScript($script_id);
# make sure it is a valid script
if(!$script_data{"script_id"}){
    $msg = "script: I couldn't find the script you requested (script_id=$script_id), are you sure it exists?";
    include("$BASE_DIR/error.php");
    exit;
} 

# make sure they are logged in
if (!isSessionValid()) {
    redirectToLoginPage("/script_edit.php");
} else {
    # make sure they are the creator
    $user = getSessionUser();
    if($script_data{'user_id'} != $user->getUserId()){
        $msg = "Only the script creator can edit script details";
        include("$BASE_DIR/error.php");
        exit;
    }
}
// handle actions
if($HTTP_POST_VARS{"save"} == "cancel"){
    header("Location: $BASE/account/index.php");
    exit;
} else if($HTTP_POST_VARS{"save"} == "update"){
    // handle save
    $script_id = $HTTP_POST_VARS{"script_id"};
    $script_name = $HTTP_POST_VARS{"script_name"};
    $summary = $HTTP_POST_VARS{"summary"};
    $description = $HTTP_POST_VARS{"description"};
    if(!$script_name || !$summary || !$description){
        $error_msg = "All fields are required except install details.";
    } else {
        $install_details = $HTTP_POST_VARS{"install_details"};
        $user = getSessionUser();
        updateScript($user->getUserId(),$script_id,$script_name,$summary,$description,$install_details);
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


$page_title = "Edit Script - " . $script_data{'script_name'};

// paint the page
include("../header.php");
?>
<h1><?=$page_title?></h1>

<?php if($error_msg!=""){ ?>
    <p><span class="errortext">* * * <?=$error_msg?></span></p>
<?php } ?>

<form name="script" method="post">
<input type="hidden" name="script_id" value="<?=$script_data{'script_id'}?>">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt">script name</td>
    <td width="2000"><input type="text" name="script_name" value="<?=$script_data{'script_name'}?>"></td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt">summary</td>
    <td><input type="text" name="summary" size="40" maxlength="80" value="<?=$script_data{'summary'}?>"></td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr><!-- horizontal space -->
<tr>
    <td colspan="2">
    All HTML in descriptions will be escaped for security reasons. If you want to use links, just enter "http://...." 
    and it will be turned into a link. Spaces and returns will be maintained so the general structure of your description
    and install details will be as you entered it. If you want to refer to other tips or scripts you should use the
    syntax "keyword #id" and it will be linked to the correct place. For example: vimtip #6 or vimscript #10.
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt" valign="top">detailed description</td>
    <td>
        <textarea wrap="virtual" rows="10" cols="40" name="description"><?=$script_data{"description"}?></textarea>
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr><!-- horizontal space -->
<tr>
    <td class="prompt" valign="top">install details</td>
    <td>
        <textarea wrap="virtual" rows="5" cols="40" name="install_details"><?=$script_data{"install_details"}?></textarea>
    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr><!-- horizontal space -->
<tr>
    <td colspan="2" align="right">
    <input type="submit" name="save" value="update">
    <input type="submit" name="save" value="cancel">
    </td>
</table>

</form>
<?php
include("../footer.php");
?>
