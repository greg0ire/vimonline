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
  <link rel="shortcut icon" type="image/x-icon" href="images/vim_shortcut.ico">
</head>

<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" bgcolor="#ffffff"> 

<table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td colspan="7" class="lightbg"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="5" alt=""></td>
  </tr>
  <tr>
    <td rowspan="2" class="lightbg"><img src="<?=$IMAGES?>/spacer.gif" width="5" height="1" alt=""></td>
    <td class="lightbg" align="left" width="125"><a href="<?=$BASE?>/index.php"><img src="<?=$IMAGES?>/vim.gif" border="0" alt="Vim logo" width="125" height="60"></a></td>
    <td rowspan="2" class="lightbg"><img src="<?=$IMAGES?>/spacer.gif" width="10" height="1" alt=""></td>
    <td valign="middle" class="lightbg" align="center">
	<a href="<?=$BASE?>/huh.php"><img src="<?=$IMAGES?>/vimonline.gif" border="0" alt="vim online"></a>
    </td>
    <td rowspan="2" class="lightbg"><img src="<?=$IMAGES?>/spacer.gif" width="10" height="1" alt=""></td>
    <td class="lightbg" align="right" width="125"><a href="http://iccf-holland.org/click5.html"><img src="<?=$IMAGES?>/book_ad2.gif" alt="Vim Book Ad" border="0" width="87" height="52"></a></td>
    <td rowspan="2" class="lightbg"><img src="<?=$IMAGES?>/spacer.gif" width="5" height="1" alt=""></td>
  </tr>
  <tr>
    <td class="lightbg" ><img src="<?=$IMAGES?>/spacer.gif" width="1" height="5" alt=""></td>
    <td class="lightbg" ><img src="<?=$IMAGES?>/spacer.gif" width="1" height="5" alt=""></td>
    <td class="lightbg" ><img src="<?=$IMAGES?>/spacer.gif" width="1" height="5" alt=""></td>
  </tr>
  <tr>
    <td colspan="7" class="darkbg"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="10" alt=""></td>
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
            <br>

<!-- INCLUDE THE PAGE NAVIGATION -->
<?php
require("$BASE_DIR/navigation.php");
?>

            <br>
            <p>
            <table width="172" cellpadding="0" cellspacing="0" border="0">
              <tr><td class="darkbg"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="10" alt=""></td></tr>
            </table>
            <br>

<!-- INCLUDE THE PAGE SIDEBAR TEXT -->
<?php
include($page_sid);
?>

          </td>
        </tr>
      </table>
    </td>

    <td class="checker"><img src="<?=$IMAGES?>/spacer.gif" width="1" height="1" border="0" alt=""><br></td>
    <td>
      <table cellpadding="10" cellspacing="0">
        <tr>
          <td valign="top">

