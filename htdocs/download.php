<?php
require("include/init.inc");
require("include/string_utils.inc");
require("scripts/include/script.inc");
require("news/include/news.inc");

# include the page header
$page_title = "download";
include("header.php");
?>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
 <tr>
    <td class="sidebar"><img src="images/spacer.gif" width="150" height="1" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td width="2000"><img src="images/spacer.gif" width="150" height="1" alt=""></td>
    <td><img src="images/spacer.gif" width="1" height="1" alt=""></td>
    <td class="sidebar"><img src="images/spacer.gif" width="150" height="1" alt=""></td>
    <td><img src="images/spacer.gif" width="" height="1" alt=""></td>
 </tr>
 <tr valign="top">
  <td class="sidebar">
   <table width="170" cellpadding="4" cellspacing="0" border="0">
    <tr valign="top">
     <td class="sidebar">
<br>

<span class="sidebarheader"><a href="whyvim.php">Why use Vim 6?</a></span>
<p>
&nbsp; <a href="whyvim.php#vim5">When using Vim 5</a><BR>
&nbsp; <a href="whyvim.php#vi">When using Vi</a><BR>
&nbsp; <a href="whyvim.php#others">Otherwise</a><BR>
</p>

<span class="sidebarheader">Downloading</span>
<p>
&nbsp; What to download<BR>
&nbsp; <a href="ftp://ftp.vim.org/pub/vim/MIRRORS">List of Mirrors</a><BR>
&nbsp; <a href="ftp://ftp.vim.org/pub/vim/unreleased">Vim 5 ftp site</a><BR>
&nbsp; <a href="ftp://ftp.vim.org/pub/vim/unreleased">Vim 6 ftp site</a><BR>
</p>

<span class="sidebarheader">Note</span>
<p>
Vim 6.0 is currently in a beta testing phase.  Although many people are
already using it and it appears to work quite well, the usual disclaimers
apply.  If you find a problem, please report it to bugs@vim.org.
</p>

</td>
</tr>

<tr valign="bottom">
<td valign="bottom">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- Begin Nedstat Basic code -->
<!-- Title: download : vim online -->
<!-- URL: http://vim.sf.net/download.php -->
<script language="JavaScript" src="http://m1.nedstatbasic.net/basic.js">
</script>
<script language="JavaScript">
<!--
  nedstatbasic("ABEqAwBBAqxA3iy+as9N55DpJWlg", 0);
// -->
</script>
<noscript>
<a target="_blank" href="http://v1.nedstatbasic.net/stats?ABEqAwBBAqxA3iy+as9N55DpJWlg"><img
src="http://m1.nedstatbasic.net/n?id=ABEqAwBBAqxA3iy+as9N55DpJWlg"
border="0" nosave width="18" height="18"></a>
</noscript>
<!-- End Nedstat Basic code -->
page stats

</td>
</tr>

</table>
  </td>
  <td bgcolor="#666666" background="images/checkerboard.gif"><img src="/images/spacer.gif" width="1" height="1" border="0" alt=""><br></td>
  <td>
   <table width="100%" cellpadding="10" cellspacing="0">
    <tr>
     <td valign="top">
<A NAME="top"></A>
<h1>Downloading Vim</h1>

Vim is available for many different systems and there are several versions.
This page will help you decide what to download.
<ul>
	<li>
	<A HREF="#unix">Unix</A>
	</li>
	<li>
	<A HREF="#pc">PC: MS-DOS and MS-Windows</A>
	</li>
	<li>
	<A HREF="#amiga">Amiga</A>
	</li>
	<li>
	<A HREF="#os2">OS/2</A>
	</li>
	<li>
	<A HREF="#others">Others</A>
	</li>
	<li>
	<A HREF="#patches">Patches</A>
	</li>
</ul>
<p>
Vim 5.8 is the latest stable version.  Use this for your daily work.  Vim 6 is
still under development.  Although it appears to work well for most people, it
still needs some more testing before it can be called "stable".  It does
include a lot of attractive features though.
<p>
To avoid having to update this page for every new version, there are only
links to the directories.  From there select the files you want to download.
In the file names ## stands for the version number.  For example,
<b>vim##src.zip</b>
with version 6.0ap is <b>vim60apsrc.zip</b> and
<b>vim-##-src.tar.gz</b> for version 6.0ap
is <b>vim-6.0ap-src.tar.gz</b>.

<hr noshade size="1" color="#000000">

