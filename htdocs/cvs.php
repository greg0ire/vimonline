<?php
// Vim Documentation
require_once("include/init.inc");

$page_title = "Vim from CVS";
$nav_main = "download";
$nav_sub = "cvs";
$page_sid = "sid_empty.php";
$page_con = "con_cvs.php";

include("header.php");
?>
<h1>The Vim CVS</h1>

<p>
	Vim, like many open source projects, is distributed with the aid of the
	<a href='http://www.cvshome.org'>Concurrent Versioning System</a>
	(CVS).  CVS allows developers to maintain a single, controlled source
	tree with multiple check-outs of individual files.
</p>

<p>
	If you don't know how to use CVS, you'll probably want to look at the
	<a href='http://www.cvshome.org/docs/#s2'>official guides</a>.  It's a
	powerful, but complicated piece of software.
</p>

<p>
	If you're interested in using the Vim CVS, though, you can view it
	<a href='http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/vim/'>online at SourceForge</a>.
	Documentation on accessing it via pserver or ssh can be
	found on the
	<a href='http://sourceforge.net/cvs/?group_id=8'>SourceForge project page</a>.
<p>
<br>

<h1>Obtaining Vim through CVS</h1>

<p>
These are the simple instructions how to obtain the Vim files through CVS.
Use this when you have a reasonable fast internet connection and want to
compile Vim yourself.
It should work well on any system that supports CVS.
</p>

	<p id='update_freq'>
		<strong>Note:</strong> The CVS repository is regularly, but not
		immediately.  Vim's CVS repository may be a few days behind the head of
		development.  For information on patching Vim with the most up-to-date
		patches, consult the <a href='/download.php#patches'>information on
		patches</a>
	</p>

<h2>Doing it for the first time</h2>
Go to a directory where you want the Vim source tree to appear.  Use this
command (it is one line):
<p>
<table cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>
      <code>cvs -z3 -d:pserver:anonymous@cvs.vim.sf.net:/cvsroot/vim checkout vim</code>
    </td>
  </tr>
</table>
<p>
If this doesn't work, try this one:
<p>
<table cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>
      <code>cvs -z3 -d:pserver:anonymous@cvs-pserver.sf.net:80/cvsroot/vim checkout vim</code>
    </td>
  </tr>
</table>
<p>
This will create the "vim" directory and download all the Vim files and
subdirectories into it.  It should also work when you are behind a firewall,
because it uses port 80.  It probably doesn't work with a proxy though.
<br>
Read the "vim/README.txt" file for how to compile Vim.
For Unix it's simply as "cd vim/src; make".
<P>
<h2>Updating</h2>
Recent patches appear in CVS all the time.  Change into the "vim" directory and
include the changes with this single command:
<p>
<table cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>
      <code>cvs -z3 update</code>
    </td>
  </tr>
</table>
<p>
You will get messages for all directories that are inspected and files that are
being updated.
<P>
<br>

<h1>Obtaining Vim through CVS with A-A-P</h1>

A-A-P is a new tool that does all the work of downloading for you.  You
download one file, called a recipe, and "aap install" does all the work.  To
later update to the latest version of Vim you do not need to download anything
manually or type the CVS root URL, just use the command "aap update".
<p>
The detailed explanation can be found
<a href="http://www.a-a-p.org/ports.html">here</a>.
This is still an experimental method.  Please report problems to Bram AT
a-a-p.org.
<?php
include("footer.php");
?>
