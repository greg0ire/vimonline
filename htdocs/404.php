<?php
/*
 * 404 errorDocument page.
 * 
 * Author: Sylvain Viart (viart@users.sf.net)
 * Date: Wed Jun  6 07:46:32 PDT 2001
 * Modified: [by user] [date]
 * Description: Handle 404 http error, and redirect to vim online if the
 *              document was about the VUR which will be removed.
 */

	$page = "$HTTP_SERVER_VARS[REQUEST_URI]";
	$match_VUR = ereg('^/(VUR|vim_depot)', $page);

	$redirect = "http://vim.sf.net/";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
  <TITLE>Vim online - Page not found</TITLE>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<?php
	// automatic redirect if the page was about the VUR.
	if($match_VUR)
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"12; URL=$redirect\">\n";
?>
</HEAD>
<BODY BGCOLOR="#FFFFFF">
<h2>404 document not found</h2>
<?php
	
	if(!$match_VUR)
	{
		echo "<BLOCKQUOTE><TT>$page</TT></BLOCKQUOTE>\n";
		echo "doesn't exist.\n";
	}
	else
	{
		echo "The VUR has merged with vim online.\n";
	}
?>
<P>
Try vim online at <a href="http://vim.sf.net/">http://vim.sourceforge.net/</a>.
</BODY>
</HTML>
<!-- vim: set ts=3 sts=3 sw=3: -->
