<?php
// paints search page, search action is handled by search_results
// 

require("../include/init.inc");

// paint the page

// include the page header
$page_title = "tip search";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">

<h1>Search for Tips</h1>
<form name="search" action="search_results.php">
<table cellpadding="2" cellspacing="0" border="0">
<tr><td class="prompt">keywords</b></td><td><input type="text" name="keywords" size="40"></td></tr>
<tr>
    <td class="prompt">sort by</td>
    <td><select name="order_by">
        <option value="rating">Rating</option>
        <option value="views">Views</option>
        <option value="creation_date">Creation Date</option>
    </select>
    <select name="direction">
        <option value="descending">Descending</option>
        <option value="ascending">Ascending</option>
    </select></td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="4" alt=""></td></tr>
<tr>
    <td colspan="2" align="right">
    <input type="submit" name="search" value="search">
    <input type="submit" name="cancel" value="cancel">
    </td>
</tr>
</table>
</form>

    </td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>

