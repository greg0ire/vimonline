<?php
$SRC_DB_HOST = "localhost";
$SRC_DB_NAME = "vimtips";
$SRC_DB_PASSWD = "";

//dNYUSMNF
$DEST_DB_HOST = "localhost";
$DEST_DB_NAME = "vimscripts";
$DEST_DB_PASSWD = "";

/*
+-------------------+
| Tables_in_vimtips |
+-------------------+
| vt_tips           |
| vt_tip_notes      |
| vt_tip_ratings    |
| vt_tip_views      |
+-------------------+
*/

// connect to dest
$conn = mysql_pconnect($SRC_DB_HOST,$SRC_DB_NAME,$SRC_DB_PASSWD);
if(mysql_errno()){ echo mysql_error(); exit; }
// vt_tips
echo "Loading data from vt_tips<br>";
$select = "select * from vt_tips";
$result = mysql_db_query($SRC_DB_NAME,$select);
if(mysql_errno()){ echo mysql_error(); exit; }
$vt_tips_rows = array();
while($tip_data = mysql_fetch_array($result)){
    array_push($vt_tips_rows,$tip_data);
}

// vt_tip_notes
echo "Loading data from vt_tip_notes<br>";
$select = "select * from vt_tip_notes";
$result = mysql_db_query($SRC_DB_NAME,$select);
if(mysql_errno()){ echo mysql_error(); exit; }
$vt_tip_notes_rows = array();
while($note_data = mysql_fetch_array($result)){
    array_push($vt_tip_notes_rows,$note_data);
}

// vt_tip_ratings
echo "Loading data from vt_tip_ratings<br>";
$select = "select * from vt_tip_ratings";
$result = mysql_db_query($SRC_DB_NAME,$select);
if(mysql_errno()){ echo mysql_error(); exit; }
$vt_tip_ratings_rows = array();
while($rating_data = mysql_fetch_array($result)){
    array_push($vt_tip_ratings_rows,$rating_data);
}

// vt_tip_views
echo "Loading data from vt_tip_views<br>";
$select = "select * from vt_tip_views";
$result = mysql_db_query($SRC_DB_NAME,$select);
if(mysql_errno()){ echo mysql_error(); exit; }
$vt_tip_views_rows = array();
while($view_data = mysql_fetch_array($result)){
    array_push($vt_tip_views_rows,$view_data);
}

// insert data into dest

$conn = mysql_pconnect($DEST_DB_HOST,$DEST_DB_NAME,$DEST_DB_PASSWD);
if(mysql_errno()){ echo mysql_error(); exit; }

echo "inserting data into vt_tips<br>";
for($i=0;$i<sizeof($vt_tips_rows);$i++){
    $tip_data = $vt_tips_rows[$i];
    $insert = "insert into vt_tips
            set tip_id = " . $tip_data{"tip_id"} . "," .
                "summary = '" . str_replace("'","''",$tip_data{"summary"}) . "'," .
                "tip = '" . str_replace("'","''",$tip_data{"tip"}) . "'," .
                "version = '" . $tip_data{"version"} . "'," .
                "complexity = '" . $tip_data{"complexity"} . "'," .
                "created_by_email = '" . $tip_data{"created_by_email"} . "'," .
                "creation_date = " . $tip_data{"creation_date"} . "," .
                "ratings = " . $tip_data{"ratings"} . "," .
                "rating_score = " . $tip_data{"rating_score"} . "," .
                "viewed = " . $tip_data{"viewed"}
                ;
    mysql_db_query($DEST_DB_NAME,$insert);
    if(mysql_errno()){ 
        echo mysql_error() . "<br>"; 
        echo "<code>$insert</code><br>";
        exit; 
    }
}

echo "inserting data into vt_tip_notes<br>";
for($i=0;$i<sizeof($vt_tip_notes_rows);$i++){
    $note_data = $vt_tip_notes_rows[$i];
    $insert = "insert into vt_tip_notes
            set tip_note_id = " . $note_data{"tip_note_id"} . "," .
                "tip_id = " . $note_data{"tip_id"} . "," .
                "note = '" . str_replace("'","''",$note_data{"note"}) . "'," .
                "created_by_email = '" . $note_data{"created_by_email"} . "'," .
                "creation_date = " . $note_data{"creation_date"}
                ;
    mysql_db_query($DEST_DB_NAME,$insert);
    if(mysql_errno()){ 
        echo mysql_error() . "<br>"; 
        echo "<code>$insert</code><br>";
        exit; 
    }
}

echo "inserting data into vt_tip_ratings<br>";
for($i=0;$i<sizeof($vt_tip_ratings_rows);$i++){
    $rating_data = $vt_tip_ratings_rows[$i];
    $insert = "insert into vt_tip_ratings
            set tip_id = " . $rating_data{"tip_id"} . "," .
                "rating = " . $rating_data{"rating"} . "," .
                "ip = '" . $rating_data{"ip"} . "'," .
                "creation_date = " . $note_data{"creation_date"}
                ;
    mysql_db_query($DEST_DB_NAME,$insert);
    if(mysql_errno()){ 
        echo mysql_error() . "<br>"; 
        echo "<code>$insert</code><br>";
        exit; 
    }
}

echo "inserting data into vt_tip_views<br>";
for($i=0;$i<sizeof($vt_tip_views_rows);$i++){
    $view_data = $vt_tip_views_rows[$i];
    $insert = "insert into vt_tip_ratings
            set tip_id = " . $view_data{"tip_id"} . "," .
                "ip = '" . $view_data{"ip"} . "'," .
                "creation_date = " . $view_data{"creation_date"}
                ;
    mysql_db_query($DEST_DB_NAME,$insert);
    if(mysql_errno()){ 
        echo mysql_error() . "<br>"; 
        echo "<code>$insert</code><br>";
        exit; 
    }
}

?>

