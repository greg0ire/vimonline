<?php
// Vim ftp mirrors
require_once("include/init.inc");
$page_title = "ftp mirrors";

include("header.php");
?>
<PRE>-- VIM Distribution Sites --

Vim can be found at:
  <a href="ftp://ftp.home.vim.org/pub/vim/">ftp://ftp.home.vim.org/pub/vim/</a>                       Holland, Amsterdam

Mirrors (working):
  <a href="ftp://ftp.vim.org/pub/vim/">ftp://ftp.vim.org/pub/vim/</a>                            Holland, Amsterdam
  <a href="ftp://ftp.us.vim.org/pub/vim/">ftp://ftp.us.vim.org/pub/vim/</a>                         USA, California
  <a href="ftp://ftp2.us.vim.org/pub/vim/">ftp://ftp2.us.vim.org/pub/vim/</a>                        USA, Hoboken, NJ
  <a href="ftp://ftp3.us.vim.org/pub/mirrors/ftp.vim.org/vim/">ftp://ftp3.us.vim.org/pub/mirrors/ftp.vim.org/vim/</a>    USA, Michigan?
x <a href="ftp://ftp9.us.vim.org/pub/editors/vim/">ftp://ftp9.us.vim.org/pub/editors/vim/</a>                USA, New York
  <a href="ftp://ftp.parodius.com/pub/vim/">ftp://ftp.parodius.com/pub/vim/</a>                       USA, Fremont
  <a href="ftp://ftp.nl.vim.org/pub/vim/">ftp://ftp.nl.vim.org/pub/vim/</a>                         Holland, Amsterdam
  <a href="ftp://ftp.de.vim.org/">ftp://ftp.de.vim.org/</a>                                 Germany, Berlin
  <a href="ftp://ftp3.de.vim.org/pub/vim/">ftp://ftp3.de.vim.org/pub/vim/</a>                        Germany, Oldenburg
  <a href="ftp://ftp.uk.vim.org/pub/vim/">ftp://ftp.uk.vim.org/pub/vim/</a>                         England, London
  <a href="ftp://ftp.ie.vim.org/pub/vim/">ftp://ftp.ie.vim.org/pub/vim/</a>                         Ireland, Dublin
  <a href="ftp://ftp.fr.vim.org/pub/vim/">ftp://ftp.fr.vim.org/pub/vim/</a>                         France, Gif sur Yvette
  <a href="ftp://ftp2.fr.vim.org/pub/Mirrors/vim/">ftp://ftp2.fr.vim.org/pub/Mirrors/vim/</a>                France, Paris
  <a href="ftp://ftp.it.vim.org/pub/vim">ftp://ftp.it.vim.org/pub/vim</a>                          Italy, Pistoia
  <a href="ftp://ftp.at.vim.org/pub/vim/">ftp://ftp.at.vim.org/pub/vim/</a>                         Austria, Vienna
  <a href="ftp://ftp.dk.vim.org/pub/vim/">ftp://ftp.dk.vim.org/pub/vim/</a>                         Denmark, Copenhagen
  <a href="ftp://ftp.se.vim.org/pub/mirrors/vim/">ftp://ftp.se.vim.org/pub/mirrors/vim/</a>                 Sweden, Borlange
  <a href="ftp://ftp.is.vim.org/pub/vim/">ftp://ftp.is.vim.org/pub/vim/</a>                         Iceland
  <a href="ftp://ftp.il.vim.org/pub/vim/">ftp://ftp.il.vim.org/pub/vim/</a>                         Israel, Haifa
+ <a href="ftp://ftp.pl.vim.org/pub/vim/">ftp://ftp.pl.vim.org/pub/vim/</a>                         Poland, Warsaw
  <a href="ftp://ftp.ro.vim.org/pub/vim">ftp://ftp.ro.vim.org/pub/vim</a>                          Romania, Iasi

Mirrors which lag behind about a week:
Mirrors which lag behind several weeks:

Mirrors which are currently not working:
? <a href="ftp://ftp4.us.vim.org/mirrors/ftp/ftp.home.vim.org/pub/vim">ftp://ftp4.us.vim.org/mirrors/ftp/ftp.home.vim.org/pub/vim</a>   USA, Illinois
? <a href="ftp://ftp2.de.vim.org/pub/vim/">ftp://ftp2.de.vim.org/pub/vim/</a>                        Germany, Frankfurt
? <a href="ftp://ftp2.uk.vim.org/pub/vim">ftp://ftp2.uk.vim.org/pub/vim</a>                         England, London
? <a href="ftp://ftp.ca.vim.org/pub/vim/">ftp://ftp.ca.vim.org/pub/vim/</a>                         Canada, Ontario
? <a href="ftp://ftp.mx.vim.org/pub/vim/">ftp://ftp.mx.vim.org/pub/vim/</a>                         Mexico
? <a href="ftp://ftp.hu.vim.org/pub/vim/">ftp://ftp.hu.vim.org/pub/vim/</a>                         Hungary, Miskolc
? <a href="ftp://ftp.au.vim.org/pub/vim/">ftp://ftp.au.vim.org/pub/vim/</a>                         Australia, Sydney
- <a href="ftp://ftp.tw.vim.org/UNIX/vim/">ftp://ftp.tw.vim.org/UNIX/vim/</a>                        Taiwan, HsinChu
? <a href="ftp://ftp.jp.vim.org/pub/vim/">ftp://ftp.jp.vim.org/pub/vim/</a>                         Japan, Tokyo
? <a href="ftp://ftp.freesoftware.com/pub/vim/">ftp://ftp.freesoftware.com/pub/vim/</a>                   USA, San Francisco
? <a href="ftp://ftp.za.vim.org/applications/editors/vim/">ftp://ftp.za.vim.org/applications/editors/vim/</a>        South Africa

        ? Might not always work
        + Also keeps older versions
        - Not up to date
        x Some files are compressed to .gz

You can get the most recent (patched) version through CVS.  See:
        <a href="http://www.vim.org/cvs.php">http://www.vim.org/cvs.php</a>

A mailserver is present at &lt;Ftpmail@Informatik.Uni-Oldenburg.DE&gt;.  Send it a
message with "help" as the Subject and it will tell you how to use it.  Use
commands like "CD /pub/vim" and "GET unix/vim-5.7-rt.tar.gz".  It is slow, use
ftp if you can.

If you set up a mirror:
- always mirror from <a href="ftp://ftp.home.vim.org/pub/vim/">ftp://ftp.home.vim.org/pub/vim/</a>
- please use the "/pub/vim" directory, so we can make an alias
  "ftp.&lt;country&gt;.vim.org/pub/vim"
- send a message to Bram@vim.org to get an entry in this list and an
  ftp.&lt;country&gt;.vim.org alias

If you see an error in this file, please report it to Bram Moolenaar
(Bram AT vim.org).                                         vim: set et:
</PRE>
<?php
include("footer.php");
?>
