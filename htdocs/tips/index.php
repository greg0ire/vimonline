<?php
// index page for tips
require_once("../include/init.inc");
require_once("../include/string_utils.inc");
require_once("include/tip.inc");

$page_title = "tips";
$nav_main = "tips";
$nav_sub = "tips";
$page_sid = "sid_tip_index.php";

include("../header.php");
?>
<span class="txth1">Vim Tips</span> (<a href="add_tip.php">add tip</a>)
<p>

<i>"...Can you imagine how many keystrokes could have been saved, if I only 
       had known the <a href="tip.php?tip_id=1">"*" command</a> in time?"</i>
- Juergen Salk, 1/19/2001 
<br clear="all">
<p>
<!-- placeholder for top rated tips -->
</p>

<hr noshade size="1" color="#000000">
<br>
<span class="txth1">Recent Tip Additions</span> (<a href="tip_search_results.php">browse all</a> | <a href="../search.php">search</a> | <a href="tip_download.php">download all</a>)
<?php
    $recent_tips = getRecentTipAdditions(10);
    for($i=0;$i<sizeof($recent_tips);$i++){
        $tip_data = $recent_tips[$i];
?>
    <p>
    <span class="newsdate">[<?=formatNewsDate($tip_data{"creation_date"})?>]</span> 
    <a href="tip.php?tip_id=<?=$tip_data{"tip_id"}?>">tip #<?=$tip_data{"tip_id"}?></a> - <?=escapeForHTML($tip_data{"summary"})?>
     (<?=($tip_data{'created_by_email'}==null)?"Anonymous":$tip_data{'created_by_email'}?>)
    </p>
<?php
    }
?>
    <p><small><b>Displaying 10 of <?=getTipCount()?></b> (<a href="tip_search_results.php">more</a>)</small></p>
<?php
include("../footer.php");
?>
