<?php

/**
 * list of supported script types, not stored as a mysql enum because
 * I would rather not make ddl changes to add types
 */
$SCRIPT_TYPES = array("utility","syntax","indent","color scheme","ftplugin");

/**
 * Get the drop down list of script types
 */
function getScriptTypeDropDown($selected){
    global $SCRIPT_TYPES;
    $dd = "";
    foreach($SCRIPT_TYPES as $type){
        $dd = $dd . "<option value=\"".$type."\"";
        if($selected == $type){
            $dd = $dd . " selected ";
        } 
        $dd = $dd . ">".$type."</option>\n";
    }
    return $dd;
}


/**
 * save script header info (this doesn't upload the script, just save the header info)
 * @return the script id of the new script
 */
function saveScript($userId,$script_name,$script_type,$summary,$description,$install_details){
    global $DB_NAME;
    $insert = "insert into vs_scripts set 
                    script_name='$script_name',
                    script_type='$script_type',
                    summary='$summary',
                    description='$description',
                    install_details='$install_details',
                    ratings=0,
                    rating_score=0,
                    downloads=0,
                    last_updated_by = $userId,
                    last_update_date = now(),
                    created_by = $userId,
                    creation_date = now()
                    ";
    mysql_db_query($DB_NAME,$insert);
    return mysql_insert_id();
}
/**
 * save script header info (this doesn't upload the script, just save the header info)
 * @return the script id of the new script
 */
function updateScript($userId,$script_id,$script_name,$summary,$description,$install_details){
    global $DB_NAME;
    $insert = "update vs_scripts set 
                    script_name='$script_name',
                    summary='$summary',
                    description='$description',
                    install_details='$install_details',
                    last_updated_by = $userId,
                    last_update_date = now()
               where script_id = $script_id
                    ";
    mysql_db_query($DB_NAME,$insert);
    return mysql_insert_id();
}
/**
 * save the script source for a script
 * @return the new script source id
 */
function saveScriptSource($userId,$script_id,$package,$vim_version,$script_version,$version_comment,$mime_type,$data){
    global $DB_NAME;
    $insert = "insert into vs_script_source set 
                    script_id='$script_id',
                    package='$package',
                    vim_version='$vim_version',
                    mime_type='$mime_type',
                    created_by = $userId,
                    creation_date = now(),
                    script_version='$script_version',
                    version_comment='$version_comment',
                    src='$data'";
    mysql_db_query($DB_NAME,$insert);
    return mysql_insert_id();
}
/**
 * load script info
 * @return script info as an array. I would like to use a class but I didn't
 * learn about php classes until after I wrote this...maybe some day.
 */
function loadScript($script_id){
    global $DB_NAME;
    $script_data;
    $select = "select s.script_id, s.script_name, s.script_type, s.summary, s.description,
                       s.install_details, s.ratings, s.rating_score, s.downloads, s.last_updated_by,
                       s.last_update_date, unix_timestamp(s.creation_date) as creation_date, 
                       u.user_id, u.first_name, u.last_name
                 from vs_scripts s,
                      vs_users u
                 where script_id = $script_id
                   and s.created_by = u.user_id";
    $result = mysql_db_query($DB_NAME,$select);
    $script_data = mysql_fetch_array ($result);
    return $script_data;
}
/**
 * load all the versions (and details) for a particular script
 * @return script src info as an array. I would like to use a class but I didn't
 * learn about php classes until after I wrote this...maybe some day.
 */
function loadScriptVersions($script_id){
    global $DB_NAME;
    $versions = array();
    $select = "select ss.script_source_id, ss.package, ss.vim_version, ss.script_version, ss.version_comment, 
                      unix_timestamp(ss.creation_date) as creation_date, u.user_id, 
                      u.first_name, u.last_name
                 from vs_script_source ss,
                      vs_users u
                where ss.script_id = $script_id
                  and ss.created_by = u.user_id
                order by ss.creation_date desc";
    $result = mysql_db_query($DB_NAME,$select);
    if(mysql_error()){
        echo mysql_error();
    }
    while($version_data = mysql_fetch_array ($result)){
        array_push($versions,$version_data);
    }
    return $versions;
}
/**
 * load a single script version by id
 * @return array of script source information. I would like to use a class but I didn't
 * learn about php classes until after I wrote this...maybe some day.
 */
function loadScriptVersion($script_source_id){
    global $DB_NAME;
    $select = "select ss.script_source_id, ss.package, ss.vim_version, ss.script_version, ss.version_comment, 
                      unix_timestamp(ss.creation_date) as creation_date, u.user_id, 
                      u.first_name, u.last_name, s.script_name, s.script_id
                 from vs_script_source ss,
                      vs_users u,
                      vs_scripts s
                where ss.script_source_id = $script_source_id
                  and ss.script_id = s.script_id
                  and ss.created_by = u.user_id";
    $result = mysql_db_query($DB_NAME,$select);
    if(mysql_error()){
        echo mysql_error();
    }
    $version_data = mysql_fetch_array ($result);
    return $version_data;
}
/**
 * load the most recent version
 */
function loadLatestScriptVersion($script_id){
    global $DB_NAME;
    $select = "select script_source_id, vim_version, script_version, version_comment, 
                      created_by, unix_timestamp(creation_date) as creation_date
                 from vs_script_source
                where script_id = $script_id
                order by creation_date desc";
    $result = mysql_db_query($DB_NAME,$select);
    // only return the first
    return mysql_fetch_array ($result);
}
/**
 * delete a script version
 */
