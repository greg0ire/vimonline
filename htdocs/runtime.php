<?php
// Vim runtime details
require_once("include/init.inc");
$page_title = "Vim runtime files download";
$page_sid = "sid_runtime.php";

include("header.php");
?>

<h1>Download runtime files</h1>

When you obtain the latest version of Vim through CVS or use the archives and
apply all the patches, you still don't have the latest version of the runtime
files (syntax highlighting, indenting, filetype plugins, etc.).  That is
because no patches are made for them.
<P>
If you can't wait for the next Vim release to get the latest runtime files,
this is the way to get them:
<OL>
<LI>
Make sure you have Python (version 1.5 or later).
</LI>
<LI>
Install A-A-P; see <A HREF="http://www.a-a-p.org/download.html">http://www.a-a-p.org/download.html</A>.
</LI>
<LI>
Download this A-A-P recipe:
<A HREF="ftp://ftp.vim.org/pub/vim/runtime/main.aap">ftp://ftp.vim.org/pub/vim/runtime/main.aap</A>.
Place it in your $VIMRUNTIME directory.
(You need to be able to write in $VIMRUNTIME for this and the following.)
</LI>
<LI>
Run "aap fetch" in the $VIMRUNTIME directory.  It will download all the files
that you don't have yet and the files that have been changed. MD5 checksums are
used to quickly check for changed files.
</LI>
</OL>
For steps 3 and 4 you could use a Vim script like this:
<PRE>
        cd $VIMRUNTIME
        !fetch ftp://ftp.vim.org/pub/vim/runtime/main.aap
        !aap fetch
</PRE>
If you don't have the "fetch" program use some other method to obtain the
main.aap recipe through ftp.
<P>
On MS-Windows you have to run aap with:
<PRE>
	python path/aap fetch
</PRE>
Where "path/aap" is the path to where aap is located.
<P>
Note: This does obtain new files, but it does not delete files that are no
longer used.  It also is an effective way to erase any changes you made to the
files yourself!
<P>
You can repeat the "aap fetch" command as often as you like.  For example,
every week.
<P>
The "main.aap" recipe was generated with the ":mkdownload" command in
"aap".
<?php
include("footer.php");
?>
