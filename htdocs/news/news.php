<?php
// news overview page
require_once("../include/init.inc");
require_once("../include/string_utils.inc");
$page_title = "news";
$page_sid = "sid_news.php";

include("../header.php");
?>
<?php
// news overview page

require("include/news.inc");
?>

<h1>Vim News</h1>

<?php
$news = getRecentNewsItems(10);
echo mysql_error();
for($i=0;$i<sizeof($news);$i++){
    $news_data = $news[$i];
?>

<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
    <td class="lightbg"><span class="txth1">&nbsp;&nbsp;<?=$news_data{"title"}?></span></td>
</tr>
</table>

<p>
<span class="newsdate">[<?=formatNewsDate($news_data{"creation_date"})?>]</span> 
<?=$news_data{"news"}?>
 (<i><?=$news_data{"first_name"}?> <?=$news_data{"last_name"}?></i>) 
<br clear="all">
</p>

<?php
}
?>
&nbsp;
<?php
include("../footer.php");
?>
