<?php
// for Vim 5 users
require_once("include/init.inc");

$page_title = "for Vim 5 users";
$nav_main = "about";
$nav_sub = "vim5users";
$page_sid = "sid_empty.php";

include("header.php");
?>
<h1>if you're using Vim 5</h1>
<p>
A huge number of new features have been added in Vim 6.  A few major ones
will be mentioned here.  There are also a lot of minor improvements,
details matter to the Vim developers.
</p>

<p>
The full list of new features can be found in the
<a href='http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl?page=version6.txt#version6.txt'>official documentation</a>.
</p>

<ul>
  <li>
  Vertically Split Windows
  <p>
  Windows can now be split vertically.  This provides great flexibility for
  displaying files in Vim.  The example below shows the file explorer
  in the left window and an edited file in the right window.  Double
  clicking on a file name in the file explorer edits that file in the
  right window.  Double clicking on a directory name moves to that
  directory.  You can have many splits at once, and edit files in
  each of them.
  </p>
  <img src="<?=$IMAGES?>/vertsplit.png" width="602" height="355" alt="vertically split windows" />
  <p>
  </li>

  <li>
  Vimdiff
  <p>
  Edit two (or three or four) files and Vim will show the differences.
  Inserted and changed lines are highlighted.  Ranges of lines without
  changes are folded away.  This way you can quickly see what changed.  There
  are commands to remove the differences.
  </p>
  <img src="<?=$IMAGES?>/vimdiff.png" width="602" height="430" alt="vimdiff" />
  <p>
  </li>


  <li>
  Folding
  <p>
  A range of lines can be hidden, and one line displayed instead.  This gives
  a quick overview of what a file contains.  In the example below there is a
  fold for each C function.  Most of them are closed and only show the name
  of the function.  A fold can be opened by clicking on the + in the column
  on the left.
  </p>

  <p>
  There are several ways of folding: with markers in the file, based on
  indenting, manually or defined with an expression.  This provides
  convenient folding for many different purposes.
  </p>
  <img src="<?=$IMAGES?>/folding.png" width="586" height="311" alt="folding" />
  <p>
  </li>

  <li>
  User Manual
  <p>
  With so many new features the documentation had to be enhanced to make it
  easier to learn using Vim.  The user manual was written in such a way that
  you can start using Vim or learn to use a specific feature.  There are lots
  of examples to make it easier to read and understand.  Parts of the book
  <a href="http://iccf-holland.org/click5.html">Vi Improved - Vim</A> by Steve
  Oualline were used.  The user manual, like the book, is published under the
  Open Publication License.
  <p>

  <p>
  You can find the
  <a href='http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl?page=usr_toc.txt#usr_toc.txt'>User Manual</a>, along with other documentation, at
  <a href='http://vimdoc.sf.net/'>VimDoc</a>.
  </p>
  </li>

  <li>
  Plugins
  <p>
  Since Vim scripting has become quite powerful, many users have started
  writing scripts.  The new plugin feature makes it easy to start using such
  a script: Just drop it in the right directory.
  </p>

  <p>
  There are several types of plugins.  Global plugins are used to add
  commands for all situations.  The file explorer, mentioned in the example
  for vertical splits above, is actually implemented as a global plugin.
  </p>

  <p>
  Filetype plugins are used to do settings for a specific type of file.  For
  example, the C filetype plugin sets the 'cindent' option; the "man" plugin
  sets up mappings to be able to jump to another manual page.
  </p>

  <p>
  A number of plugins are included in the distribution.  The system
  administrator can add plugins for all users.  And you can add your own
  personal plugins.  The <a href="scripts.php">script repository</a>
  provides a central place to share plugins.
  </p>
  </li>

  <li>
  Flexible Indenting
  <p>
  Automatic indenting is now available for many languages.  Several are
  included with the distribution.  Just like with syntax highlighting, the
  indenting is defined in a Vim script.  This allows you to add indenting for
  the language you are editing.  You are invited to make your scripts
  available to be included in the Vim distribution.
  </p>
  </li>

  <li>
  Unicode
  <p>
  There are many languages in the world, and many ways to encode the
  characters used in them.  Unicode was designed to encode characters for all
  the languages commonly used in the world.  This allows using several
  languages in the same file.
  </p>

  <p>
  Vim supports editing Unicode in the GUI version and in terminals that
  support UTF-8.  Double-wide characters can be used, and up to two composing
  characters are supported.
  </p>

  <p>
  When reading a file, Vim can often detect how it is encoded and convert the
  text when necessary.  UTF-8 files are edited without conversion.  Other
  Unicode formats (16 bit and 32 bit) are converted internally.  Conversion
  is also used to edit files in just about any encoding, using an external
  converter.
  </p>
  <img src="<?=$IMAGES?>/unicode.png" width="602" height="362" alt="Editing Unicode" />
  </li>
</ul>
<?php
include("footer.php");
?>
