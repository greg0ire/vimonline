<?php
// displays a user's profile

require_once("include/init.inc");
require_once("include/string_utils.inc");

$userId = $HTTP_GET_VARS{"user_id"};
if(!$user_id){
    $msg = "profile: " . "unspecified user_id";
    include("$BASE_DIR/error.php");
    exit;
}
$user = getUserById($userId);
if(!$user->getUserId()){
    $msg = "profile: " . "unknown user id $user_id";
    include("$BASE_DIR/error.php");
    exit;
}

$page_title = "user profile";
$nav_main = "scripts";
$nav_sub = "profile";
$page_sid = "sid_empty.php";
$page_con = "con_profile.php";

include("framework.php");
?>
