<?php
// page for add a tip to the tip database
require("../include/init.inc");

$create_message;
# handle the add tip action...

# catch cancel
if($HTTP_POST_VARS{"cancel"}){
    header("Location: index.php");
    exit;
} else if($HTTP_POST_VARS{"add"}){
    # add the tip
    $author = $HTTP_POST_VARS{"author"};
    $version = $HTTP_POST_VARS{"version"};
    $complexity = $HTTP_POST_VARS{"complexity"};
    $summary = $HTTP_POST_VARS{"summary"};
    $tip = $HTTP_POST_VARS{"tip"};
    if(($summary!=null) and ($tip!=null)){
        require("include/tip.inc"); 
        $tip_id = createTip($author,$summary,$version,$complexity,$tip);
        if(mysql_errno()){
            $msg = mysql_error();
            include("$BASE_DIR/error.php");
            exit;
        } else {
            $location = "Location: tip.php?tip_id=$tip_id";
            header($location);
            exit;
        }
    } else {
        $create_message="A tip must have a summary and some sort of tip text. (I wouldn't be much of a tip otherwise eh?)";
    }
}
// begin page

// include the page header
$page_title = "add a tip";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td>
<h1>Add a Tip</h1>

<?php if($create_message) { ?>
    <p class="errortext"><?=$create_message?></p>
<?php } ?>

<form name="add_tip" method="post">
<table cellpadding="0" cellspacing="4" border="0">
    <tr>
        <td><b>author</b></td><td colspan="5"><input type="text" name="author" size="60" maxlength="100" value="<?=$HTTP_POST_VARS{'author'}?>"></td>
    </tr>
    <tr>
        <td><b>as of</b></td>
        <td>
        <select name="version">
            <option name="5.7">5.7</option>
            <option name="6.0">6.0</option>
        </select>
        </td>
        <td><img src="images/spacer.gif" width="4" height="1" alt=""></td>
        <td><b>complexity</b></td>
        <td>
        <select name="complexity">
            <option name="basic">basic</option>
            <option name="intermediate">intermediate</option>
            <option name="advanced">advanced</option>
        </select>
        </td>
        <td><img src="images/spacer.gif" width="4" height="1" alt=""></td>
    </tr>
    <tr>
        <td><b>summary</b></td><td colspan="5"><input type="text" size="60" maxlength="200" name="summary" value="<?=$HTTP_POST_VARS{'summary'}?>"></td>
    </tr>
</table>
<p>
Your tip should include some context to why one might want to use 
the tip and references to vim help for additional reading. 
All HTML in descriptions will be escaped for security reasons. If you want to use 
links, just enter "http://...." and it will be turned into a link. Spaces and returns 
will be maintained so the general structure of your tip will be as you entered it. If 
you want to refer to other tips or scripts you should use the syntax "keyword #id" and 
it will be linked to the correct place. For example: vimtip #6 or vimscript #10.
</p>
<table width="100%">
    <tr>
        <td>
        <textarea wrap="virtual" rows="15" cols="80" name="tip"><?=$HTTP_POST_VARS{'tip'}?></textarea>
        </td>
    </tr>
    <tr>
        <td align="right">
        <input type="submit" name="add" value=" add ">
        <input type="submit" name="cancel" value="cancel">
        </td>
    </tr>
</table>
</form>
<br/>
<br/>

</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
