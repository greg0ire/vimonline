<?php
// page for viewing tip details
require("../include/init.inc");
require("../include/string_utils.inc");
require("include/tip.inc");

$tip_id = $HTTP_GET_VARS{'tip_id'}; 
if(!$tip_id){
    // try upper
    $tip_id = $HTTP_GET_VARS{'TIP_ID'}; 
}

setType($tip_id,"integer");
if($HTTP_GET_VARS{'rating'} && $tip_id){
    rateTip($REMOTE_ADDR,$tip_id,$HTTP_GET_VARS{'rating'});
    if(mysql_errno()){
        $msg = mysql_error();
        include("$BASE_DIR/error.php");
        exit;
    }
}
updateTipViews($REMOTE_ADDR,$tip_id);
$tip_data = loadTip($tip_id);
if(mysql_errno()){
    $msg = mysql_error();
    include("$BASE_DIR/error.php");
    exit;
}
if(!$tip_data{'tip_id'}){
    $msg = "Couldn't find tip $tip_id. Are you sure it exists?";
    include("$BASE_DIR/error.php");
    exit;
}
$notes = loadTipNotes($tip_id);
if(mysql_errno()){
    $msg = mysql_error();
    include("$BASE_DIR/error.php");
    exit;
}

// include the page header
$page_title = "Tip #$tip_id";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">

<h1><img src="images/<?=$tip_data{'complexity'}?>.gif" alt="<?=$tip_data{'complexity'}?>">&nbsp;Tip #<?=$tip_data{'tip_id'}?>: <?=escapeForHTML($tip_data{'summary'})?></h1>

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
  <td class="lightbg"><b>tip karma</b></td>
  <td class="lightbg"><img src="images/spacer.gif" height="1" width="8" alt=""></td>
  <td><img src="images/spacer.gif" height="1" width="4" alt=""></td>
  <td>Rating <b><?=$tip_data{"rating_score"}?>/<?=$tip_data{"ratings"}?></b>, Viewed by <?=$tip_data{"viewed"}?></td>
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

<br>

<table cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td class="prompt">created</td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
        <td><?=formatDate($tip_data{'creation_date'})?></td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
        <td class="prompt">complexity</td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
        <td><?=$tip_data{'complexity'}?></td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
    </tr>
    <tr>
        <td class="prompt">author</td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
        <td><?=($tip_data{'created_by_email'})?$tip_data{'created_by_email'}:"Anonymous"?></td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
        <td class="prompt">as of</td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
        <td><?=$tip_data{'version'}?></td>
        <td><img src="images/spacer.gif" width="8" height="1" alt=""></td>
    </tr>
</table>

<p><code><?=escapeForHTML($tip_data{'tip'})?></code></p>
<!-- rating table -->
<?php if(!hasRatedTip($REMOTE_ADDR,$tip_id)) { ?>
<form name="rating">
<input type="hidden" name="tip_id" value="<?=$tip_id?>">
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
  <td class="lightbg"><b>rate this tip</b></td>
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
    } // has rated tip 
?>

    <?php
    $prev_tip = getPrevTip($tip_id);
    $next_tip = getNextTip($tip_id);
    ?>
<small>
    <?php if($prev_tip){ ?>
      <a href="tip.php?tip_id=<?=($prev_tip{'tip_id'})?>">&lt;&lt;<?=escapeForHTML($prev_tip{'summary'})?></a> | 
    <?php } ?>
    <?php if($next_tip){ ?>
        <a href="tip.php?tip_id=<?=($next_tip{'tip_id'})?>"><?=escapeForHTML($next_tip{'summary'})?> &gt;&gt;</a> 
    <?php } ?>
</small>

<h1>Additional Notes</h1>
<form method="get" action="add_tip_note.php">
<input type='hidden' name='tip_id' value="<?=$tip_data{'tip_id'}?>">
<table width="100%" cellpadding="3" cellspacing="0" border="0">
    <!-- spacer -->
    <tr><td><img src="images/spacer.gif" height="4" width="1" alt=""></td></tr>
    <?php
        for($i=0;$i<sizeof($notes);$i++){
            $note_data = $notes[$i];
    ?>
            <tr>
                <td class="lightbg">
		<?php if($note_data{'created_by_email'}) { ?>
                <?=escapeForHTML($note_data{'created_by_email'})?>, 
		<?php } else { ?>
                <b>Anonymous</b>, 
		<?php } ?>
                <font size='-1'> <?=formatDate($note_data{'creation_date'})?> </font>
                </td>
            </tr>
            <!-- spacer -->
            <tr><td><img src="images/spacer.gif" height="4" width="1" alt=""></td></tr>
            <tr>
                <td><tt><?=escapeForHTML($note_data{'note'})?></tt></td>
            </tr>
            <!-- spacer -->
            <tr><td><img src="images/spacer.gif" height="4" width="1" alt=""></td></tr>
     <?php } ?>
    <tr>
        <td>
            <input type="submit" name="Add Note" value="Add Note">
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
