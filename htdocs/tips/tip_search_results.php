<?php
// handles a search action
// optional http get vars: keywords, sort_by, show_me
require_once("../include/init.inc");
require_once("../include/string_utils.inc");

if($HTTP_GET_VARS{"cancel"}){
    header("Location: tip_index.php");
    exit;
}
$keywords = $HTTP_GET_VARS{"keywords"};
$authors_email = $HTTP_GET_VARS{"authors_email"};
$order_by = $HTTP_GET_VARS{"order_by"};
$direction = $HTTP_GET_VARS{"direction"};
$result_ptr = $HTTP_GET_VARS{"result_ptr"};
if(!$result_ptr or $result_ptr < 0){
    $result_ptr = 0;
}
$title = "search results";
$sql = "select tip_id,
               summary,
               version,
               complexity,
               created_by,
               created_by_email,
               rating_score,
               viewed,
               unix_timestamp(creation_date) as creation_date
          from vt_tips
         where 1=1 ";
$return_link = "tip_search_results.php?";
if($keywords){
    // they searched for keywords, add the join
    $sql = $sql . " and match (summary,tip) against ('$keywords')";
    $return_link = $return_link . "&keywords=$keywords";
    $words = preg_split("/ /",$keywords);
    foreach($words as $word){
        // add joins for keywords less than 4 letters -- would rather use
        // fulltext but not a mysql user parameter :(
        if(strlen($word) < 4){
            $sql = $sql . " or summary regexp '[[:<:]]" . $word . "[[:>:]]'";

            $sql = $sql . " or tip regexp '[[:<:]]" . $word . "[[:>:]]'";
        }
    }
}
if($authors_email){
    // they searched for author, add the join
    $sql = $sql . " and created_by_email like '%$authors_email%'";
    $return_link = $return_link . "&authors_email=$authors_email";
}
if($order_by=='rating'){
    $order_by_clause = " order by rating_score ";
    $return_link = $return_link . "&order_by=rating";
} else if($order_by=='views'){
    $order_by_clause = " order by viewed ";
    $return_link = $return_link . "&order_by=views";
} else {
    $order_by_clause = " order by creation_date ";
}
if($direction!='ascending'){
    $order_by_clause = $order_by_clause . " desc";
} else {
    $return_link = $return_link . "&direction=ascending";
}
// always order newest to oldest for lack of a better idea...
$sql = $sql . $order_by_clause;
$start = 0;
$end = 0;
// run the query
$result = mysql_db_query($DB_NAME,$sql);
$result_count = mysql_num_rows($result);
if($result_count > 0){
    // roll the result set to where we were last
    mysql_data_seek($result,$result_ptr);
    $start = $result_ptr+1;
}
// figure out the start and finish of the results
$has_prev = $result_ptr==0?false:true;
$has_next;
$show_me = $HTTP_GET_VARS{"show_me"};
if(!$show_me){
    $show_me = 20; // default to displaying 20
}
$return_link = $return_link . "&show_me=$show_me";
if(($result_ptr+$show_me)<$result_count){
    $end = $result_ptr+$show_me;
    $has_next = true;
} else {
    $end = $result_count;
    $has_next = false;
}
if(mysql_errno()){
    // error while running sql, go to error page
    $msg = mysql_error();
    include("$BASE_DIR/error.php");
    exit;
}

$page_title = "search results";

// paint the page
include("../header.php");
?>
<h1>&nbsp;search results</h1>

<table cellpadding="2" cellspacing="2" border="0">
<tr>
    <td colspan="5">
	Searched tips for "<b><?=stripSlashes($keywords)?></b>"
    </td>
    <td align="right">
    	Showing <b><?=$start?></b> to <b><?=$end?></b> of <b><?=$result_count?></b> results
    </td>
</tr>
<?php
    if($result_count != 0){
?>
<tr class='tableheader'>
    <th nowrap>tip</th>
    <th>author</th>
    <th>rating</th>
    <th>views</th>
    <th>created</th>
    <th>summary</th>
</tr>
<?php
    }
?>
<?php
for($i=0;$i<$show_me and $tip_data=mysql_fetch_array($result);$i++){
    $rowclass = ($i & 0x1)?"rowodd":"roweven";
?>
<tr>
    <td class="<?=$rowclass?>" nowrap><img src="images/<?=$tip_data{'complexity'}?>.gif" alt="<?=$tip_data{'complexity'}?>"> <a href="tip.php?tip_id=<?=$tip_data{'tip_id'}?>"><?=$tip_data{'tip_id'}?></a></td>
    <td class="<?=$rowclass?>" align="right"><?=($tip_data{'created_by_email'}==null)?"Anonymous":escapeForHTML($tip_data{'created_by_email'})?></td>
    <td class="<?=$rowclass?>" align="right"><?=$tip_data{'rating_score'}?></td>
    <td class="<?=$rowclass?>" align="right"><?=$tip_data{'viewed'}?></td>
    <td class="<?=$rowclass?>" nowrap>&nbsp;<?=formatNewsDate($tip_data{'creation_date'})?></td>
    <td class="<?=$rowclass?>"><a href="tip.php?tip_id=<?=$tip_data{'tip_id'}?>"><?=escapeForHTML($tip_data{'summary'})?></a></td>
</tr>
<?php
    }
?>

<?php
    if($result_count == 0){
?>
<tr>
    <td colspan="5"><i>Your search returned no results</i></td>
</tr>
<?php
    }
?>

<?php
    if($result_count != 0){
?>
<tr>
    <td colspan="5">
<?php
if($has_prev){
    $prev = $return_link . "&result_ptr=" . ($result_ptr-$show_me);
    echo "<a href=\"$prev\">prev</a>";
} else {
    echo "<font color='gray'>prev</font>";
}
echo " | ";
if($has_next){
    $next = $return_link . "&result_ptr=" . ($result_ptr+$show_me);
    echo "<a href=\"$next\">next</a>";
} else {
    echo "<font color='gray'>next</font>";
}
?>
    </td>
    <td align="right">
	Showing <b><?=$start?></b> to <b><?=$end?></b> of <b><?=$result_count?></b> results
    </td>
</tr>
<?php
    }
?>
</table>

<hr noshade size="1" color="#000000">

<!-- space -->
<form name="search" action="tip_search_results.php">
<table cellpadding="4" cellspacing="0" border="0">
<tr>
    <td class="prompt">keywords</td>
    <td colspan="3"><input type="text" name="keywords" size="60" value="<?=$keywords?>"></td>
</tr>
<tr>
    <td class="prompt">sort by</td>
    <td><select name="order_by">
            <option value="rating">Rating</option>
            <option value="views" <?=$HTTP_GET_VARS{'order_by'}=="views"?"selected":""?> >Viewed</option>
            <option value="creation_date" <?=$HTTP_GET_VARS{'order_by'}=="creation_date"?"selected":""?> >Creation Date</option>
        </select>
       <select name="direction">
           <option value="descending">Descending</option>
           <option value="ascending" <?=$HTTP_GET_VARS{'direction'}=="ascending"?"selected":""?> >Ascending</option>
       </select>
    </td>
    <td align="right">
       <input type="submit" name="search" value="search">
       <input type="submit" name="cancel" value="cancel">
    </td>
</tr>
</table>
</form>
<?php
include("../footer.php");
?>
