<?php
// methods for dealing with news items

/**
 * get recent news items (by date)
 */
function getRecentNewsItems($count){
    global $DB_NAME;
    $news = array();
    $sql = "select ni.title, ni.news, unix_timestamp(ni.creation_date) as creation_date, 
                   u.first_name, u.last_name
              from vo_news_items ni, vs_users u
             where ni.created_by = u.user_id
             order by ni.creation_date desc";
    $result = mysql_db_query($DB_NAME,$sql);
    while(($news_data = mysql_fetch_array($result)) and sizeof($news) < $count){
        array_push($news,$news_data);
    }
    return $news;
}

/**
 * create a news item
 */
function createNewsItem($userId,$title,$news){
    global $DB_NAME;
    $insert = "insert into vo_news_items (created_by,title,news) values ($userId,'$title','$news')";
    mysql_db_query($DB_NAME,$insert);
}


?>
