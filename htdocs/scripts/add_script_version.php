<?php
// adds a new script version to the repository
// @requires script_id

require("../include/init.inc");
require("include/script.inc");
$error_msg;
$script_id = $HTTP_GET_VARS{"script_id"};
if (!isSessionValid()) {
    //redirectToLoginPage("/scripts/add_script_version.php?script_id=$script_id");
}

// handle actions
if($HTTP_POST_VARS{"add_script"}=="upload"){
    // handle save
    $package_name = basename($HTTP_POST_FILES["script_file"]["name"]);
    $script_id = $HTTP_POST_VARS{"script_id"};
    $script_version = $HTTP_POST_VARS{'script_version'};
    $vim_version = $HTTP_POST_VARS{'vim_version'};
    $version_comment = $HTTP_POST_VARS{'version_comment'};
    if(!$script_version || !$vim_version || !$version_comment || !$package_name){
        $error_msg = "All fields are required.";
    } else if($HTTP_POST_FILES["script_file"]["size"]==0) {
        $error_msg = "$package_name is empty, are you sure you specified the correct path?";
    } else {
        $mime_type = $HTTP_POST_FILES["script_file"]["type"];
        $data = addslashes(fread(fopen($HTTP_POST_FILES["script_file"]["tmp_name"], "r"),
                    $HTTP_POST_FILES["script_file"]["size"]));
        $user = getSessionUser();
        saveScriptSource($user->getUserId(),$script_id,$package_name,$vim_version,$script_version,$version_comment,$mime_type,$data);
        if(mysql_errno()){
            $msg = mysql_error();
            include("$BASE_DIR/error.php");
            exit;
        } 
        // save successfull, redirect to script detail
        header("Location: script.php?script_id=$script_id");
        exit;
    }
} else if ($HTTP_POST_VARS{"add_script"}=="cancel"){
    // handle cancel, redirect to index
    header("Location: scripts.php");
    exit;
}

// paint the page
$script_data = loadScript($script_id);
if(mysql_errno()){
    $msg = "script_add_version:" . mysql_error();
    include("$BASE_DIR/error.php");
    exit;
} 
if(!$script_data{"script_id"}){
    $msg = "script_add_version: I couldn't find the script you requested (script_id=$script_id), are you sure exists?";
    include("$BASE_DIR/error.php");
    exit;
} 
$recent_version = loadLatestScriptVersion($script_id);
if(mysql_errno()){
    $msg = "script_add_version:" . mysql_error();
    include("$BASE_DIR/error.php");
    exit;
} 

// include the page header
$page_title = "upload new version";
$nav_main = "scripts";
$nav_sub = "script_add_version";
$page_sid = "sid_empty.php";
$page_con = "con_script_add_version.php";

include("framework.php");
?>
