<?php
/* 
 This is the initialization file for vim online.
 It should be required once (require_once) at the top of all vim online pages.
 It does some common setup and includes the site configuration

 Proceed carefully if you are mucking around in hear, most of the site
 relies on this.
*/

$INCLUDE_DIR = realpath(dirname(__FILE__));
$BASE_DIR = realpath($INCLUDE_DIR . "/..");
require("$INCLUDE_DIR/site-config.inc");

$CSS = $BASE . "/css";
$IMAGES = $BASE . "/images";
$INCLUDE = $BASE . "/include";

$sessionIdCookie;

require_once("$INCLUDE_DIR/database.inc");
require_once("$INCLUDE_DIR/user.inc");
require_once("$INCLUDE_DIR/session.inc");

db_connect();
?>
