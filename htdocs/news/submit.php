<?php 
// page for submitting news
require_once("../include/init.inc");
require_once("../include/string_utils.inc");
require_once("include/news.inc");
$page_title = "Submit News Item";
$nav_main = "news";
$nav_sub = "submit";
$page_sid = "sid_news.php";


if (!isSessionValid()) {
    redirectToLoginPage("/news/submit.php");
}
if($HTTP_POST_VARS{"cancel"}){
    header("Location: $BASE/account/account.php");
    exit;
}

$user = getSessionUser();
if($HTTP_POST_VARS{"submit"}){
    // strip again just to be safe...
    $title = strip_tags($HTTP_POST_VARS{"title"});
    $news = strip_tags($HTTP_POST_VARS{"news"},"<i>,<a>,<b>,<tt>");
    createNewsItem($user->getUserId(),$title,$news);
    header("Location: news.php");
    exit;
}

include("../header.php");
?>
<?php 
if(!$user->canSubmitNews()){
?>
    <p class="errortext">You do not have access to submit news items. If you believe
    you received this message in error please contact vimonline-support@lists.sourceforge.net.</p>

<?php 
} else if($HTTP_POST_VARS{"preview"}){
    $title = stripslashes(strip_tags($HTTP_POST_VARS{"title"}));
    $news = stripslashes(strip_tags($HTTP_POST_VARS{"news"},"<i>,<a>,<b>,<tt>"));
?>
<h1>Submit News Item : Preview</h1>
<hr noshade size="1" color="#000000">
<h1><?=$title?></h1>
<p>
<span class="newsdate">[<?=date("d-M-Y")?>]</span> 
<?=$news?> 
(<i><?=$user->getFirstName()?> <?=$user->getLastName()?></i>) 
<br clear="all">
</p>
<hr noshade size="1" color="#000000">
<form name="add_news_item" method="post">
<input type="hidden" name="title" value="<?=$title?>">
<input type="hidden" name="news" value="<?=htmlentities($news)?>">
<input type="submit" name="submit" value="submit">&nbsp;
<input type="submit" name="edit" value="edit text">&nbsp;
<input type="submit" name="cancel" value="cancel">
</form>

<?php 
} else {
?>

<h1><?=$page_title?></h1>
<p>
You can include HTML links (&lt;a&gt;), Italic (&lt;i&gt;), tt (&lt;tt&gt;) and bold (&lt;b&gt;) tags in the body of news items. All other html will be stripped. I don't currently validate the structure of the news item so please be sure to close your tags.
</p>

<form name="add_news_item" method="post">
<table cellpadding="0" cellspacing="4" border="0" width="100%">
    <tr>
        <td class="prompt">title</td>
    </tr>
    <tr>
        <td><input type="text" name="title" size="60" maxlength="60" value="<?=$HTTP_POST_VARS{'title'}?>"></td>
    </tr>
    <tr>
        <td class="prompt">news item</td>
    </tr>
    <tr>
        <td>
        <textarea wrap="virtual" rows="15" cols="80" name="news"><?=$HTTP_POST_VARS{'news'}?></textarea>
        </td>
    </tr>
    <tr>
        <td align="right">
        <input type="submit" name="preview" value="preview">
        <input type="submit" name="cancel" value="cancel">
        </td>
    </tr>
</table>
</form>

<?php 
} 
?>
<?php
include("../footer.php");
?>
