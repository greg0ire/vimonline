<?php
// thanks page

require("include/init.inc");

// paint the page

// include the page header
$page_title = "thanks";
include("$BASE_DIR/header.php");
?>

<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
<h1>Thanks To</h1>
<ul>
<li><a href="http://www.moolenaar.net/">Bram Moolenaar</a> - for his work on vim
<li>the vim community - for their work on vim
<li>the <a href="http://www.php.net">php</a> community - for their work on php (and their great reference docs)
<li>the <a href="http://www.mysql.com">mysql</a> community - for their free database
<li><a href="http://www.sourceforge.net">sourceforge</a> - for their project hosting
<li><a href="http://www.php.net">Colin Viebrock</a> - for his php.net site design which inspired a lot of vim onlines design
</ul>

</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>
