<?php
// Maillists about Vim
require_once("include/init.inc");

$page_title = "Vim web pages";
$nav_main = "community";
$nav_sub = "web";
$page_sid = "sid_empty.php";

include("header.php");
?>
<h1>Links to Vim web pages</h1>

A bunch of pages about Vim can be found on
<a href='http://u.webring.com/hub?ring=vim'>the Vim webring</a>.
<p />

<h2>Vim-related Projects</h2>
<dl>
  <dt><a href='http://vimdoc.sf.net/'>VimDoc</a></dt>
  <dd>
	  VimDoc is the official Vim documentation project, hosted right here at
	  SourceForge.
  </dd>

  <dt><a href='http://vimonline.sf.net/'>Vim Online</a></dt>
  <dd>
	  Vim Online is the portal software that powers this site.  Development for
	  Vim Online is hosted here at SourceForge.
  </dd>

  <dt><a href='http://sf.net/projects/vim'>Vim Project pages</a></dt>
  <dd>
	  Less interesting stuff for the Vim project hosted on sourceforge.
	  Has statistics for the web site.
	  The sourceforge areas other than CVS are not used.
  </dd>

  <dt><a href='/vimgor'>Vimgor</a></dt>
  <dd>
  <a href='http://vigor.sf.net/'>Vigor</a> is an animated assistant
  for vi.  Vigor was originally written for
  <a href='http://freshmeat.net/projects/nvi/'>nvi</a>, but Andy Kahn
  has ported it to Vim as Vimgor.
  </dd>

  <dt><a href='http://cubiclevim.sourceforge.net/'>CubicleVim</a></dt>
  <dd>
  An add-in for using Vim with Microsoft Outlook.
  This is a minimalistic solution, there are a few problems to be solved.
  </dd>

  <dt><a href='http://www.opensky.ca/gnome-vim/'>GNOME-Vim</a></dt>
  <dd>
  GNOME-Vim is a Bonobo component that embeds Vim and implements
  (part of) the same interface as the GtkHTML component.  This makes
  it possible to use Vim in Evolution instead of the default HTML
  editor.
  </dd>

  <dt><a href='http://www.freehackers.org/kvim/'>KVim</a></dt>
  <dd>
	  KVim is a port of Vim to the K Desktop Environment. It provides a nice
	  GUI, with menubar, toolbar, popups menus and much features.  The project
	  was initially started by Philippe Fremy and Thomas Capricelli. The goal
	  is to have -a KDE version of vim and a component for KDE using the KPart
	  technology. 
  </dd>

</dl>

<h2>Other Vim Links</h2>
<dl>
    <dt><a href='http://www.math.fu-berlin.de/~guckes/vim/'>Sven's Vim Pages</a></dt>
	<dd>
		These pages were once vim.org, but many have been unavailable, lately.
    </dd>

    <dt>Vim rating</dt>
	<dd>
	    <form 
		  action="http://osdir.com/modules.php?op=modload&amp;name=Downloads&amp;file=index"
		  method="post">
		<input type="hidden" name="lid" value="143">
		<input type="hidden" name="req" value="ratedownload">
		<input type="submit" value="Rate Vim - Vi IMproved @ O'Reilly's OSDir.com">
	    </form>

	</dd>

    <dt><a href='http://www.troubleshooters.com/lpm/200212/200212.htm'>Linux Productivity Magazine</a></dt>
	<dd>
		Issue of an online magazine dedicated to Vi and Vim.
	</dd>
</dl>

<?php
include("footer.php");
?>
