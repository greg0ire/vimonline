<?php
// page for displaying tips
require_once("../include/init.inc");
require_once("../include/string_utils.inc");
require_once("include/tip.inc");

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

$page_title = "Tip #$tip_id" . ' - ' . $tip_data{'summary'};
// paint the page
include("../header.php");
?>


<h1><img src="images/<?=$tip_data{'complexity'}?>.gif" alt="<?=$tip_data{'complexity'}?>">&nbsp;Tip #<?=$tip_data{'tip_id'}?>: <?=escapeForHTML($tip_data{'summary'})?></h1>

<!-- karma table -->
<table cellpadding="4" cellspacing="0" border="1" bordercolor="#000066">
<tr>
  <td class="lightbg"><b>&nbsp;tip karma&nbsp;</b></td>
  <td>
    &nbsp;Rating <b><?=$tip_data{"rating_score"}?>/<?=$tip_data{"ratings"}?></b>, Viewed by <?=$tip_data{"viewed"}?>&nbsp;
  </td>
</tr>
</table>

<br>

<table cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td class="prompt">created:</td>
    <td>&nbsp;</td>
    <td><?=formatDate($tip_data{'creation_date'})?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td class="prompt">complexity:</td>
    <td>&nbsp;</td>
    <td><?=$tip_data{'complexity'}?></td>
  </tr>
  <tr>
    <td class="prompt">author:</td>
    <td>&nbsp;</td>
    <td><?=($tip_data{'created_by_email'})?$tip_data{'created_by_email'}:"Anonymous"?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td class="prompt">as of Vim:</td>
    <td>&nbsp;</td>
    <td><?=$tip_data{'version'}?></td>
  </tr>
</table>

<p><code><?=escapeForHTML($tip_data{'tip'})?></code></p>

<!-- rating table -->
<?php if(!hasRatedTip($REMOTE_ADDR,$tip_id)) { ?>
<form name="rating">
  <input type="hidden" name="tip_id" value="<?=$tip_id?>">
  <table cellpadding="4" cellspacing="0" border="1" bordercolor="#000066">
    <tr>
      <td class="lightbg"><b>&nbsp;rate this tip&nbsp;</b></td>
      <td valign="middle">
	<input type="radio" name="rating" value="life_changing">Life Changing
	<input type="radio" name="rating" value="helpful">Helpful
	<input type="radio" name="rating" value="unfulfilling">Unfulfilling&nbsp;
	<input type="submit" value="rate">
      </td>
    </tr>
  </table>
</form>
<p>
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

<br>
<br>
<h1>Additional Notes</h1>

<form method="get" action="add_tip_note.php">
<input type='hidden' name='tip_id' value="<?=$tip_data{'tip_id'}?>">
<table width="100%" cellpadding="3" cellspacing="4" border="0">
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
	<tr>
	  <td><tt><?=escapeForHTML($note_data{'note'})?></tt></td>
	</tr>
    <?php } ?>
    <tr>
      <td>
	<input type="submit" name="Add Note" value="Add Note">
      </td>
    </tr>
</table>
</form>
<?php
include("../footer.php");
?>
