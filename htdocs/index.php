<?php
require("include/init.inc");
require("include/string_utils.inc");
require("scripts/include/script.inc");
require("news/include/news.inc");

# include the page header
$page_title = "welcome";
include("header.php");
?>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
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

<span class="sidebarheader"><a href="links.php">Vim Resources:</a></span>
<p>
&nbsp; <a href="whyvim.php">Why use Vim 6?</a><BR>
&nbsp; <a href="download.php">download</a><BR>
&nbsp; <a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/vim/">CVS</a><BR>
&nbsp; <a href="http://www.vim.org/">Sven's Vim pages</a><BR>
&nbsp; <a href="http://nav.webring.yahoo.com/hub?ring=vim&list">Vim webring</a><BR>
</p>

<span class="sidebarheader">Vim Community:</span>
<p>
&nbsp; <a href="http://sourceforge.net/projects/vim">Project</a><BR>
&nbsp; <a href="http://www.vim.org/iccf/click5.html">the Vim book</a><BR>
&nbsp; <a href="http://vim.sourceforge.net/vimgor">vimgor</a><BR>
</p>

<span class="sidebarheader"><a href="thanks.php">Thanks To:</a></span>
<p>
&nbsp; <a href="http://www.moolenaar.net/">Bram Moolenaar</a><br>
&nbsp; The Vim Group<br>
&nbsp; <a href="http://www.php.net">Colin Viebrock</a><br>
</p>
</td>
</tr>
</table>
  </td>
  <td bgcolor="#666666" background="images/checkerboard.gif"><img src="/images/spacer.gif" width="1" height="1" border="0" alt=""><br></td>
  <td>
   <table width="100%" cellpadding="10" cellspacing="0">
    <tr>
     <td valign="top">

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
<a href="news">more news...</a>
<hr noshade size="1" color="#000000">
<?php
}
?>


<h1>Recent Script Updates</h1>
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
    <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td>(<?=$script_data{"script_version"}?>) <?=escapeForHTMLNoBreaks(limitStrLength($script_data{"version_comment"}))?> - <i><?=$script_data{"first_name"}?> <?=$script_data{"last_name"}?></i></td>
</tr>
<?php
    }
?>
<tr><td colspan="2"><a href="scripts/">more...</a></td></tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
</table>

<hr noshade size="1" color="#000000">
<h1>Recent Tip Additions</h1>
<?php
    require("tips/include/tip.inc");
    $recent_tips = getRecentTipAdditions(4);
    for($i=0;$i<sizeof($recent_tips);$i++){
        $tip_data = $recent_tips[$i];
?>
    <p>
    <span class="newsdate">[<?=formatNewsDate($tip_data{"creation_date"})?>]</span> 
    <a href="tips/tip.php?tip_id=<?=$tip_data{"tip_id"}?>">tip #<?=$tip_data{"tip_id"}?></a> - <?=$tip_data{"summary"}?>
     (<?=($tip_data{'created_by_email'}==null)?"Anonymous":$tip_data{'created_by_email'}?>)
    </p>
<?php
    }
?>
<p><a href="tips">more...</a></p>


<hr noshade size="1" color="#000000">
        </td>
    </tr>
    </table>
    </td>
  <td bgcolor="#666666" background="images/checkerboard.gif"><img src="/images/spacer.gif" width="1" height="1" border="0" alt=""><br></td>
    <td align="right">

   <table width="149" cellpadding="4" cellspacing="0" border="0">
    <tr valign="top">
     <td class="sidebar">
<br>
<span class="sidebarheader">What is Vim?</span>
<p>
Vim is a highly configurable text editor built to enable efficient text editing.
It is an improved version of the vi editor distributed with most UNIX systems.
Vim is distributed free as charityware. If you find Vim a useful addition to
your life please consider <a href="http://www.vim.org/iccf/">helping the children in Uganda</a>.
</p>
<span class="sidebarheader"><a href="huh.php">What is Vim online?</a></span>
<p>
Vim online is a central place for the Vim community to store useful Vim tips and tools.
Vim has a scripting language that allows for plugin like extensions to enable
IDE behavior, syntax highlighting, colorization as well as other advanced features.
These scripts can be uploaded and maintained using Vim online. 
</p>
     </td>
     </tr>
     </table>

    </td>

    <td class="sidebar"><img src="images/spacer.gif" width="5" height="1" alt=""></td>

</tr>
</table>


<?php
include("footer.php");
?>