<A NAME="unix"></A>
<h1>Unix</h1>
The best way to install Vim on Unix is to use the sources.  This requires a
compiler and its support files.  Compiling Vim isn't difficult at all.
You can simply type "make install" when you are happy with the default
features.  Edit the Makefile in the "src" directory to select specific
features.
<p>
You need to download at least the sources and the runtime files.  Optionally
you can get the "lang" archive, which adds translated messages and menus (only
for Vim 6).
<dl>
<dt><b>version 5.x</b></dt>
<dd>
There are two files you should both get from
<A HREF="ftp://ftp.vim.org/pub/vim/unix">this directory</A>:
	<table cellpadding="4" border="0">
	<tr>
	<td>vim-##-rt.tar.gz</td> <td>The runtime files.</td>
	</tr>
	<tr>
	<td>vim-##-src.tar.gz</td> <td>The source files.</td>
	</tr>
	</table>
</dd>
<dt><b>version 6.x</b></dt>
<dd>
You have a choice: Either get the one big archive <b>or</b> get four smaller
ones (that each fit on a floppy disk).  They are all in
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/unix">this directory</A>:
	<table cellpadding="4" border="0">
	<tr>
	<td>vim-##.tar.bz2</td> <td>The runtime and source files together.</td>
	</tr>
	<tr>
	<td>vim-##-rt1.tar.gz</td> <td>The runtime files part 1.</td>
	</tr>
	<tr>
	<td>vim-##-rt2.tar.gz</td> <td>The runtime files part 2.</td>
	</tr>
	<tr>
	<td>vim-##-src1.tar.gz</td><td>The source files part 1.</td>
	</tr>
	<tr>
	<td>vim-##-src2.tar.gz</td> <td>The source files part 2.</td>
	</tr>
	</table>
If you would like to use translated messages and menus, get an additional
archive from
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/extra">this directory</A>:
	<table cellpadding="4" border="0">
	<tr>
	<td>vim-##-lang.tar.gz</td> <td>The language files.</td>
	</tr>
	</table>
