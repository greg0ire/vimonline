<?php
// Vim Documentation
require_once("include/init.inc");

$page_title = "Vim documentation";
$nav_main = "docs";
$nav_sub = "docs";
$page_sid = "sid_empty.php";
$page_con = "con_docs.php";

include("header.php");
?>
<h1>Documentation</h1>
<p>
	The most useful software is sometimes rendered useless by poor or
	altogether missing documentation.  Vim refuses to succumb to death by
	underdocumentation.  With a book to extensive help files to a tips
	archive, all audiences should be pleased.
</p>

<h1>Help Files</h1>
<p>
	Vim's online documentation system, accessible via the <tt>:help</tt>
	command, is an extensive cross-referenced and hyperlinked reference.
	It's kept up-to-date with the software and can answer almost any
	question about Vim's functionality.  The <a
	href='http://vimdoc.sf.net/'>VimDoc</a> project maintains an online,
	hyperlinked copy of the documentation.
</p>

<h1>The Book</h1>
<p>
	Steve Oualline wrote the first (and, so far, only) book all about Vim.
	It's written for Vim 5.7, but it is still a useful introduction to any
	modern version of Vim.  The book has
	<a href='http://www.iccf.nl/click5.html'> its own page</a>,
	where you can read more about it and buy a copy.
	Buying the Vim book helps us help the <a
	href='http://www.iccf-holland.org/index.html'> Ugandan orphans</a>.
	The book is also available as an
	<a href='http://www.newriders.com/books/opl/ebooks/0735710015.html'>online, hypertext edition</a>
	and <a href="http://www.truth.sk/vim/vimbook-OPL.pdf">converted to PDF</a>
</p>

<h1>The FAQ</h1>
<p>
	A manual is great for reference, but voluminous reference materials
	aren't always the easiest way to locate answers to your questions.
	We've compiled a list of frequently asked questions, along with good
	answers.  You can find the <a
	href='http://vimdoc.sourceforge.net/vimfaq.html'>FAQ</a> at the
	VimDoc project.
</p>

<h1>Tips</h1>
<p>
	Finding an answer is even harder if you don't know that you have a
	question.  The vim.org <a href='tip_index.php'>tips archive</a> contains a seemingly
	endless supply of hints on making your vim use a more pleasant experience.  The
	tip archive is also a great way to find quick hacks to perform common
	tasks.
</p>

<h1>Other Documentation</h1>
<p>
	There are plenty of other sources of Vim documentation.  We've got a <a
	href='web.php'>partial list</a> of them, but <a
	href='http://www.google.com/'>Google</a> is another great way to find
	obscure documentation.
</p>
<?php
include("footer.php");
?>
