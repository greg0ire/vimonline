<?php
// thanks page
require_once("include/init.inc");

// include the page header
$page_title = "thanks";
$nav_main = "community";
$nav_sub = "thanks";
$page_sid = "sid_empty.php";
$page_con = "con_thanks.php";

include("header.php");
?>
<h1>Thanks To</h1>
<ul>
	<li><a href="http://www.moolenaar.net/">Bram Moolenaar</a> - for his work on Vim</li>
	<li>the Vim community - for their work on Vim</li>
	<li>
		the <a href="http://www.php.net">php</a> community - for their work on php 
		(and their great reference docs)
	</li>
	<li>the <a href="http://www.mysql.com">mysql</a> community - for their free database</li>
	<li><a href="http://www.sourceforge.net">sourceforge</a> - for their project hosting</li>
	<li>
		Colin Viebrock - for his <a href='http://www.php.net/'>php.net</a> site
		design which inspired a lot of Vim online's design
	</li>
	<li>Sven Guckes - for creating the first Vim web site</li>
	<li>Ricardo Signes - for setting up the new Vim web site</li>
	<li>Scott Johnston and Jonathan Morace - for setting up vim-online</li>
</ul>
<?php
include("footer.php");
?>
