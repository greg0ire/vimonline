<?php
// General info about Vim
require_once("include/init.inc");

$page_title = "about Vim";
$nav_main = "about";
$nav_sub = "about";
$page_sid = "sid_empty.php";
$page_con = "con_about.php";

include("header.php");
?>
<h1>What Vim Can Do</h1>
<p>
Vim is an advanced text editor that seeks to provide the power of
the de-facto Unix editor 'Vi', with a more complete feature set.
It's useful whether you're <a href='viusers.php'>already using vi</a> or <a
href='others.php'>using a different editor</a>.  Users of Vim 5 should
consider upgrading to Vim 6, which is
<a href='vim5users.php'>greatly enhanced</a> since Vim 5.
</p>

<h1>A General Overview</h1>

<h4>What Is Vim?</h4>
<p>
Vim is a highly configurable text editor built to enable efficient text
editing. It is an improved version of the vi editor distributed with
most UNIX systems.  
<p>
Vim is often called a "programmer's editor," and so useful for
programming that many consider it an entire <abbr title='integrated
development environment'>IDE</abbr>.  It's not just for programmers,
though.  Vim is perfect for all kinds of text editing, from composing
email to editing configuration files.
</p>

<h4>What Vim Is Not?</h4>
<p>
Vim isn't an editor designed to hold its users' hands.  It is a tool,
the use of which must be learned.
</p>

<p>
Vim isn't a word processor.  Although it can display text with various
forms of highlighting and formatting, it isn't there to provide WYSIWYG
editing of typeset documents.  (It is great for editing TeX, though.)
</p>

<h4>Vim's License</h4>
<p>
Vim is charityware.  Its license is GPL-compatible, so it's
distributed freely, but we ask that if you find it useful you make a
donation to help children in Uganda through the
<a href='http://iccf-holland.org/'>ICCF</a>.  The full license text can be
found in the <a href='http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl?page=uganda.txt#license'>documentation</a>.
</p>

<h4>Vim in Six Kilobytes</h4>
<p>
If all of this information is overwhelming, try a smaller dose.  We can
expound the wonders of <a href='6kbyte.php'>vim in just six kilobytes</a> --
and in more languages than you can shake a stick at!
</p>

<h1>Testimonials</h1>
<p>
Don't take our word for it!  Read what <a href='http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl?page=quotes.txt'>others have said</a>
about Vim.
</p>
<?php
include("footer.php");
?>
