<table cellpadding="0" cellspacing="0" border="0" width="90%">
<tr>
<td align="left"><span class="sidebarheader">
<?php
if ($nav_main == "home") {
?>
Home
<?php
} else {
?>
<a href="<?=$BASE?>/index.php">Home</a>
<?php
}
?>
</span></td>
<td align="right"><span class="sidebarheader">
<?php
if ($nav_main == "search") {
?>
Search
<?php
} else {
?>
<a href="<?=$BASE?>/search.php">Search</a>
<?php
}
?>
</span></td>
</tr>
</table>
<?php
if ($nav_main == "home" || $nav_main == "search" || $nav_main == "about") {
?>
<br>
<?php
}
?>


<?php
if ($nav_sub == "about") {
?>
<span class="sidebarheader">About Vim</span>
<?php
} else {
?>
<span class="sidebarheader"><a href="<?=$BASE?>/about.php">About Vim</a></span>
<?php
}
?>
<br>
<?php
if ($nav_main == "about") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">
<?php
if ($nav_sub == "6kbyte") {
?>
in 6 Kbyte
<?php
} else {
?>
<a href="<?=$BASE?>/6kbyte.php">in 6 Kbyte</a>
<?php
}
?>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">
<?php
if ($nav_sub == "viusers") {
?>
for Vi users
<?php
} else {
?>
<a href="<?=$BASE?>/viusers.php">for Vi users</a>
<?php
}
?>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">
<?php
if ($nav_sub == "vim5users") {
?>
for Vim 5 users
<?php
} else {
?>
<a href="<?=$BASE?>/vim5users.php">for Vim 5 users</a>
<?php
}
?>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">
<?php
if ($nav_sub == "others") {
?>
for others
<?php
} else {
?>
<a href="<?=$BASE?>/others.php">for others</a>
<?php
}
?>
</span>
<br>
<br>
<?php
}
?>


<?php
if ($nav_main == "community") {
?>
<br>
<?php
}
?>
<?php
if ($nav_sub == "community") {
?>
<span class="sidebarheader">Community</span>
<?php
} else {
?>
<span class="sidebarheader"><a href="<?=$BASE?>/community.php">Community</a></span>
<?php
}
?>
<br>
<?php
if ($nav_main == "community") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">
<?php
if ($nav_sub == "maillist") {
?>
Mailing Lists
<?php
} else {
?>
<a href="<?=$BASE?>/maillist.php">Mailing Lists</a>
<?php
}
?>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">
<?php
if ($nav_sub == "web") {
?>
Web Pages
<?php
} else {
?>
<a href="<?=$BASE?>/web.php">Web Pages</a>
<?php
}
?>
</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">
<?php
if ($nav_sub == "thanks") {
?>
Credits
<?php
} else {
?>
<a href="<?=$BASE?>/thanks.php">Credits</a>
<?php
}
?>
</span>
<br>
<br>
<?php
}
?>


<?php
if ($nav_main == "docs") {
?>
<br>
<span class="sidebarheader">Documentation</span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl">help files online &gt;&gt;</a></span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="http://iccf-holland.org/click5.html">the book &gt;&gt;</a></span>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="http://vimdoc.sourceforge.net/cgi-bin/vimfaq2html3.pl">the FAQ &gt;&gt;</a></span>
<br>
<?php
} else {
?>
<span class="sidebarheader"><a href="<?=$BASE?>/docs.php">Documentation</a></span>
<?php
}
?>
<br>


