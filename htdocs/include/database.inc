<?php
$CONN;
# connect to the database
function db_connect(){
    global $CONN,$DB_HOST,$DB_USER,$DB_PASSWD,$DB_NAME;
    $CONN = mysql_pconnect($DB_HOST,$DB_USER,$DB_PASSWD);
}

?>
