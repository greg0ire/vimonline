<?php
# index page for downloading and uploading scripts

require("../include/init.inc");
require("../include/string_utils.inc");

# include the page header
$page_title = "tips";
include("$BASE_DIR/header.php");
?>
<table cellpadding="0" cellspacing="0" border="0">
 <tr>
    <td class="sidebar"><img src="images/spacer.gif" width="150" height="1" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td width="2000"><img src="images/spacer.gif" width="150" height="1" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td class="sidebar"><img src="images/spacer.gif" width="150" height="1" alt=""></td>
    <td><img src="images/spacer.gif" width="" height="1" alt=""></td>
 </tr>
 <tr valign="top">
  <td class="sidebar">
   <table width="149" cellpadding="4" cellspacing="0" border="0">
    <tr valign="top">
     <td class="sidebar">
<br>
<span class="sidebarheader">What are tips?</span>
<p>
This is a place where users of the vim editor can add their favorite commands, macros and other 
assorted tips to a common database. While the vim distribution comes with a rich set of documentation 
it is often hard to find a place to start when trying to incrementally learn how to use the editor. 
</p>
<span class="sidebarheader">Why tips?</span>
<p>
When I realized how much I was learning from the vim list alone I thought it would be great to have 
a place that the community could maintain a list of their favorite vim gems. The overall goal is to have a place you can visit when you are in a vim learning mood or when you "discover" something particularly powerful and want to share it with other vim users.
</p>
</td>
</tr>
</table>
  </td>
  <td bgcolor="#666666" background="images/checkerboard.gif"><img src="/images/spacer.gif" width="1" height="1" border="0" alt="" ><br></td>
  <td>
   <table width="625" cellpadding="10" cellspacing="0">
    <tr>
     <td valign="top">

<span class="txth1">Vim Tips</span> (<a href="add_tip.php">add tip</a>)
<p><i>"...Can you imagine how many keystrokes could have been saved, if I only 
       had known the <a href="tip.php?tip_id=1">"*" command</a> in time?"</i> - Juergen Salk, 1/19/2001 
<br clear="all">
</p>
<p>
<!-- placeholder for top rated tips -->
</p>

<hr noshade size="1" color="#000000">
<br>
<span class="txth1">Recent Tip Additions</span> (<a href="search_results.php">browse all</a> | <a href="search.php">search</a>)
<?php
    require("include/tip.inc");
    $recent_tips = getRecentTipAdditions(10);
    for($i=0;$i<sizeof($recent_tips);$i++){
        $tip_data = $recent_tips[$i];
?>
    <p>
    <span class="newsdate">[<?=formatNewsDate($tip_data{"creation_date"})?>]</span> 
    <a href="tip.php?tip_id=<?=$tip_data{"tip_id"}?>">tip #<?=$tip_data{"tip_id"}?></a> - <?=$tip_data{"summary"}?>
     (<?=($tip_data{'created_by_email'}==null)?"Anonymous":$tip_data{'created_by_email'}?>)
    </p>
<?php
    }
?>
    <p><small><b>Displaying 10 of <?=getTipCount()?></b> (<a href="search_results.php">more</a>)</small></p>
<hr noshade size="1" color="#000000">

</td></tr></table></td></tr></table>

<?php
include("$BASE_DIR/footer.php");
?>
