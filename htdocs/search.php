<?php
// global search page, search for tips and search for scripts
require_once("include/init.inc");

$page_title = "search";
$nav_main = "search";
$page_sid = "sid_empty.php";

require("scripts/include/script.inc");
include("header.php");
?>

<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;Google Search on Vim pages</span></td>
</tr>
</table>
<p>

<!-- Search Google -->
<FORM method=GET action="http://www.google.com/custom">
<TABLE bgcolor="#FFFFFF" cellspacing=0 border=0>
<tr valign=top><td>
<A HREF="http://www.google.com/search">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border=0 ALT="Google" align=middle></A>
</td>
<td>
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT type=submit name=sa VALUE="Google Search">
<INPUT type=hidden name=cof VALUE="LW:125;L:http://vim.sf.net/images/vim.gif;LH:60;AH:center;GL:0;S:http://www.vim.org;AWFID:057fa53529d52655;">
<font face="arial,sans-serif" size=-1><input type=hidden name=domains value="vim.sourceforge.net;www.vim.org;vimdoc.sourceforge.net"><br><input type=radio name=sitesearch value="vim.sourceforge.net" checked> Search vim.sourceforge.net <input type=radio name=sitesearch value=""> Search WWW<br><input type=radio name=sitesearch value="vimdoc.sourceforge.net"> Search vimdoc.sourceforge.net <input type=radio name=sitesearch value="www.vim.org"> Search www.vim.org </font><br>
</td></tr></TABLE>
</FORM>
<!-- Search Google -->

<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;Search for Scripts</span></td>
</tr>
</table>
<p>

      <form name="search" action="scripts/script_search_results.php">
        <table cellpadding="2" cellspacing="0" border="0">
          <tr>
	    <td class="prompt">keywords</td>
	    <td colspan="2"><input type="text" name="keywords" size="40"></td>
	  </tr>
          <tr>
            <td class="prompt">type</td>
            <td>
              <select name="script_type">
                <option value="">-- all -- </option>
                <?=getScriptTypeDropDown("")?>
              </select>
            </td>
          </tr>
          <tr>
            <td class="prompt">sort by</td>
            <td>
  	    <select name="order_by">
                <option value="rating">Rating</option>
                <option value="downloads">Downloads</option>
                <option value="script_name">Script Name</option>
                <option value="creation_date">Creation Date</option>
              </select>
              <select name="direction">
                <option value="descending">Descending</option>
                <option value="ascending">Ascending</option>
              </select>
	    </td>
	    <td align="right">
              <input type="submit" name="search" value="search">
              <input type="submit" name="cancel" value="cancel">
	    </td>
          </tr>
        </table>
      </form>
<p>


<table cellpadding="3" cellspacing="0" border="0" width="100%">
  <tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;Search for Tips</span></td>
  </tr>
</table>
<p>

<form name="search" action="tips/tip_search_results.php">
<table cellpadding="2" cellspacing="0" border="0">
<tr>
  <td class="prompt">keywords</td>
  <td colspan="2"><input type="text" name="keywords" size="40"></td>
</tr>
<tr>
  <td class="prompt">sort by</td>
  <td>
    <select name="order_by">
        <option value="rating">Rating</option>
        <option value="views">Views</option>
        <option value="creation_date">Creation Date</option>
    </select>
    <select name="direction">
        <option value="descending">Descending</option>
        <option value="ascending">Ascending</option>
    </select>
  </td>
  <td align="right">
    <input type="submit" name="search" value="search">
    <input type="submit" name="cancel" value="cancel">
  </td>
</tr>
</table>
</form>

<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;Search the Vim online pages with Atomz</span></td>
</tr>
</table>
<p>

<!-- Atomz.com Advanced Search HTML for Vi IMproved -->
<form method="get" action="http://search.atomz.com/search/">
<table cellspacing=0 cellpadding=0 border=0>
<tr><td colspan=2>
<b>Search For:</b><br>
<input size=35 name="sp-q">
<!-- The "Search" button -->
<input type=submit value="Search">
<input type=hidden name="sp-a" value="00070988-sp00000000">
<input type=hidden name="sp-advanced" value=1>
</td></tr>
<!-- Allow "any," "all," or "phrase" -->
<tr><td valign=top>
<b>Match:&nbsp;</b>
</td><td>
<input type=radio name="sp-p" value="any" checked>Any&nbsp;word
<input type=radio name="sp-p" value="all">All&nbsp;words
<input type=radio name="sp-p" value="phrase">Exact&nbsp;phrase<br>
<!-- Checkbox enables sound-alike matching -->
<input type=hidden name="sp-w-control" value=1>
<input type=checkbox name="sp-w" value="alike" checked>
Sound-alike&nbsp;matching
</td></tr>
<!-- List box selects the search field -->
<tr><td valign=top>
<b>Within:&nbsp;</b>
</td><td><select name="sp-x" size=1>
<option value="any" selected	>Anywhere</option>
<option value="title"		>Title</option>
<option value="desc"		>Description</option>
<option value="keys"		>Keywords</option>
<option value="body"		>Body</option>
<option value="alt"		>Alternate text</option>
<option value="url"		>URL</option>
</select>
</td></tr>
<!-- List box selects number of results to show per page -->
<tr><td valign=top>
<b>Show:&nbsp;</b>
</td><td><select name="sp-c" size=1>
<option value=5>5</option>
<option value=10 selected>10</option>
<option value=25>25</option>
<option value=50>50</option>
<option value=100>100</option>
</select>&nbsp;results&nbsp;
<!-- Show or hide summaries in search results -->
<select name="sp-m" size=1>
<option value=1 selected>with</option>
<option value=0>without</option>
</select>&nbsp;summaries<br>
</td></tr>
<!-- Sort results by score or by date -->
<tr><td valign=top>
<b>Sort&nbsp;by:&nbsp;</b>
</td><td><select name="sp-s" size=1>
<option value=0 selected>score</option>
<option value=1>date</option>
</select>
</td></tr>
</table>
</form>


<!-- fill up with spaces to make the main field wide enough -->
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

<?php
include("footer.php");
?>
