<?php
// global search page, search for tips and search for scripts
// 

require("../include/init.inc");
require("../include/string_utils.inc");
require("include/news.inc");

// paint the page

// include the page header
$page_title = "news";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="spacer.gif" width="1" height="10"></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1"></td>
    <td width="2000">

    <table width="625" cellpadding="10" cellspacing="0">
    <tr>
        <td>
<?php
$news = getRecentNewsItems(10);
echo mysql_error();
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
<hr noshade size="1" color="#000000">
<?php
}
?>

        </td>
    <tr>
    </table>

    </td>
</tr>
</table>



<?php
include("$BASE_DIR/footer.php");
?>

