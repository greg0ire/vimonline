<?php
// handles a search action
// optional http get vars: keywords, sort_by, show_me
require_once("../include/init.inc");
require_once("../include/string_utils.inc");
require_once("include/script.inc");

$page_title = "search results";

if($HTTP_GET_VARS{"cancel"}){
    header("Location: scripts.php");
    exit;
}
// this should be move to an include
// file and out of the php file but
// I haven't got a chance yet.
$keywords = $HTTP_GET_VARS{"keywords"};
$type = $HTTP_GET_VARS{"script_type"};
$order_by = $HTTP_GET_VARS{"order_by"};
$direction = $HTTP_GET_VARS{"direction"};
$result_ptr = $HTTP_GET_VARS{"result_ptr"};
if(!$result_ptr or $result_ptr < 0){
    $result_ptr = 0;
}
$title = "search results"; 
$sql = "select s.script_id,
               s.script_name, 
               s.script_type, 
               s.rating_score, 
               s.downloads, 
               s.summary,
               unix_timestamp(creation_date) as creation_date
          from vs_scripts s
         where 1=1 "; 
$return_link = "script_search_results.php?";
if($keywords){
    // they searched for keywords, add the join
    $sql = $sql . " and match (s.summary,s.description,s.install_details) against ('$keywords')";
    $return_link = $return_link . "&keywords=$keywords";
    $words = preg_split("/ /",$keywords);
    foreach($words as $word){
        // add joins for keywords less than 4 letters -- would rather use
        // fulltext but not a mysql user parameter :(
        if(strlen($word) < 4){
            $sql = $sql . " or s.description regexp '[[:<:]]" . $word . "[[:>:]]'";      
            $sql = $sql . " or s.summary regexp '[[:<:]]" . $word . "[[:>:]]'";      
            $sql = $sql . " or s.install_details regexp '[[:<:]]" . $word . "[[:>:]]'";      
        }
    }
}
if($script_type && $script_type != "all"){
    $sql = $sql . "and s.script_type = '" . $script_type . "' " ;
    $return_link = $return_link . "&script_type=$script_type";
}
if($order_by=='rating'){
    $order_by_clause = " order by s.rating_score ";
    $return_link = $return_link . "&order_by=rating";
} else if($order_by=='downloads'){
    $order_by_clause = " order by s.downloads ";
    $return_link = $return_link . "&order_by=downloads";
} else if($order_by=='script_name'){
    $order_by_clause = " order by s.script_name ";
    $return_link = $return_link . "&order_by=script_name";
} else {
    $order_by_clause = " order by s.creation_date ";
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
include("../header.php");
?>
<h1>Search Results</h1>

<table cellpadding="2" cellspacing="2" border="0" width="100%">
<tr>
    <td colspan="4">
Searched <?=$type?> scripts for "<b><?=$keywords?></b>"
    </td>
    <td align="right">
	Showing <b><?=$start?></b> to <b><?=$end?></b> of <b><?=$result_count?></b> results
    </td>
</tr>
<?php
    if($result_count != 0){
?>
<tr class='tableheader'>
    <th nowrap>Script</th>
    <th>Type</th>
    <th>Rating</th>
    <th>Down<br>loads</th>
    <th>Summary</th>
</tr>
<?php
    }
?>
<?php
for($i=0;$i<$show_me and $script_data=mysql_fetch_array($result);$i++){
    $rowclass = ($i & 0x1)?"rowodd":"roweven";
?>
<tr>
    <td class="<?=$rowclass?>"><a href="script.php?script_id=<?=$script_data{'script_id'}?>"><?=$script_data{'script_name'}?></a></td>
    <td class="<?=$rowclass?>"><?=$script_data{'script_type'}?></td>
    <td class="<?=$rowclass?>" align="right"><?=$script_data{'rating_score'}?></td>
    <td class="<?=$rowclass?>" align="right"><?=$script_data{'downloads'}?></td>
    <td class="<?=$rowclass?>" width="1000"><a href="script.php?script_id=<?=$script_data{'script_id'}?>"><?=escapeForHTML($script_data{'summary'})?></a></td>
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
    <td colspan="4">
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
<form name="search" action="script_search_results.php">
<table cellpadding="4" cellspacing="0" border="0">
<tr>
    <td class="prompt">keywords</td>
    <td colspan="2"><input type="text" name="keywords" size="60" value="<?=$keywords?>"></td>
</tr>
<tr>
    <td class="prompt">type</td>
    <td>
        <select name="script_type">
        <option value="">-- all -- </option>
        <?=getScriptTypeDropDown($HTTP_GET_VARS{'script_type'})?>
        </select>
    </td>
</tr>
<tr>
    <td><b>sort by</b></td>
    <td>
       <select name="order_by">
            <option value="rating">Rating</option>
            <option value="downloads" <?=$HTTP_GET_VARS{'order_by'}=="downloads"?"selected":""?> >Downloads</option>
            <option value="script_name" <?=$HTTP_GET_VARS{'order_by'}=="script_name"?"selected":""?> >Script Name</option>
            <option value="creation_date" <?=$HTTP_GET_VARS{'order_by'}=="creation_date"?"selected":""?> >Creation Date</option>
        </select>
       <select name="direction">
        <option value="descending" <?=$HTTP_GET_VARS{'direction'}!="ascending"?"selected":""?> >Descending</option>
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

