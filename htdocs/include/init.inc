<?php

$INCLUDE_DIR = realpath(dirname(__FILE__));
$BASE_DIR = realpath($INCLUDE_DIR . "/..");
require("$INCLUDE_DIR/site-config.inc");
$CSS = $BASE . "/css";
$IMAGES = $BASE . "/images";
$INCLUDE = $BASE . "/include";

$sessionIdCookie;


require("$INCLUDE_DIR/database.inc");
require("$INCLUDE_DIR/user.inc");
require("$INCLUDE_DIR/session.inc");
//set_magic_quotes_runtime(0);

db_connect();
?>
