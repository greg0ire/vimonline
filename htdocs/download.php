<?php
// Downloading Vim
require_once("include/init.inc");

$page_title = "download";
$nav_main = "download";
$nav_sub = "download";
$page_sid = "sid_download.php";

include("header.php");
?>
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
	<A HREF="#mac">Macintosh</A>
	</li>
	<li>
	<A HREF="#others">Others</A>
	</li>
	<li>
	<A HREF="#yourself">Do-It-Yourself</A>
	</li>
	<li>
	<A HREF="#patches">Patches</A>
	</li>
</ul>
<p>
Vim 6.1 is the latest stable version.  If you have a problem with it, you
could try version 5.8 or 6.0 instead.
<p>
To avoid having to update this page for every new version, there are
links to the directories.  From there select the files you want to download.
In the file names ## stands for the version number.  For example,
<b>vim##src.zip</b>
with version 6.1 is <b>vim61src.zip</b> and
<b>vim-##-src.tar.gz</b> for version 6.1
is <b>vim-6.1-src.tar.gz</b>.
A few direct links are provided for quick access.

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
<dt><b>Using A-A-P (experimental)</b></dt>
<dd>
A-A-P is a new tool that does all the work of downloading and patching for you.
You download one file, called a recipe, and "aap install" does all the work.
To later update to the latest version of Vim you do not need to download
anything manually, just use the command "aap update".
<p>
The detailed explanation can be found
<a href="http://www.a-a-p.org/ports.html">here</a>.
This is still an experimental method.  Please report problems to Bram AT
a-a-p.org.
</dd>

<dt><b>version 6.x</b></dt>
<dd>
You have a choice: Either get the one big archive <b>OR</b> get four smaller
ones (that each fit on a floppy disk).  They are all in
<A HREF="ftp://ftp.vim.org/pub/vim/unix">the unix directory</A>:
	<table cellpadding="4" border="0">
	<tr>
	<td>The runtime and source files together:</td> <td>vim-##.tar.bz2</td><td><A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1.tar.bz2">vim-6.1.tar.bz2</A></td>
	</tr>
	<tr>
	<td>The runtime files part 1:</td> <td>vim-##-rt1.tar.gz</td><td><A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-rt1.tar.gz">vim-6.1-rt1.tar.gz</A></td>
	</tr>
	<tr>
	<td>The runtime files part 2:</td> <td>vim-##-rt2.tar.gz</td><td><A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-rt2.tar.gz">vim-6.1-rt2.tar.gz</A></td>
	</tr>
	<tr>
	<td>The source files part 1:</td> <td>vim-##-src1.tar.gz</td><td><A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-src1.tar.gz">vim-6.1-src1.tar.gz</A></td>
	</tr>
	<tr>
	<td>The source files part 2.</td> <td>vim-##-src2.tar.gz</td><td><A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-src2.tar.gz">vim-6.1-src2.tar.gz</A></td>
	</tr>
	</table>
If you would like to use translated messages and menus, get an additional
archive from
<A HREF="ftp://ftp.vim.org/pub/vim/extra">the extra directory</A>:
	<table cellpadding="4" border="0">
	<tr>
	<td>The language files.</td> <td>vim-##-lang.tar.gz</td><td><A HREF="ftp://ftp.vim.org/pub/vim/extra/vim-6.1-lang.tar.gz">vim-6.1-lang.tar.gz</A></td>
	</tr>
	</table>
</dd>
<dt><b>version 5.x</b></dt>
<dd>
There are two files you should both get from
<A HREF="ftp://ftp.vim.org/pub/vim/unix">the unix directory</A>:
	<table cellpadding="4" border="0">
	<tr>
	<td>The runtime files:</td> <td>vim-##-rt.tar.gz</td><td><A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-5.8-rt.tar.gz">vim-5.8-rt.tar.gz</A></td>
	</tr>
	<tr>
	<td>The source files:</td> <td>vim-##-src.tar.gz</td><td><A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-5.8-src.tar.gz">vim-5.8-src.tar.gz</A></td>
	</tr>
	</table>
