<?php

function createTip($author,$summary,$version,$complexity,$tip){
    global $DB_NAME;
    $insert = "insert into vt_tips set 
                created_by_email='$author',
                creation_date = now(),
                summary='$summary',
                version='$version',
                ratings=0,
                rating_score=0,
                viewed=0,
                complexity='$complexity',
                tip='$tip'";
    mysql_db_query($DB_NAME,$insert);
    return mysql_insert_id();
}

function createTipNote($tip_id,$email,$note){
    global $DB_NAME;
    $insert = 
        "insert into vt_tip_notes set 
            created_by_email='$email',
            creation_date = now(),
            note='$note',
            tip_id='$tip_id'
            ";
    mysql_db_query($DB_NAME,$insert);
    return mysql_insert_id();
}

function loadTip($tip_id){
    global $DB_NAME;
    $tip_data;
    $query = "select tip_id, summary, tip, version, complexity, created_by, 
                     created_by_email, viewed, ratings, rating_score, 
                     unix_timestamp(creation_date) as creation_date 
                from vt_tips where tip_id = $tip_id";
    $result = mysql_db_query($DB_NAME,$query);
    $tip_data = mysql_fetch_array ($result);
    mysql_free_result($result);
    return $tip_data;
}

function getNextTip($tip_id){
    global $DB_NAME;
    $tip_data;
    $query = "select tip_id, summary from vt_tips where tip_id > $tip_id order by tip_id";
    $result = mysql_db_query($DB_NAME,$query);
    $tip_data = mysql_fetch_array ($result);
    mysql_free_result($result);
    return $tip_data;
}

function getPrevTip($tip_id){
    global $DB_NAME;
    $tip_data;
    $query = "select tip_id, summary from vt_tips where tip_id < $tip_id order by tip_id desc";
    $result = mysql_db_query($DB_NAME,$query);
    $tip_data = mysql_fetch_array ($result);
    mysql_free_result($result);
    return $tip_data;
}

function loadTipNotes($tip_id){
    global $DB_NAME;
    $notes = array();
    $sql = "select note,
                   created_by, 
                   created_by_email, 
                   unix_timestamp(creation_date) as creation_date
              from vt_tip_notes
             where tip_id = $tip_id";
    $result = mysql_db_query($DB_NAME,"$sql");
    // TODO: move this to tip page
    if(mysql_errno()){
        $msg = mysql_error();
        include("error.php");
        exit;
    } else {
        while($note_data = mysql_fetch_array ($result)){
            array_push($notes,$note_data);
        }
    }
    mysql_free_result($result);
    return $notes;
}

function updateTipViews($ip,$tip_id){
    global $DB_NAME;
    $sql = "select tip_id
              from vt_tip_views
             where tip_id = $tip_id
               and ip = '$ip' ";
    $result = mysql_db_query($DB_NAME,$sql);
    // TODO: move this to php page
    if(mysql_errno()){
        $msg = mysql_error();
        include("error.php");
        exit;
    }
    if(mysql_num_rows($result)==0){
        $insert_sql = "insert into vt_tip_views (tip_id,ip) values ($tip_id,'$ip')";
        mysql_db_query($DB_NAME,$insert_sql);
        $update_sql = "update vt_tips set viewed = viewed+1 where tip_id = $tip_id";
        mysql_db_query($DB_NAME,$update_sql);
        if(mysql_errno()){
            $msg = mysql_error();
            include("error.php");
            exit;
        }
    }
    mysql_free_result($result);
}

function hasRatedTip($ip,$tip_id){
    global $DB_NAME;
    $sql = "select tip_id
              from vt_tip_ratings
             where tip_id = $tip_id
               and ip = '$ip' ";
    $result = mysql_db_query($DB_NAME,$sql);
    if(mysql_num_rows($result)==0){
        return false;
    } else {
        return true;
    }
}
function rateTip($ip,$tip_id,$rating){
    global $DB_NAME;
    if(!hasRatedTip($ip,$tip_id)){
        $score = 0;
        if($rating=="life_changing"){
            $score = 4;
        } else if($rating=="helpful"){
            $score = 1;
        } else if($rating=="unfulfilling"){
            $score = -1;
        } else {
            // unrecognized tip
            return;
        }
        $insert_sql = "insert into vt_tip_ratings (tip_id,ip,rating) values ($tip_id,'$ip',$score)";
        mysql_db_query($DB_NAME,$insert_sql);
        $update_sql = "update vt_tips set rating_score=rating_score+$score,
                               ratings=ratings+1 where tip_id = $tip_id";
        mysql_db_query($DB_NAME,$update_sql);
    }
}

function getRecentTipAdditions($count){
    global $DB_NAME;
    $tips = array();
    $query = "select tip_id, summary, tip, version, complexity, created_by, 
                     created_by_email, viewed, ratings, rating_score, 
                     unix_timestamp(creation_date) as creation_date 
                from vt_tips
                order by creation_date desc";
    $result = mysql_db_query($DB_NAME,$query);
    while(($tip_data = mysql_fetch_array($result)) && (sizeof($tips)<$count)){
        array_push($tips,$tip_data);
    }
    return $tips;
}

/**
 * get the total number of tips
 */
function getTipCount(){
    global $DB_NAME;
    $sql = "select count(1) as total from vt_tips";
    $result = mysql_db_query($DB_NAME,$sql);
    return mysql_result($result,"total");
}

/**
 * get the total number of scripts
 */
function getTotalTipViews(){
    global $DB_NAME;
    $sql = "select sum(viewed) as total from vt_tips";
    $result = mysql_db_query($DB_NAME,$sql);
    return mysql_result($result,"total");
}


?>
