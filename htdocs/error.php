<?php
    $title = "Error"; 
    if(!$BASE_DIR){
        require("./include/init.inc");
    }
    include("$BASE_DIR/header.php");
?>
<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
<p class="errorheader">
<b>Vim Online Error</b><br><br>
</p>
<p>
<?=$msg?>
</p>
<p>

</p>


    </td>
</tr>
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
</table>

<?php
include("$BASE_DIR/footer.php");
?>

