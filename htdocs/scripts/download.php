<?php
// page for downloading scripts

require("../include/init.inc");
require("include/script.inc");

db_connect();
$script_data = loadScriptSource($HTTP_GET_VARS{"src_id"});
if(mysql_errno()){
    $msg = mysql_error();
    include("$BASE_DIR/error.php");
    exit;
}
if(!$script_data{"script_id"}){
    $msg = "download: I couldn't find the file you requested (src_id=" . $HTTP_GET_VARS{"src_id"} . "), are you sure it exists?";
    include("$BASE_DIR/error.php");
    exit;
}
incrementDownload($REMOTE_ADDR,$script_data{"script_id"});
$script_name = $script_data{"script_name"};
// don't use stored mime type so people are always prompted
// to save
$mime_type = "application/octetstream";
Header( "Content-type: $mime_type");
if(ereg('MSIE',getenv('HTTP_USER_AGENT'))){
    // IE handles force download much better if we don't include the "attachment"
    // specifier as defined by the HTTP spec
    Header( "Content-Disposition: filename=$script_name");
} else {
    // Most normal browsers do it right
    Header( "Content-Disposition: attachment; filename=$script_name");
}
echo $script_data{"src"};
?>
