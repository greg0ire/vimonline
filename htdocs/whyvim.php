<?php
require("include/init.inc");
require("include/string_utils.inc");
require("scripts/include/script.inc");
require("news/include/news.inc");

# include the page header
$page_title = "why use vim";
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
   <table width="170" cellpadding="4" cellspacing="0" border="0">
    <tr valign="top">
     <td class="sidebar">
<br>

<span class="sidebarheader">Why use Vim 6?</span>
<p>
&nbsp; <a href="#vim5">When using Vim 5</a><BR>
&nbsp; <a href="#vi">When using Vi</a><BR>
&nbsp; <a href="#others">Otherwise</a><BR>
</p>

<span class="sidebarheader">Downloading</span>
<p>
&nbsp; <a href="download.php">What to download</a><BR>
&nbsp; <a href="ftp://ftp.vim.org/pub/vim/MIRRORS">List of Mirrors</a><BR>
&nbsp; <a href="ftp://ftp.vim.org/pub/vim/unreleased">Vim 5 ftp site</a><BR>
&nbsp; <a href="ftp://ftp.vim.org/pub/vim/unreleased">Vim 6 ftp site</a><BR>
</p>

<span class="sidebarheader">Note</span>
<p>
Vim 6.0 is currently in a beta testing phase.  Although many people are
already using it and it appears to work quite well, the usual disclaimers
apply.  If you find a problem, please report it to bugs@vim.org.
</p>

</td>
</tr>

<tr valign="bottom">
<td valign="bottom">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Begin Nedstat Basic code -->
<!-- Title: why use vim : vim online -->
<!-- URL: http://vim.sf.net/whyvim.php -->
<script language="JavaScript" src="http://m1.nedstatbasic.net/basic.js">
</script>
<script language="JavaScript">
<!--
  nedstatbasic("ABEqAQv/nPt8uG9aT//nxX9uUu4g", 0);
// -->
</script>
<noscript>
<a target="_blank" href="http://v1.nedstatbasic.net/stats?ABEqAQv/nPt8uG9aT//nxX9uUu4g"><img
src="http://m1.nedstatbasic.net/n?id=ABEqAQv/nPt8uG9aT//nxX9uUu4g"
border="0" nosave width="18" height="18"></a>
</noscript>
<!-- End Nedstat Basic code -->
page stats
</td>
</tr>

</table>
  </td>
  <td bgcolor="#666666" background="images/checkerboard.gif"><img src="/images/spacer.gif" width="1" height="1" border="0" alt=""><br></td>
  <td>
   <table width="100%" cellpadding="10" cellspacing="0">
    <tr>
     <td valign="top">
<A NAME="top"></A>
<h1>Why use Vim 6?</h1>

This page will show you what advantages Vim 6 has, so that you can decide if it
is the editor of your choice.
<P>
Depending on your previous experience with Vim or other editors, read one of
these sections:
<ul>
	<li>
	<A HREF="#vim5">If you are using Vim 5</A>
	</li>
	<li>
	<A HREF="#vi">If you are using Vi</A>
	</li>
	<li>
	<A HREF="#others">If you are not using Vim or Vi</A>
	</li>
</ul>

Vim is included with all Linux distributions.  If you start Vi, you are
probably using Vim 5.
<p>
Vim is being used in all major computer companies, such as HP, Sun, Microsoft,
etc.  A rough estimation is that there are over a million Vim users, all around the world.

<hr noshade size="1" color="#000000">

<A NAME="vim5"></A>
<h1>If you are using Vim 5</h1>

A huge number of new features have been added in Vim 6.  A few major ones will
be mentioned here.  There are also a lot of minor improvements, details matter
to the Vim developers.
<p>
The full list of new features can be found
<A HREF="htmldoc/version6.html">here</A>.

<h3>Vertically Split Windows</h3>

Windows can now be split vertically.  This provides great flexibility for
displaying files in Vim.  The example below shows using the file explorer in
the left window and editing a file in the right window.  Double clicking on a
file name in the file explorer edits that file in the right window.  Double
clicking on a directory name moves to that directory.
<p>
<IMG src="whyvim/vertsplit.gif" width="602" height="355" alt="vertically split windows">

<h3>Vimdiff</h3>
Edit two (or three or four) files and Vim will show the differences.  Inserted
and changed lines are highlighted.  Ranges of lines without changes are folded
away.  This way you can quickly see what changed.  There are commands to
remove the differences.
<p>
<IMG src="whyvim/vimdiff.gif" width="602" height="430" alt="vimdiff">

<h3>Folding</h3>

