<?php
require_once("../include/init.inc");
$page_title = "download tips";
$nav_main = "tips";
$nav_sub = "tip_download";
$page_sid = "$BASE_DIR/sid_empty.php";

// handle the download action
if($HTTP_GET_VARS{"download"}){
    $sql = "select tip_id,
                   summary,
                   tip,
                   created_by,
                   created_by_email,
                   unix_timestamp(creation_date) as creation_date
              from vt_tips
             where 1=1 ";
    // always order oldest to newest for lack of a better idea...
    $sql = $sql . " order by creation_date ";
    // run the query
    $result = mysql_db_query($DB_NAME,$sql);
    if(mysql_errno()){
        // error while running sql, go to error page
        $msg = mysql_error();
        include("error.php");
        exit;
    } else {
        header( "Content-type: text" );
        header( "Content-Disposition: filename=vimtips.txt" );
        header( "Content-Description: vim tip data" );
        echo "*vimtips.txt*\n";
        echo "This file comes from the Vim Online tip database.  \n";
        echo "These tips were downloaded on " . date("r") . "\n";
        echo "More tips can be found at http://vim.sf.net/tip_index.php\n";
        echo "A new tip file can be downloaded from http://vim.sf.net/tip_downlo
ad.php\n\n";
        echo "Thanks for using vim online.\n";
        echo "\n\n\n";
        /*
        Download tip structure:
        VimTip <#>: <summary>
        <url>

        <tip data>
        */
        while($tip_data=mysql_fetch_array($result)){
            echo "VimTip " . $tip_data{'tip_id'} . ": " . $tip_data{'summary'} .
  "\n";
            echo "http://vim.sourceforge.net/tip_view.php?tip_id=" . $tip_data{'
tip_id'} . "\n";
            echo "\n";
            // always use unix file format, it will look ugly in notepad but who the heck cares
            echo str_replace("\r","",$tip_data{'tip'});
            echo "\n\n\n\n\n\n\n";
        }
    }
  exit;
}

include("../header.php");
?>
<h1>Tip Download</h1>
<p>
You can download the vim tip database as a text file for easy reading off-line.
Benji Fisher has also written a vim script 
(<a href="http://vim.sourceforge.net/scripts/script.php?script_id=88">vimtips.zip</a>)
that will emulate "tip of the day" functionality.
</p>
<form name="download">
<input type="submit" name="download" value="download">
</form>
<?php
include("../footer.php");
?>