function deleteScriptVersion($script_source_id){
    global $DB_NAME;
    $delete = "delete from vs_script_source where script_source_id = $script_source_id";
    mysql_db_query($DB_NAME,$delete);
}
/**
 * get info on the $count most recent scripts
 */
function getRecentScriptUpdates($count){
    global $DB_NAME;
    $scripts = array();
    $script_ids = array();
    $select = "select ss.script_id, ss.script_version, ss.version_comment, 
                      ss.created_by, unix_timestamp(ss.creation_date) as creation_date,
                      s.summary, s.script_name, u.user_id, u.first_name, u.last_name
                 from vs_script_source ss,
                      vs_scripts s,
                      vs_users u
                where ss.script_id = s.script_id
                  and ss.created_by = u.user_id
                order by creation_date desc";
    $result = mysql_db_query($DB_NAME,$select);
    while(($script_data = mysql_fetch_array($result)) && (sizeof($scripts)<$count)){
        if($script_ids{$script_data{"script_id"}} != 1){
            array_push($scripts,$script_data);
            $script_ids{$script_data{"script_id"}} = 1;
        }
    }
    return $scripts;
}
/**
 * returns true if a user has rated this script from their current
 * REMOTE_ADDR
 */
function hasRatedScript($ip,$script_id){
    global $DB_NAME;
    $sql = "select script_id
              from vs_script_ratings
             where script_id = $script_id
               and ip = '$ip' ";
    $result = mysql_db_query($DB_NAME,$sql);
    if(mysql_num_rows($result)==0){
        return false;
    } else {
        return true;
    }
}
/**
 * rates a script. This method does two things. It adds a score to the denormalized
 * value in the script table and then adds a row to the ratings table with the users
 * ip.
 */
function rateScript($ip,$script_id,$rating){
    global $DB_NAME;
    if(!hasRatedScript($ip,$script_id)){
        $score = 0;
        if($rating=="life_changing"){
            $score = 4;
        } else if($rating=="helpful"){
            $score = 1;
        } else if($rating=="unfulfilling"){
            $score = -1;
        }
        $insert = "insert into vs_script_ratings (script_id,ip,rating) values ($script_id,'$ip',$score)";
        mysql_db_query($DB_NAME,$insert);
        $update_sql = "update vs_scripts set rating_score=rating_score+$score,
                               ratings=ratings+1 where script_id = $script_id";
        mysql_db_query($DB_NAME,$update_sql);
    }
}
/**
 * load all interesting info about a script src or version
 */
function loadScriptSource($src_id){
    global $DB_NAME;
    $query = "select s.script_id, s.script_name, ss.package, ss.mime_type, ss.src 
                from vs_script_source ss, vs_scripts s
               where ss.script_id = s.script_id
                 and script_source_id=$src_id";
    $result = mysql_db_query($DB_NAME,$query);
    return mysql_fetch_array($result);
}
/**
 * returns true if the user has downloaded a script (from the REMOTE_ADDR). This
 * avoids multiple downloads from the same user from screwing up the score.
 */
function hasDownloadedScript($ip,$script_id){
    global $DB_NAME;
    $sql = "select script_id
              from vs_script_downloads
             where script_id = $script_id
               and ip = '$ip' ";
    $result = mysql_db_query($DB_NAME,$sql);
    if(mysql_num_rows($result)==0){
        return false;
    } else {
        return true;
    }
}
/**
 * increment the download count. This method does two things. First it inserts
 * a row for the user who downloaded (with their REMOTE_ADDR) and then it increments
 * the denormalized value in the script table by 1. 
 */
function incrementDownload($ip,$script_id){
    global $DB_NAME;
    if(!hasDownloadedScript($ip,$script_id)){
        $insert = "insert into vs_script_downloads (script_id,ip) values ($script_id,'$ip')";
        mysql_db_query($DB_NAME,$insert);
        $update_sql = "update vs_scripts set downloads=downloads+1 where script_id = $script_id";
        mysql_db_query($DB_NAME,$update_sql);
    }
}
/**
 * get all the scripts a user has worked on
 */
function getUsersScripts($userId){
    global $DB_NAME;
    $scripts = array();
    $sql = "select distinct (ss.script_id), s.script_name, s.summary
              from vs_scripts s, vs_script_source ss
             where s.script_id = ss.script_id
               and ss.created_by = $userId
             order by ss.created_by";
    $result = mysql_db_query($DB_NAME,$sql);
    while(($script_data = mysql_fetch_array($result))){
        array_push($scripts,$script_data);
    }
    return $scripts;
}

/**
 * get the total number of scripts
 */
function getScriptCount(){
    global $DB_NAME;
    $sql = "select count(1) as total from vs_scripts";
    $result = mysql_db_query($DB_NAME,$sql);
    return mysql_result($result,"total");
}

/**
 * get the total number of scripts
 */
function getTotalScriptDownloads(){
    global $DB_NAME;
    $sql = "select sum(downloads) as total from vs_scripts";
    $result = mysql_db_query($DB_NAME,$sql);
    return mysql_result($result,"total");
}

/**
 * get the total number of scripts
 */
function getTotalScriptVersions($script_id){
    global $DB_NAME;
    $sql = "select count(*) as versions from vs_script_source where script_id = $script_id";
    $result = mysql_db_query($DB_NAME,$sql);
    return mysql_result($result,"versions");
}

?>