A range of lines can be hidden, and one line displayed instead.  This gives a
quick overview of what a file contains.  In the example below there is a fold
for each C function.  Most of them are closed and only show the name of the
function.  A fold can be opened by clicking on the + in the column on the
left.
<p>
There are several ways of folding: with markers in the file, based on
indenting, manually or defined with an expression.  This provides convenient
folding for many different purposes.
<p>
<IMG src="whyvim/folding.gif" width="586" height="311" alt="folding">

<h3>User Manual</h3>

With so many new features the documentation had to be enhanced to make it
easier to learn using Vim.  The user manual was written in such a way that you
can start using Vim or learn to use a specific feature.  There are lots of
examples to make it easier to read and understand.
<p>
Parts of the book
<A HREF="http://www.vim.org/iccf/click5.html">"Vi Improved - Vim"</A>
by Steve Oualline were used.  The user
manual, like the book, is published under the Open Publication License.
<p>
You can find the on-line version, converted to HTML
<A HREF="htmldoc/usr_toc.html">here</A>.

<h3>Plugins</h3>
Since Vim scripting has become quite powerful, many users have started writing
scripts.  The new plugin feature makes it easy to start using such a script:
Just drop it in the right directory.
<p>
There are several types of plugins.  Global plugins are used to add commands
for all situations.  The file explorer, mentioned in the example for vertical
splits above, is actually implemented as a global plugin.
<p>
Filetype plugins are used to do settings for a specific type of file.  For
example, the C filetype plugin sets the 'cindent' option; the "man" plugin
sets up mappings to be able to jump to another manual page.
<p>
A number of plugins are included in the distribution.  The system
administrator can add plugins for all users.  And you can add your own
personal plugins.
The <A HREF="http://vim.sf.net/">Vim-online</A> site is a central place to
share plugins.

<h3>Flexible Indenting</h3>
Automatic indenting is now available for many languages.  Several are included
with the distribution.  Just like with syntax highlighting, the indenting is
defined in a Vim script.  This allows you to add indenting for the language
you are editing.  You are invited to make your scripts available to be
included in the Vim distribution.

<h3>Unicode</h3>
There are many languages in the world, and many ways to encode the characters
used in them.  Unicode was designed to encode characters for all the languages
commonly used in the world.  This allows using several languages in the same
file.
<p>
Vim supports editing Unicode in the GUI version and in terminals that support
UTF-8.  Double-wide characters can be used, and up to two composing characters
are supported.
<p>
When reading a file, Vim can often detect how it is encoded and convert the
text when necessary.  UTF-8 files are edited without conversion.  Other
Unicode formats (16 bit and 32 bit) are converted internally.  Conversion is
also used to edit files in just about any encoding, using an external
converter.
<p>
<IMG src="whyvim/unicode.gif" width="602" height="362" alt="Editing Unicode">
<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="vi"></A>
<h1>If you are using Vi</h1>

Vim is backwards compatible with Vi.  Switching from Vi to Vim is easy.  You
keep all the things that Vi offers and a large range of new features is
available for you.  Each of these features may be a reason to start using Vim.
Mentioning two should be enough to convince you:
<OL type="1">
<LI>
Vim offers unlimited undo.  You can do "xxxx" and undo each of the four
deletes.  When was the last time you typed "jjjj" and then found out the caps
lock key was on?  You accidentally joined five lines together, and Vi can undo
only the last command.  In Vim you can undo all four "J" commands and get your
original text back.
</LI>
<LI>
Vi is only available on Unix.  Vim works on MS-Windows, Macintosh,
Amiga, OS/2, VMS, QNX and other systems.  And also on every Unix system.
</LI>
</OL>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="others"></A>
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
<IMG src="whyvim/syntax.gif" width="589" height="310" alt="eVim with syntax highlighting">

<h3>Edit-Compile-Fix</h3>

You edit a program, type ":make" and Vim shows the error messages in a window.
Pressing &lt;Enter&gt; takes you directly to the location of the error.  It
can be made to work with most compilers.
<p>
<IMG src="whyvim/make.gif" width="589" height="370" alt=":make and the error window">

<h3>Highlighting Matches</h3>
When you search for a pattern, all matches found can be highlighted.  This
quickly shows you were a variable is being used.
<p>
<IMG src="whyvim/hlsearch.gif" width="589" height="310" alt="search highlighting">

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
	Look <A HREF="htmldoc/uganda.html">here</A>
	</LI>
</UL>
<p>
<A HREF="#top">TOP</A>

<p>
<small>
The screendumps on this page show Vim 6.0ap in the GTK GUI version, using KDE on FreeBSD 4.2.
</small>

</td>
    </tr>
    </table>

    </td>

</tr>
</table>


<?php
include("footer.php");
?>