</dd>
</dl>
The files ending in ".tar.gz" are tar archives which are compressed with gzip.
Unpack them with "tar -xzf {fname}".
<br>
The single big file ending in ".tar.bz2" is a tar archive compressed with
bzip2.  First uncompress it with "bunzip2 {file}".  Then unpack with "tar xf
{file}".<br>
All archives should be unpacked in the same directory.
<p>
If you can't compile yourself or don't want to, look at the site of the
supplier of your Unix version for a packaged Vim executable.  For Linux
distributions and FreeBSD these are often available shortly after a new Vim
version has been released.  But you can't change the features then.

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="pc"></A>
<h1>PC: MS-DOS and MS-Windows</h1>
Since there are so many different versions of MS operating systems, there are
several versions of Vim for them.
<br>For Vim 5.x look in 
<A HREF="ftp://ftp.vim.org/pub/vim/pc">this directory</A>.
<br>For Vim 6 look in 
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/pc">this directory</A>.
<dl>
<dt>gvim##.exe</dt>
<dd>
For Vim 6 there is a self-installing executable.  This includes a GUI version
of Vim with many features and OLE support.  Use this if you have enough disk
space and memory.  It's the simplest way to start using Vim on the PC.  It
works well on MS-Windows 95/98/ME/NT/2000/XP.
</dd>
</dl>
<dl>
<dt>vim##rt.zip</dt>
<dd>
For all the following binary versions you need this runtime archive, which
includes the documentation, syntax files, etc.  Always get this, unless you
use the self-installing executable.
</dd>
</dl>
<p>
There are three versions that run as an MS-Windows application.  These provide
menus, scrollbars and a toolbar.
<dl>
<dt>gvim##.zip</dt>
<dd>
This is the "normal" GUI version.
</dd>
<dt>gvim##ole.zip</dt>
<dd>
A GUI version with OLE support.  This offers a few extra features,
such as integration with Visual Developer Studio.  But it uses quite a bit
more memory.
</dd>
<dt>gvim##_s.zip</dt>
<dd>
GUI version for Windows 3.1 with win32s support.
</dd>
</dl>
There are three versions that run on MS-DOS or in a console window in
MS-Windows:
<dl>
<dt>vim##d16.zip</dt>
<dd>
The 16 bit DOS version is the only one that runs on old MS-DOS systems.  Only
use this if you are really desparate, because it excludes many useful features
(such as syntax highlighting and long file names) and quickly runs out of
memory.
</dd>
<dt>vim##d32.zip</dt>
<dd>
The 32 bit DOS version works well on MS-Windows 95/98/ME.  It requires a DPMI
manager, which needs to be installed on MS-DOS.  MS-Windows already has one.
It supports long file names, but NOT on MS-Windows NT/2000/XP.  It is compiled
with "big" features.
</dd>
<dt>vim##w32.zip</dt>
<dd>
The Win32 console version works well on MS-Windows NT/2000/XP.  It supports
long file names and is compiled with "big" features.  It does not run
perfectly well on MS-Windows 95/98/ME, especially when resizing the console
window (this may crash MS-Windows...).
</dd>
</dl>
There are a few extra files:
<dl>
<dt>vim##src.zip</dt>
<dd>
The source files, packed for the PC.  This only includes the files needed on
the PC, not for other systems.  The files are in dos format CR-LF.
</dd>
<dt>vim##lang.zip</dt>
<dd>
Translated messages and menu files, packed for the PC.  Use this to see
non-English menus.  The messages are only translated when the libintl.dll
library is installed (see the included README file).
</dd>
<dt>gvim##w16.zip and gvim##m16.zip</dt>
<dd>
These are GUI versions for 16 bit windows (Windows 3.1).  The "w16" has many
features, "m16" has few features (for when you're short on memory).
</dd>
</dl>
The files ending in ".zip" can be unpacked with any unzip program.
Make sure you do this in the same directory!

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="amiga"></A>
<h1>Amiga</h1>
Quite a long time ago, Vim development started on the Amiga.  Although it's a
really old system now, it is still supported (for as long as my system doesn't
break down!).
<p>
For Vim 5.x look in 
<A HREF="ftp://ftp.vim.org/pub/vim/amiga">this directory</A>.
<br>For Vim 6 look in 
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/amiga">this directory</A>.
<dl>
<dt>vim##rt.tgz</dt>
<dd>
The runtime files: Documentation, syntax files, etc.  You always need this.
</dd>
<dt>vim##bin.tgz</dt>
<dd>
The executable files.  For Vim 6 it includes "big" features, for Vim 5.x it
includes the normal features.
</dd>
<dt>vim##big.tgz</dt>
<dd>
The executable files with "big" features.  Only for Vim 5.x.
</dd>
<dt>vim##src.tgz</dt>
<dd>
The source files for the Amiga.  Only needed when you want to compile Vim
yourself.
</dd>
</dl>
The files are all tar archives, compressed with gzip.  To unpack, first
uncompress them with "gzip -d {file}".  Then unpack with "tar xf {file}".  You
need to unpack the archives in the same directory.

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="os2"></A>
<h1>OS/2</h1>
The OS/2 version runs in a console window.
<p>
For Vim 5.x look in 
<A HREF="ftp://ftp.vim.org/pub/vim/os2">this directory</A>.
<br>For Vim 6 look in 
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/os2">this directory</A>.
<dl>
<dt>vim##rt.zip</dt>
<dd>
The runtime files: documentation, syntax files, etc.  You always need this.
</dd>
<dt>vim##os2.zip</dt>
<dd>
The executables.
</dd>
</dl>
The files ending in ".zip" can be unpacked with any unzip program.
Make sure you do this in the same directory!
<p>
If you want to compile the OS/2 version, you need the EMX compiler.  Use the
Unix source archive, runtime files and the extra archive.  After unpacking the
runtime archive, move all the files and directories  in the "runtime"
directory one level up.

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="others"></A>
<h1>Others</h1>
If you want to join in and help developing Vim, you may want to get all the
original files.  These are also used to compile Vim for systems not mentioned
above.  You need to get these files:
<dl>
<dt>vim-##-src.tar.gz</dt>
<dd>
The Unix source files.  For Vim 5.x it is
<A HREF="ftp://ftp.vim.org/pub/vim/unix">here</A>.
For Vim 6 there are two parts.  You can find them
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/unix">here</A>.
You may instead want to get the single big archive that includes both the
source and runtime files.
</dd>
<dt>vim-##-rt.tar.gz</dt>
<dd>
The Unix runtime files.  For Vim 5.x it is
<A HREF="ftp://ftp.vim.org/pub/vim/unix">here</A>.
For Vim 6 there are two parts.  You can find them
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/unix">here</A>.
</dd>
<dt>vim-##-extra.tar.gz</dt>
<dd>
The extra archive.  This contains source and runtime files that are not used
on Unix.
For Vim 5.x it is
<A HREF="ftp://ftp.vim.org/pub/vim/extra">here</A>.
For Vim 6 you can find it
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/extra">here</A>.
</dd>
<dt>vim-##-lang.tar.gz</dt>
<dd>
This contains translated messages and menu files.
Only for Vim 6, you can find it
<A HREF="ftp://ftp.vim.org/pub/vim/unreleased/extra">here</A>.
</dd>
</dl>

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="patches"></A>
<h1>Patches</h1>
For released versions patches are made available.  These fix small or big
problems.  Only souce code patches are provided.
<p>
The patches for vim 5.x are
<A HREF="ftp://ftp.vim.org/pub/vim/patches">here</A>.  An overview of what
each patch solves is in the
<A HREF="ftp://ftp.vim.org/pub/vim/patches/README">README file</A>.
There are no patches for Vim 6 yet.
<p>
To apply a patch, you must get the sources, go to the directory where the
"src" directory is located and apply the patch with "patch &lt; {patchfile}".

<p>
<A HREF="#top">TOP</A>

</td>
    </tr>
    </table>

    </td>

</tr>
</table>


<?php
include("footer.php");
?>
