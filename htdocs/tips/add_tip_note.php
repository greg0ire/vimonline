<?php
// page for adding notes to tips
require_once("../include/init.inc");
require_once("include/tip.inc");

$create_message;
$tip_id;
if($HTTP_GET_VARS{"tip_id"}){
    $tip_id = $HTTP_GET_VARS{"tip_id"};
} else if($HTTP_POST_VARS{"tip_id"}){
    $tip_id = $HTTP_POST_VARS{"tip_id"};
} else {
    $msg="You are trying to add a note without a valid tip #($tip_id). How did that happen?";
    include("$BASE_DIR/error.php");
    exit;
}
# handle add note action

# catch cancel
if($HTTP_POST_VARS{"cancel"}){
    header("Location: tip.php?tip_id=$tip_id");
    exit;
} else if($HTTP_POST_VARS{"add"}){
    $email = $HTTP_POST_VARS{"email"};
    $note = $HTTP_POST_VARS{"note"};
    $tip_id = $HTTP_POST_VARS{"tip_id"};
    if($note!=null){
        createTipNote($tip_id,$email,$note);
        if(mysql_errno()){
            $msg = mysql_error();
            include("error.php");
            exit;
        } else {
            # success! redirect to tip page
            $location = "Location: tip.php?tip_id=$tip_id";
            header($location);
            exit;
        }
    } else {
        $create_message="Blank note? Not much of a note eh?";
    }
}

$page_title = "Add a Note to Tip #" . $HTTP_GET_VARS{'tip_id'};

include("../header.php");
?>
<h1><?=$page_title?></h1>
<p>
All HTML in descriptions will be escaped for security reasons. If you want to
use links, just enter "http://...." and it will be turned into a link. Spaces
and returns will be maintained so the general structure of your note will be as
you entered it. If you want to refer to other tips or scripts you should use
the syntax "keyword #id" and it will be linked to the correct place. For
example: vimtip #6 or vimscript #10.
</p>

<?php if($create_message) { ?>
    <p class="errortext"><?=$create_message?></p>
<?php } ?>

<form name="add_note" method="post">
<input type='hidden' name='tip_id' value='<?=$tip_id?>'>
<table cellpadding="0" cellspacing="4" border="0">
    <tr>
        <td class="prompt">email</td>
        <td colspan="6"><input type="text" name="email" size="60" maxlength="100" value="<?=$HTTP_POST_VARS{'email'}?>"></td>
    </tr>
</table>
<table cellpadding="4" cellspacing="0" border="0" width="100%">
    <tr>
        <td colspan="6">
        <textarea wrap="virtual" rows="15" cols="80" name="note"><?=$HTTP_POST_VARS{'note'}?></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="6" align="right">
        <input type="submit" name="add" value=" add ">
        <input type="submit" name="cancel" value="cancel">
        </td>
    </tr>
</table>
</form>
<?php
include("../footer.php");
?>

