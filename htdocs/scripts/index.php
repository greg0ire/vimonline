<?php
# index page for downloading and uploading scripts

require("../include/init.inc");
require("../include/string_utils.inc");
require("include/script.inc");

# include the page header
$page_title = "scripts";
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
<span class="sidebarheader">What are scripts?</span>
<p>
vim online allows users to upload scripts that help enhance vim.
There are many types of scripts: syntax scripts enable syntax higlighting, color scheme
scripts set the theme of your vim colors, indent scripts allow for advanced indenting
functionality and utility scripts can add a wide range of features from spell checking
to IDE macros.
</p>
<span class="sidebarheader">How do I install scripts?</span>
<p>
Utility scripts need to be "sourced" from your vimrc (:help source) or in 6.0 you
can just add the scripts to the plugin directory. Syntax files should be saved in
the syntax directory. 6.0 supports indent scripts which should be saved in the indent
directory and color scheme scripts which need to be sourced from your vimrc.
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

<span class="txth1">Vim Scripts</span> (<a href="add_script.php">add script</a>)
<p>
<!-- placeholder for top rated scripts -->
<i><b>script: </b> Middle English, from Latin scriptum, things written, a plan of action
</i>
</p>

<hr noshade size="1" color="#000000">
<br>
<span class="txth1">Recent Script Updates</span> (<a href="search_results.php">browse all</a> | <a href="search.php">search</a>)
<p>
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
    <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td>(<?=$script_data{"script_version"}?>) <?=escapeForHTMLNoBreaks($script_data{"version_comment"})?> - <i><?=$script_data{"first_name"}?> <?=$script_data{"last_name"}?></i></td>
</tr>
<?php
    }
?>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr><td colspan="2"><small><b>Displaying 10 of <?=getScriptCount()?></b> (<a href="search_results.php">more</a>)</small></td></tr>
</table>
</p>

<hr noshade size="1" color="#000000">

</td></tr></table></td></tr></table>

<?php
include("$BASE_DIR/footer.php");
?>
