<?php
// header for all vim online pages
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
  <link rel="Stylesheet" type="text/css" href="<?=$CSS?>/style.css" >
  <title><?=$page_title?> : vim online</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta name="KEYWORDS" content="Vim, Vi IMproved, text editor, home, documentation, tips, scripts, news">
  <link rel="shortcut icon" type="image/x-icon" href="<?=$IMAGES?>/vim_shortcut.ico">
</head>

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" bgcolor="#ffffff"> 

<!-- HEADER, VIM IMAGE AND BOOK AD -->
<table width="100%" cellpadding="0" cellspacing="0" border="0" bordercolor="red">
  <tr>
    <td colspan="2" class="lightbg"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="5" alt=""></td>
  </tr>
  <tr>
    <td class="lightbg" align="left"><a href="<?=$BASE?>/index.php"><img src="<?=$IMAGES?>/vim_header.gif" border="0" alt="Vim logo"></a></td>
    <td class="lightbg" align="right"><a href="http://iccf-holland.org/click5.html"><img src="<?=$IMAGES?>/buyhelplearn.gif" alt="Vim Book Ad" border="0"></a></td>
  </tr>
  <tr>
    <td colspan="2" class="lightbg"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="5" alt=""></td>
  </tr>
  <tr>
    <td colspan="2" class="darkbg"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="10" alt=""></td>
  </tr>
</table>
<!-- THE PAGE BODY: BETWEEN HEADER AND FOOTER -->

<table cellpadding="0" cellspacing="0" border="0" width="100%">
  <col width="180">
  <col width="1">

  <tr valign="top">
    <td class="sidebar">
      <table width="180" cellpadding="4" cellspacing="0" border="0">
        <tr valign="top">
          <td class="sidebar">

<!-- INCLUDE THE PAGE NAVIGATION -->
<?php
require("$BASE_DIR/navigation.php");
?>

            <table width="172" cellpadding="0" cellspacing="0" border="0">
              <tr><td><img src="<?=$IMAGES?>/spacer.gif" alt="" border="0" width="1" height="8"></td></tr>
              <tr><td class="darkbg"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="3" alt=""></td></tr>
            </table>
            <br>

<!-- INCLUDE THE PAGE SIDEBAR TEXT -->
<?php
if(!$page_sid){
    $page_sid = $BASE_DIR . "/sid_empty.php";
}
include($page_sid);
?>

          </td>
        </tr>
      </table>
    </td>

    <td class="checker"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="1" border="0" alt=""><br></td>
    <td>
      <table width="100%" cellpadding="10" cellspacing="0" border="0" bordercolor="red">
        <tr>
          <td valign="top">

