<?php
// the home page
require_once("include/init.inc");
require_once("include/string_utils.inc");
require_once("scripts/include/script.inc");
require_once("tips/include/tip.inc");
require_once("news/include/news.inc");

$page_title = "welcome home";
$page_sid = "sid_index.php";

include("header.php");
?>

<?php

// report database problems
if(!$CONN){
?>
    <h1>Sourceforge Project Database Problems</h1>
<p>
<span class="newsdate">[<?=date('d-M-Y')?>]</span> 
Sourceforge is currently experiencing sporadic problems with their 
project database and web server. This means news, scripts and tips 
are currently unavailable. Thank you for your patience.
 (<i>Scott Johnston</i>) 
<br clear="all">
</p>
<?php
}
?>

<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;News</span></td>
    <td nowrap class="lightbg" align="right"><small>&nbsp;Vim
<?php
include("version.txt")
?>
    is the current version&nbsp;</small></td>
</tr>
</table>

<?php
$news = getRecentNewsItems(1);
for($i=0;$i<sizeof($news);$i++){
    $news_data = $news[$i];
?>
<h1><?=$news_data{"title"}?></h1>
<p>
<span class="newsdate">[<?=formatNewsDate($news_data{"creation_date"})?>]</span> 
<?=$news_data{"news"}?>
 (<i><?=$news_data{"first_name"}?> <?=$news_data{"last_name"}?></i>) 
<br clear="all">
</p>
<a href="news/news.php">more news...</a>
<?php
}
?>


<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr><td colspan="2"><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;Recent Script Updates</span></td>
    <td nowrap class="lightbg" align="right"><small>&nbsp;<?=number_format(getScriptCount())?> scripts, <?=number_format(getTotalScriptDownloads())?> downloads&nbsp;</small></td>
</tr>
<tr><td colspan="2"><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="10" alt=""></td></tr>
</table>
<table cellpadding="0" cellspacing="0" border="0">
<?php
    $recent_scripts = getRecentScriptUpdates(4);
    for($i=0;$i<sizeof($recent_scripts);$i++){
        $script_data = $recent_scripts[$i];
?>
<tr>
    <td class="newsdate" nowrap valign="top">[<?=formatNewsDate($script_data{"creation_date"})?>]</td>
    <td>&nbsp;<a href="scripts/script.php?script_id=<?=$script_data{"script_id"}?>"><?=$script_data{"script_name"}?></a> : <?=escapeForHTML($script_data{"summary"})?></td>
</tr>
<tr>
    <td><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="1" alt=""></td>
    <td>(<?=$script_data{"script_version"}?>) <?=escapeForHTMLNoBreaks(limitStrLength($script_data{"version_comment"}))?> - <i><?=$script_data{"first_name"}?> <?=$script_data{"last_name"}?></i></td>
</tr>
<?php
    }
?>
<tr><td colspan="2"><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr><td colspan="2"><a href="scripts/index.php">more recent</a> | 
                    <a href="scripts/script_search_results.php?order_by=downloads">most downloaded</a> | 
                    <a href="scripts/script_search_results.php?order_by=rating">top rated</a></td></tr>
<tr><td colspan="2"><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="10" alt=""></td></tr>
</table>

<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr><td colspan="2"><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;Recent Tip Additions</span></td>
    <td nowrap class="lightbg" align="right"><small>&nbsp;<?=number_format(getTipCount())?> tips, <?=number_format(getTotalTipViews())?> tip views&nbsp;</small></td>
</tr>
<tr><td colspan="2"><img src="<?=$IMG_DIR?>/spacer.gif" width="1" height="10" alt=""></td></tr>
</table>
<?php
    $recent_tips = getRecentTipAdditions(4);
    for($i=0;$i<sizeof($recent_tips);$i++){
        $tip_data = $recent_tips[$i];
?>
    <p>
    <span class="newsdate">[<?=formatNewsDate($tip_data{"creation_date"})?>]</span> 
    <a href="tips/tip.php?tip_id=<?=$tip_data{"tip_id"}?>">tip #<?=$tip_data{"tip_id"}?></a> - <?=escapeForHTML($tip_data{"summary"})?>
     (<?=($tip_data{'created_by_email'}==null)?"Anonymous":$tip_data{'created_by_email'}?>)
    </p>
<?php
    }
?>
<p><a href="tips/index.php">more recent</a> |
                    <a href="tips/tip_search_results.php?order_by=views">most viewed</a> | 
                    <a href="tips/tip_search_results.php?order_by=rating">top rated</a>

<?php
include("footer.php");
?>
