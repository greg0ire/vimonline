<?php
// handles a search action
// optional http get vars: keywords, sort_by, show_me

require("../include/init.inc");
require("../include/string_utils.inc");

if($HTTP_GET_VARS{"cancel"}){
    header("Location: index.php");
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
$return_link = "search_results.php?";
if($keywords){
    // they searched for keywords, add the join
    $sql = $sql . " and match (summary,tip) against ('$keywords')";
    $return_link = $return_link . "&keywords=$keywords";
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
// paint the page
// include the page header
$page_title = "search results";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000"><h1>search results</h1></td>
</tr>
</table>

<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td align="right" colspan="13">Showing <b><?=$start?></b> to <b><?=$end?></b> of <b><?=$result_count?></b> results</td></tr>
<tr><td colspan="13"><img src="images/spacer.gif" height="4" width="1" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" height="1" width="20" alt=""></td>
    <th nowrap>tip</th>
    <td><img src="images/spacer.gif" height="1" width="20" alt=""></td>
    <th>author</th>
    <td><img src="images/spacer.gif" height="1" width="20" alt=""></td>
    <th>rating</th>
    <td><img src="images/spacer.gif" height="1" width="20" alt=""></td>
    <th>views</th>
    <td><img src="images/spacer.gif" height="1" width="20" alt=""></td>
    <th>created</th>
    <td><img src="images/spacer.gif" height="1" width="20" alt=""></td>
    <th>summary</th>
    <td><img src="images/spacer.gif" height="1" width="20" alt=""></td>
</tr>
<tr><td colspan="13"><img src="images/spacer.gif" height="5" width="1" alt=""></td></tr>
<?php
for($i=0;$i<$show_me and $tip_data=mysql_fetch_array($result);$i++){
    $rowclass = ($i & 0x1)?"rowodd":"roweven";
?>
<tr><td class="<?=$rowclass?>" colspan="13"><img src="images/spacer.gif" height="3" width="1" alt=""></td></tr>
<tr>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
    <td class="<?=$rowclass?>" nowrap><img src="images/<?=$tip_data{'complexity'}?>.gif" alt="<?=$tip_data{'complexity'}?>"> <a href="tip.php?tip_id=<?=$tip_data{'tip_id'}?>"><?=$tip_data{'tip_id'}?></a></td>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
    <td class="<?=$rowclass?>" align="right"><?=($tip_data{'created_by_email'}==null)?"Anonymous":$tip_data{'created_by_email'}?></td>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
    <td class="<?=$rowclass?>" align="right"><?=$tip_data{'rating_score'}?></td>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
    <td class="<?=$rowclass?>" align="right"><?=$tip_data{'viewed'}?></td>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
    <td class="<?=$rowclass?>" nowrap><?=formatNewsDate($tip_data{'creation_date'})?></td>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
    <td class="<?=$rowclass?>" width="1000"><a href="tip.php?tip_id=<?=$tip_data{'tip_id'}?>"><?=$tip_data{'summary'}?></a></td>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
</tr>
<tr><td class="<?=$rowclass?>" colspan="13"><img src="images/spacer.gif" height="3" width="1" alt=""></td></tr>
<?php
    }
?>

<?php
    if($result_count == 0){
?>
<tr>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
    <td colspan="11"><i>Your search returned no results</i></td>
    <td class="<?=$rowclass?>"><img src="images/spacer.gif" height="1" width="5" alt=""></td>
</tr>
<?php
    }
?>

<tr><td colspan="13"><img src="images/spacer.gif" height="4" width="1" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td colspan="5">
<?php
if($has_prev){
    $prev = $return_link . "&result_ptr=" . ($result_ptr-$show_me);
    echo "<a href=$prev>prev</a>";
} else {
    echo "<font color='gray'>prev</font>";
}
echo " | ";
if($has_next){
    $next = $return_link . "&result_ptr=" . ($result_ptr+$show_me);
    echo "<a href=$next>next</a>";
} else {
    echo "<font color='gray'>next</font>";
}
?>
    </td>
    <td align="right" colspan="7">Showing <b><?=$start?></b> to <b><?=$end?></b> of <b><?=$result_count?></b> results</td>
</tr>
<tr><td colspan="13"><img src="images/spacer.gif" height="4" width="1" alt=""></td></tr>
</table>

<hr noshade size="1" color="#000000">

<!-- space -->
<form name="search" action="search_results.php">
<table cellpadding="2" cellspacing="0" border="0">
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td class="prompt">keywords</td>
    <td><input type="text" name="keywords" size="60" value="<?=$keywords?>"></td>
</tr>
<tr><td colspan="3"><img src="images/spacer.gif" width="1" height="4" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td><b>sort by</b></td>
    <td><select name="order_by">
            <option value="rating">Rating</option>
            <option value="views" <?=$HTTP_GET_VARS{'order_by'}=="views"?"selected":""?> >Viewed</option>
            <option value="creation_date" <?=$HTTP_GET_VARS{'order_by'}=="creation_date"?"selected":""?> >Creation Date</option>
        </select></td>
</tr>
<tr><td colspan="3"><img src="images/spacer.gif" width="1" height="4" alt=""></td></tr>
<tr>
    <td colspan="3" align="right">
    <input type="submit" name="search" value="search">
    <input type="submit" name="cancel" value="cancel">
    </td>
</tr>
</table>
</form>

<?php
include("$BASE_DIR/footer.php");
?>