</dd>
</dl>
The files ending in ".tar.gz" are tar archives that are compressed with gzip.
Unpack them with <B>tar -xzf <I>filename</I></B>.
<br>
The single big file ending in ".tar.bz2" is a tar archive compressed with
bzip2.  Uncompress and unpack it with
<B>bunzip2 -c <I>filename</I> | tar -xf -</B>.
<br>
All archives should be unpacked in the same directory.
<p>
If you can't compile yourself or don't want to, look at the site of the
supplier of your Unix version for a packaged Vim executable.  For Linux
distributions and FreeBSD these are often available shortly after a new Vim
version has been released.  But you can't change the features then.
<UL>
<LI>
<B>Red Hat</B> Linux packages are available at:
<A HREF="ftp://ftp.redhat.com/pub/redhat/linux/rawhide/i386/RedHat/RPMS/">7.x RPMS</A>
and <A HREF="ftp://ftp.redhat.com/pub/redhat/linux/current/en/os/i386/RedHat/RPMS">current RPMS</A>.
Search for "vim-".  Go up a few directories for other platforms than i386.
<BR>
More recent but unofficial RPMs for RedHat: <A HREF="http://nirvani.org/software/vim/">http://nirvani.org/software/vim/</A>.
</LI>
<LI>
<B>Debian</B> packages are available at:
<A HREF="http://people.debian.org/~wakkerma/vim/">http://people.debian.org/~wakkerma/vim/</A>.
</LI>
<LI>
<B>IRIX</B> 5.3 and later binary, SoftwareManager installable:
<A HREF="http://pigseye.kennesaw.edu/~dharriso/vim/index.html">http://pigseye.kennesaw.edu/~dharriso/vim/index.html</A>.
</LI>
<LI>
<B>Sun Solaris</B> Vim is included in the Companion Software:
<A HREF="http://wwws.sun.com/software/solaris/freeware/">http://wwws.sun.com/software/solaris/freeware/</A>.
</LI>
<LI>
<B>HPUX</B> with GTK GUI for various HPUX versions:
<A HREF="http://hpux.its.tudelft.nl/hppd/hpux/Editors/vim-6.1/">http://hpux.its.tudelft.nl/hppd/hpux/Editors/vim-6.1/</A>
</LI>
</UL>

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="pc"></A>
<h1>PC: MS-DOS and MS-Windows</h1>
Since there are so many different versions of MS operating systems, there are
several versions of Vim for them.
<br>For Vim 5.x and Vim 6 look in 
<A HREF="ftp://ftp.vim.org/pub/vim/pc">the pc directory</A>.
<dl>
<dt><B>Self-installing executable</B>&nbsp;&nbsp;&nbsp;gvim##.exe &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/gvim61.exe">gvim61.exe</A></dt>
<dd>
For Vim 6 only.  This includes a GUI version
of Vim - with many features and OLE support - and all the runtime files.  Use
this if you have enough disk space and memory.  It's the simplest way to start
using Vim on the PC.  It works well on MS-Windows 95/98/ME/NT/2000/XP.
<BR>
NOTE: Sophos Antivirus 3.58 detects the virus Troj/Momma-B in gvim61.exe, but
this appears to be a false alarm.
</dd>
</dl>
<dl>
<dt><B>Runtime files</B>&nbsp;&nbsp;&nbsp;vim##rt.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/vim61rt.zip">vim61rt.zip</A></dt>
<dd>
For all the following binary versions you need this runtime archive, which
includes the documentation, syntax files, etc.  Always get this, unless you
use the self-installing executable.  (The runtime archive is also available in
two parts that each fit on a floppy disk.)
</dd>
</dl>
<p>
There are three versions that run as an MS-Windows application.  These provide
menus, scrollbars and a toolbar.
<dl>
<dt><B>GUI executable</B>&nbsp;&nbsp;&nbsp;gvim##.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/gvim61.zip">gvim61.zip</A></dt>
<dd>
This is the "normal" GUI version.
</dd>
<dt><B>OLE GUI executable</B>&nbsp;&nbsp;&nbsp;gvim##ole.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/gvim61ole.zip">gvim61ole.zip</A></dt>
<dd>
A GUI version with OLE support.  This offers a few extra features,
such as integration with Visual Developer Studio.  But it uses quite a bit
more memory.
</dd>
<dt><B>Win32s GUI executable</B>&nbsp;&nbsp;&nbsp;gvim##_s.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/gvim61_s.zip">gvim61_s.zip</A></dt>
<dd>
GUI version for Windows 3.1 with win32s support.
<br>
A true Windows 3.1 version can be found here:
<A HREF="http://www.bulbous.freeserve.co.uk/vim16.html">http://www.bulbous.freeserve.co.uk/vim16.html</A>
</dd>
</dl>
There are three versions that run on MS-DOS or in a console window in
MS-Windows:
<dl>
<dt><B>16 bit DOS executable</B>&nbsp;&nbsp;&nbsp;vim##d16.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/vim61d16.zip">vim61d16.zip</A></dt>
<dd>
The 16 bit DOS version is the only one that runs on old MS-DOS systems.  Only
use this if you are really desparate, because it excludes many useful features
(such as syntax highlighting and long file names) and quickly runs out of
memory.
</dd>
<dt><B>32 bit DOS executable</B>&nbsp;&nbsp;&nbsp;vim##d32.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/vim61d32.zip">vim61d32.zip</A></dt>
<dd>
The 32 bit DOS version works well on MS-Windows 95/98/ME.  It requires a DPMI
manager, which needs to be installed on MS-DOS.  MS-Windows already has one.
It supports long file names, but NOT on MS-Windows NT/2000/XP.  It is compiled
with "big" features.
</dd>
<dt><B>Win32 console executable</B>vim##w32.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/vim61w32.zip">vim61w32.zip</A></dt>
<dd>
The Win32 console version works well on MS-Windows NT/2000/XP.  It supports
long file names and is compiled with "big" features.  It does not run
perfectly well on MS-Windows 95/98/ME, especially when resizing the console
window (this may crash MS-Windows...).
</dd>
</dl>
There are a few extra files:
<dl>
<dt><B>iconv library</B>&nbsp;&nbsp;&nbsp;<A HREF="http://www.mossbayeng.com/~ron/vim/iconv.dll">iconv.dll</A></dt>
<dd>
A library used for converting character sets.  Put this in the same directory
as gvim.exe to be able to edit files in many encodings.
</dd>
<dt><B>PC sources</B>&nbsp;&nbsp;&nbsp;vim##src.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/vim61src.zip">vim61src.zip</A></dt>
<dd>
The source files, packed for the PC.  This only includes the files needed on
the PC, not for other systems.  The files are in dos format CR-LF.
</dd>
<dt><B>PC translations</B>&nbsp;&nbsp;&nbsp;vim##lang.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/pc/vim61lang.zip">vim61lang.zip</A></dt>
<dd>
Translated messages and menu files, packed for the PC.  Use this to see
non-English menus.  The messages are only translated when the libintl.dll
library is installed (see the included README file).
</dd>
<dt><B>Windows 3.1 GUI executable</B>&nbsp;&nbsp;&nbsp;gvim##w16.zip and gvim##m16.zip</dt>
<dd>
These are GUI versions for 16 bit windows (Windows 3.1).  The "w16" has many
features, "m16" has few features (for when you're short on memory).
</dd>
</dl>
The files ending in ".zip" can be unpacked with any unzip program.
Make sure you unpack them all in the same directory!
<P>
For a Cygwin binary look at <A HREF="#others">others</A>.
<BR>
A Win32 binary for NT on Alpha can be found at:
<A HREF="http://george.reilly.org/vim/">http://george.reilly.org/vim/</A>


<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="amiga"></A>
<h1>Amiga</h1>
Quite a long time ago, Vim development started on the Amiga.  Although it's a
really old system now, it is still supported (for as long as my system doesn't
break down!).
<p>
For Vim 5.x and Vim 6 look in 
<A HREF="ftp://ftp.vim.org/pub/vim/amiga">the amiga directory</A>.
<dl>
<dt><B>Runtime files</B>&nbsp;&nbsp;&nbsp;vim##rt.tgz &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/amiga/vim61rt.tgz">vim61rt.tgz</A></dt>
<dd>
Documentation, syntax files, etc.  You always need this.
</dd>
<dt><B>Executable</B>&nbsp;&nbsp;&nbsp;vim##bin.tgz &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/amiga/vim61bin.tgz">vim61bin.tgz</A></dt>
<dd>
The executables for Vim and Xxd.
For Vim 6 it includes "big" features, for Vim 5.x it
includes the normal features.
</dd>
<dt><B>Big executable</B>&nbsp;&nbsp;&nbsp;vim##big.tgz</dt>
<dd>
Vim with "big" features and Xxd.  Only for Vim 5.x.
</dd>
<dt><B>Sources</B>&nbsp;&nbsp;&nbsp;vim##src.tgz &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/amiga/vim61src.tgz">vim61src.tgz</A></dt>
<dd>
The source files for the Amiga.
Only needed when you want to compile Vim yourself.
</dd>
</dl>
The files are all tar archives, compressed with gzip.  To unpack, first
uncompress them with <B>gzip -d <I>filename</I></B>.  Then unpack with
<B>tar xf <I>filename</I></B>.  You need to unpack the archives in the same
directory.

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="os2"></A>
<h1>OS/2</h1>
The OS/2 version runs in a console window.
<p>
For Vim 5.x and Vim 6 look in 
<A HREF="ftp://ftp.vim.org/pub/vim/os2">the os2 directory</A>.
<dl>
<dt><B>Runtime files</B>&nbsp;&nbsp;&nbsp;vim##rt.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/os2/vim61rt.zip">vim61rt.zip</A></dt>
<dd>
Documentation, syntax files, etc.  You always need this.
(It is also available in two parts that each fit on a floppy disk.)
</dd>
<dt><B>Executables</B>&nbsp;&nbsp;&nbsp;vim##os2.zip &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/os2/vim61os2.zip">vim61os2.zip</A></dt>
<dd>
Vim, Xxd and Tee.
</dd>
</dl>
The files ending in ".zip" can be unpacked with any unzip program.
Make sure you unpack them all in the same directory!
<p>
If you want to compile the OS/2 version, you need the EMX compiler.  Use the
Unix source archive, runtime files and the extra archive.  After unpacking the
runtime archive, move all the files and directories  in the "runtime"
directory one level up.

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="mac"></A>
<h1>Macintosh</h1>
The Macintosh binaries are not on the Vim ftp site.  They are produced by a few
Macintosh lovers.  Often they lag behind a few versions.  Most of the work for
the Macintosh port (Classic and Carbon) was done by Dany St-Amant.
<p>
There are several versions of Vim 6.1 for Mac OS on
<A href="http://macvim.swdev.org/">http://macvim.swdev.org/</A>.
<P>
A GUI version for MacOS Classic (7 - 9) compiled by Axel Kielhorn can 
be found at <A href="http://macvim.swdev.org/MacClassic/">http://macvim.swdev.org/MacClassic/</A>.
<P>
A GUI version for MacOS X 10.1 compiled by Benji Fisher can be found 
at <A href="http://macvim.swdev.org/OSX/">http://macvim.swdev.org/OSX/</A>.
This version does not work with MacOS X 10.2 (Jaguar). A special version that
runs only on 10.2 is provided at the same location.
<P>
There is also a version for Mac OSX that works in a terminal window and a GUI
version for X11 with GTK (produced by Marc Liyanage):<br>
<A HREF="http://www.entropy.ch/software/macosx/welcome.html#vim">http://www.entropy.ch/software/macosx/welcome.html#vim</A>
<p>
Here is a multi-byte version of Vim 5.7 (for Japanese, possibly also for
Korean and Chinese; not for Unicode):<br>
<A HREF="http://www-imai.is.s.u-tokyo.ac.jp/~asai/macvim-e.html">http://www-imai.is.s.u-tokyo.ac.jp/~asai/macvim-e.html</A>
<p>
If you have OSX and a setup for compiling programs, you can use the Unix source
code archives and compile yourself.  See the Unix section above.The development
tools can be downloaded from Apple's developer web site.  Hint: stuffit
expander can handle .bz2 files.
Turn to <A href="maillist.php#vim-mac">the vim-mac maillist</A> to meet other
Vim-Mac users.
<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="others"></A>
<h1>Others</h1>
This is a list of links to sites where various versions of Vim can be obtained.
These are supported by individuals, use at your own risk.
<P>
	<table cellpadding="4" border="0">
	<tr>
		<td>
		<A HREF="http://pi7.fernuni-hagen.de/hartrumpf/agenda/vim/vim.vr3">Agenda</A>
		</td>
		<td>
		http://pi7.fernuni-hagen.de/hartrumpf/agenda/vim/vim.vr3
		</td>
	</tr>
	<tr>
		<td>
		<A HREF="http://killefiz.de/zaurus/showdetail.php?app=388">Sharp Zaurus</A>
		</td>
		<td>
		http://killefiz.de/zaurus/showdetail.php?app=388
		</td>
	</tr>
	<tr>
		<td>
		<A HREF="http://www.rainer-keuchel.de/wince/vim.html">MS-Windows CE</A>
		</td>
		<td>
		http://www.rainer-keuchel.de/wince/vim.html
		</td>
	</tr>
	<tr>
		<td>
<A HREF="http://www.geocities.com/jstarship_2001/vim-tru64.html">Compaq Tru64 Unix on Alpha</A>
		</td>
		<td>
		http://www.geocities.com/jstarship_2001/vim-tru64.html
		</td>
	</tr>
	<tr>
		<td>
		<A HREF="http://www.cygwin.com/packages/vim/">Cygwin (console)</A>
		</td>
		<td>
		http://www.cygwin.com/packages/vim/<br>
		Installing is done with the Cygwin
		<A HREF="http://cygwin.com/setup.exe">setup.exe</A>.
		</td>
	</tr>
	<tr>
		<td>
		<A HREF="http://lassauge.free.fr/cygwin/">Cygwin (with GTK GUI)</A>
		</td>
		<td>
		http://lassauge.free.fr/cygwin/
		</td>
	</tr>
	<tr>
		<td>
		<A HREF="http://www.polarhome.com/vim/">Open VMS</A>
		</td>
		<td>
		http://www.polarhome.com/vim/
		</td>
	</tr>
	<tr>
		<td>
		<A HREF="http://www.vim.riscos.org.uk/">RISC OS</A>
		</td>
		<td>
		http://www.vim.riscos.org.uk/
		</td>
	</tr>
	</table>

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="yourself"></A>
<h1>Do-It-Yourself</h1>
If you want to join in and help developing Vim, you may want to get all the
original files.  These are also used to compile Vim for systems not mentioned
above.  You need to get these files:
<dl>
<dt><B>All Unix files</B>&nbsp;&nbsp;&nbsp;vim-##.tar.bz2 &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1.tar.bz2">vim-6.1.tar.bz2</A></dt>
<dd>
The Unix source and runtime files together in one big bzip2 compressed archive.
This contains the same files as the following -src and -rt archives.
Only for Vim 6.0 and 6.1.  You can find it
<A HREF="ftp://ftp.vim.org/pub/vim/unix">here</A>.
</dd>
<dt><B>Sources</B>&nbsp;&nbsp;&nbsp;vim-##-src.tar.gz &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-src1.tar.gz">vim-6.1-src1.tar.gz</A> &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-src2.tar.gz">vim-6.1-src2.tar.gz</A></dt>
<dd>
The Unix source files.  You can find them
<A HREF="ftp://ftp.vim.org/pub/vim/unix">here</A>.
For Vim 6 there are two parts.
</dd>
<dt><B>Runtime files</B>&nbsp;&nbsp;&nbsp;vim-##-rt.tar.gz &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-rt1.tar.gz">vim-6.1-rt1.tar.gz</A> &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/unix/vim-6.1-rt2.tar.gz">vim-6.1-rt2.tar.gz</A></dt>
<dd>
The Unix runtime files.  You can find them
<A HREF="ftp://ftp.vim.org/pub/vim/unix">here</A>.
For Vim 6 there are two parts.
</dd>
<dt><B>Extra files</B>&nbsp;&nbsp;&nbsp;vim-##-extra.tar.gz &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/extra/vim-6.1-extra.tar.gz">vim-6.1-extra.tar.gz</A></dt>
<dd>
The extra archive.  This contains source and runtime files that are not used
on Unix.
You can find them
<A HREF="ftp://ftp.vim.org/pub/vim/extra">here</A>.
</dd>
<dt><B>Translations</B>&nbsp;&nbsp;&nbsp;vim-##-lang.tar.gz &nbsp;&nbsp;&nbsp;<A HREF="ftp://ftp.vim.org/pub/vim/extra/vim-6.1-lang.tar.gz">vim-6.1-lang.tar.gz</A></dt>
<dd>
This contains translated messages and menu files.
Only for Vim 6, you can find it
<A HREF="ftp://ftp.vim.org/pub/vim/extra">here</A>.
</dd>
</dl>

<p>
<A HREF="#top">TOP</A>

<hr noshade size="1" color="#000000">

<A NAME="patches"></A>
<h1>Patches</h1>
For released versions patches are made available.  These fix small or big
problems.  Only source code patches are provided.
<p>
The patches for Vim 6.1, 6.0 and 5.x are
<A HREF="ftp://ftp.vim.org/pub/vim/patches">here</A>.  An overview of what
each patch solves is in the
<A HREF="ftp://ftp.vim.org/pub/vim/patches/README">README file</A>.
<p>
To apply a patch, you must get the sources, go to the directory where the
"src" directory is located and apply the patch with
<B>patch -p0 &lt; <I>patchfile</I></B>.
To apply multiple patches you can concatenate them and pass the resulting file
to the patch program.  It's a good idea to redirect the output to be able to
check for error messages.

<p>
<A HREF="#top">TOP</A>
<?php
include("footer.php");
?>
