<?php
// for non-Vim users
require_once("include/init.inc");

$page_title = "for non-Vim users";
$nav_main = "about";
$nav_sub = "others";
$page_sid = "sid_empty.php";

include("header.php");
?>
<h1>If you are not using Vim or Vi</h1>

With Vim you can edit very effectively.  The most often used commands are just
a single key stroke.  To allow for this, you need to start Insert mode to enter
text and return to Normal mode to execute commands. The big advantage is that
you can keep your hands on the keyboard and work very fast.  This takes a
little time to get used to.  It's a small investment that pays itself back
soon.
<p>
If you really don't have time to learn the effective way of editing, there is
"Easy Vim" or eVim.  It works like most dumb editors: You click your mouse and
type the text.  It feels like MS Notepad.  But the power of Vim is still
available inside.

<h3>Syntax Highlighting</h3>

Vim offers syntax highlighting for over 200 languages.  And if that's not
enough, you can define your own syntax.
<p>
The highlighting does not only make it easy to understand the text and
quickly spot comments between the code.  It also highlights some of the
errors, so that you can spot them right away.
<p>
<IMG src="<?=$IMAGES?>/syntax.gif" width="589" height="310" alt="eVim with syntax highlighting">

<h3>Edit-Compile-Fix</h3>

You edit a program, type ":make" and Vim shows the error messages in a window.
Pressing &lt;Enter&gt; takes you directly to the location of the error.  It
can be made to work with most compilers.
<p>
<IMG src="<?=$IMAGES?>/make.gif" width="589" height="370" alt=":make and the error window">

<h3>Highlighting Matches</h3>
When you search for a pattern, all matches found can be highlighted.  This
quickly shows you were a variable is being used.
<p>
<IMG src="<?=$IMAGES?>/hlsearch.gif" width="589" height="310" alt="search highlighting">

<h3>And there is more...</h3>
<UL>
	<LI>
	Vim is fast, both in startup and when editing.
	</LI>
	<LI>
	Vim is flexible.  You can map keys, change the colors, add new
	commands, use scripts from someone else, etc.
	</LI>
	<LI>
	Vim is free!  It is open source with a charityware license.
	Look <A HREF="http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl?page=uganda.txt#license">here</A>
	</LI>
</UL>
<?php
include("footer.php");
?>
