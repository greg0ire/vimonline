<?php
// index page for downloading and uploading scripts
require_once("../include/init.inc");
require_once("../include/string_utils.inc");
require_once("include/script.inc");
$page_title = "scripts";
$page_sid = "sid_scripts.php";

include("../header.php");
?>
<span class="txth1">Vim Scripts</span> (<a href="add_script.php">add script</a>)
<p>
<!-- placeholder for top rated scripts -->
<i><b>script: </b> Middle English, from Latin scriptum, things written, a plan of action
</i>
</p>

<hr noshade size="1" color="#000000">
<br>
<span class="txth1">Recent Script Updates</span> (<a href="script_search_results.php?order_by=creation_date&direction=descending">browse all</a> | <a href="../search.php">search</a>)

<table cellpadding="0" cellspacing="0" border="0">
<?php
    $recent_scripts = getRecentScriptUpdates(10);
    for($i=0;$i<sizeof($recent_scripts);$i++){
        $script_data = $recent_scripts[$i];
?>
<tr>
    <td class="newsdate" nowrap valign="top">[<?=formatNewsDate($script_data{"creation_date"})?>]</td>
    <td>&nbsp;<a href="script.php?script_id=<?=$script_data{"script_id"}?>"><?=$script_data{"script_name"}?></a> : <?=escapeForHTML($script_data{"summary"})?></td>
</tr>
<tr>
    <td><img src="<?=$IMAGES?>/spacer.gif" width="1" height="1" alt=""></td>
    <td>(<?=$script_data{"script_version"}?>) <?=escapeForHTMLNoBreaks($script_data{"version_comment"})?> - <i><?=$script_data{"first_name"}?> <?=$script_data{"last_name"}?></i></td>
</tr>
<?php
    }
?>
<tr><td colspan="2"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr><td colspan="2"><small><b>Displaying 10 of <?=getScriptCount()?></b> (<a href="script_search_results.php">more</a>)</small></td></tr>
</table>
<?php
include("../footer.php");
?>

