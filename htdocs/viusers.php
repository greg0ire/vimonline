<?php
// for Vi users
require_once("include/init.inc");
$page_title = "for Vi users";

include("header.php");
?>
<h1>if you're using vi</h1>

<p>
Vim is backwards compatible with vi.  Switching from vi to Vim is easy:
you can keep all the things that Vi offers <em>and</em> gain a large
range of new features.  Any one of these features may be a reason to
start using Vim.  A few are listed below, but a much more comprehensive
list is in the Vim documentation, under
<a href='http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl?page=vi_diff.txt#vi_diff.txt'>:help vi_diff</a>.
</p>

<ul>
  <li>
    unlimited undo
    <p>
    You can do <tt>xxxx</tt> and undo each of the four deletes.
    When was the last time you typed "jjjj" and then found out the
    caps lock key was on?  You accidentally joined five lines
    together, and Vi can undo only the last command.  In Vim you
    can undo all four "J" commands and get your original text back.
    </p>
  </li>
  <li>
    portability
    <p>
    Vi is only available on Unix.  Vim works on MS-Windows,
    Macintosh, Amiga, OS/2, VMS, QNX and other systems.  And also
    on every Unix system.
    </p>
  </li>
  <li>
    syntax highlighting
    <p>
    Vim can be programmed to highlight portions of the buffer in
    different colors or styles, based on the type of file being
    edited.  There are hundreds of syntax highlighting rulesets
    bundled with Vim.
    </p>
  </li>
  <li>
    GUI
    <p>
    Vim works well at a console, but it can run natively in many
    GUIs, including X Windows, Mac OS, and Microsoft Windows.  It
    uses native GUI widgets for scrolling, dividing buffers, and
    menuing.  It can also talk to the clipboard.
    </p>
  </li>
  <li>
    vi compatibility mode
    <p>
    In a pinch, you can force Vim to act like vi.  All of the
    improvements and bug-fixes in Vim that make it incompatible
    with vi are turned off, and you're left with a 100%
    vi-compatible editor.
    </p>
  </li>
</ul>
<?php
include("footer.php");
?>