<?php
if ($nav_main == "download") {
?>
<br>
<?php
}
?>
<?php
if ($nav_sub == "download") {
?>
<span class="sidebarheader">Download</span>
<?php
} else {
?>
<span class="sidebarheader"><a href="<?=$BASE?>/download.php">Download</a></span>
<?php
}
?>
<br>
<?php
if ($nav_main == "download") {
?>
<?php
if ($nav_sub == "mirrors") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">List of Mirrors</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/mirrors.php">List of Mirrors</a></span>
<?php
}
?>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="ftp://ftp.vim.org/pub/vim/">Vim ftp site &gt;&gt;</a></span>
<br>
<?php
if ($nav_sub == "cvs") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Vim from CVS</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href='<?=$BASE?>/cvs.php'>Vim from CVS</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "scriptlinks") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Script links</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href='<?=$BASE?>/vimscriptlinks.php'>Script links</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "runtime") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Runtime files</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href='<?=$BASE?>/runtime.php'>Runtime files</a></span>
<?php
}
?>
<br>
<br>
<?php
}
?>


<?php
if ($nav_main == "news") {
?>
<br>
<?php
}
?>
<?php
if ($nav_sub == "news") {
?>
<span class="sidebarheader">News</span>
<?php
} else {
?>
<span class="sidebarheader"><a href="<?=$BASE?>/news/news.php">News</a></span>
<?php
}
?>
<br>
<?php
if ($nav_main == "news") {
?>
<br>
<?php
}
?>

<?php
if ($nav_main == "scripts" || $nav_main == "tips" || $nav_main == "account") {
?>
<br>
<?php
}
?>
<span class="sidebarheader">
<?php
if ($nav_sub == "scripts") {
?>
Scripts
<?php
} else {
?>
<a href="<?=$BASE?>/scripts/index.php">Scripts</a>
<?php
}
?>
&nbsp;&nbsp;&nbsp;
<?php
if ($nav_sub == "tip_index") {
?>
Tips
<?php
} else {
?>
<a href="<?=$BASE?>/tips/index.php">Tips</a>
<?php
}
?>
</span>
<br>
<?php
if ($nav_main == "scripts" && $nav_sub != "huh" && $nav_sub != "karma") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="script_search.php?order_by=creation_date&direction=descending">Browse all scripts</a></span>
<br>
<?php
if ($nav_sub == "script_add") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Add script</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/scripts/add_script.php">Add script</a></span>
<?php
}
?>
<br>
<?php
}
?>
<?php
if ($nav_main == "tips") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="tip_search.php">Browse all tips</a></span>
<br>
<?php
if ($nav_sub == "tip_download") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Download all tips</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="tip_download.php">Download all tips</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "tip_add") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Add tip</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="tip_add.php">Add tip</a></span>
<?php
}
?>
<br>
<?php
}
?>
<?php
if ($nav_main == "scripts" || $nav_main == "tips" || $nav_main == "account") {
?>
<?php
if ($nav_sub == "huh") {
?>
&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Huh?</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/huh.php">Huh?</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "karma") {
?>
&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Karma</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/karma.php">Karma</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "account") {
?>
&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Account</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/account/index.php">Account</a></span>
<?php
}
?>
<br>
<?php
if ($nav_main == "account" && $nav_sub != "register" && $nav_sub != "login") {
?>
<?php
if ($nav_sub == "account_passwd") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Change password</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/account/change_passwd.php">Change password</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "account_edit") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Edit info</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/account/edit_account.php">Edit info</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "logout") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">Logout</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$BASE?>/logout.php">Logout</a></span>
<?php
}
?>
<br>
<?php
}
?>
<br>
<?php
}
?>


<?php
if ($nav_main == "trivia") {
?>
<br>
<?php
}
?>
<?php
if ($nav_sub == "trivia") {
?>
<span class="sidebarheader">Trivia</span>
<?php
} else {
?>
<span class="sidebarheader"><a href="<?=$BASE?>/trivia.php">Trivia</a></span>
<?php
}
?>
<br>
<?php
if ($nav_main == "trivia") {
?>
<?php
if ($nav_sub == "logos") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">logos</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="logos.php">logos</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "buttons") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">buttons</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="buttons.php">buttons</a></span>
<?php
}
?>
<br>
<?php
if ($nav_sub == "weird") {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader">weird stuff</span>
<?php
} else {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="weird.php">weird stuff</a></span>
<?php
}
?>
<?php
}
?>
