<?php
// Communicating about Vim
require_once("include/init.inc");

$page_title = "community";
$nav_main = "community";
$nav_sub = "community";
$page_sid = "sid_empty.php";

include("header.php");
?>
<h1>The Vim Community</h1>
<p>
Some people say that vi users are a rabid pack of fanatical lunatics.
We prefer to think of ourselves as community of users who have found a
piece of software that perfectly meets our needs.  We like to help our
fellow users whenever we can.
</p>

<h1>Mailing Lists</h1>

<p>
There are several "official" mailing lists for vim support.  Please
note that to post on these lists, <strong>you must be a
member</strong>.  To subscribe, send an empty message to
[list-name]-subscribe@vim.org.
</p>

<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th>address</th>
    <th>description</th>
  </tr>
  <tr class='rowodd'>
    <td><a href="maillist.php#announce">vim-announce@vim.org</a></td>
    <td>Announcements only: new releases and important patches</td>
  </tr>
  <tr class='roweven'>
    <td><a href="maillist.php#vim">vim@vim.org</a></td>
    <td>Help on vim and vim usage</td>
  </tr>
  <tr class='rowodd'>
    <td><a href="maillist.php#vim-dev">vim-dev@vim.org</a></td>
    <td>Discussion on current vim development</td>
  </tr>
  <tr class='roweven'>
    <td><a href="maillist.php#vim-mac">vim-mac@vim.org</a></td>
    <td>Vim development discussion specific to mac</td>
  </tr>
  <tr class='rowodd'>
    <td><a href="maillist.php#vim-multibyte">vim-multibyte@vim.org</a></td>
    <td>Vim development discussion specific to multibyte support</td>
  </tr>
</table>

<p>
Quoting Leonid Mamtchenkov: "Until now I thought only that the Vim mailing list
was very informative and fast-responding.  Now I also think that it is one of
the kindest I've came across. :)  Thumbs up!"
</p>

<p>
Plenty of other groups and mailing lists exist, and are described more
fully on <a href='maillist.php'>their own page</a>.
</p>

<h1>IRC Channels</h1>
<p>
If mailing lists don't provide the quick reply and razor wit you need,
you can look for Vim users on IRC at these networks:
</p>
<table cellpadding="2" cellspacing="2" border="0">
  <tr class='tableheader'>
    <th>network</th>
    <th>common server</th>
    <th>channel</th>
  </tr>
  <tr class='rowodd'>
    <td>freenode</td>
    <td>irc.freenode.net</td>
    <td>#vim</td>
  </tr>
  <tr class='roweven'>
    <td>IRCnet</td>
    <td>&nbsp;</td>
    <td>#vim</td>
  </tr>
</table>

<h1>USENET Newsgroups</h1>
<p>
Vim is discussed on USENET -- what isn't?  You can find Vim discussion
on comp.editors on your local NNTP server.
</p>

<h1>Web Pages</h1>
<p>
Vim.org might be the official vim web page, but it's hardly the only
one.  There are plenty of them, listed both in
<a href='web.php'>our registry</a> and on
<a href='http://u.webring.com/hub?ring=vim'>the Vim webring</a>.
</p>
<?php
include("footer.php");
?>
