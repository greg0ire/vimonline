
<?php

require("../include/init.inc");

// if a login was submitted, attempt to authenticate
deleteSession();
// include the page header
$page_title = "account info";
include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">

<h1>good-bye</h1>
<p>
You have been successfully logged out. Thanks for using vim online.
</p>
<p>
</td>
</tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>

