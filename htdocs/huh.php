<?php
require("include/init.inc");

# include the page header
$page_title = "huh?";
include("header.php");
?>

<table cellpadding="1" cellspacing="1" border="0" width="100%">
<tr><td colspan="2"><img src="images/spacer.gif" width="1" height="10" alt=""></td></tr>
<tr>
    <td><img src="images/spacer.gif" width="5" height="1" alt=""></td>
    <td width="2000">
<h1>Huh?</h1>
<p>
This is a place where users of the vim editor can add their 
favorite scripts, commands, macros and other assorted tips to a common database. 
The concept started as in two places: vim-tips.sourceforge.net and the VUR (vim user
repository started by Sylvian Vart). Jonathan Morace and I extended the VUR concept and 
combined it with vim-tips to form vim online.
</p>
<p>
Both scripts and tips have <a href="karma.php">karma</a> allowing the community
to rate their usefulness.
</p>
<p>
If you have feedback on the site feel free to contact 
<a href="mailto:vimonline-support@lists.sourceforge.net">vimonline-support@lists.sourceforge.net</a> or
directly at <a href="mailto:scrott@users.sourceforge.net">scrott@users.sourceforge.net</a> and <a href="mailto:jmorace@users.sourceforge.net">jmorace@users.sourceforge.net</a>.
If it is an idea you would like to discuss please include the vim (vim@vim.org) 
community in the discussion. Be sure to check the <a href="todo.php">todo list</a>
before suggesting a feature.
</p>
<h3>Scripts</h3>
<p>As more people develop scripts for vim it is important to have a central place
to store them. vim online provides a place to upload a script (general utility,
syntax, indent, etc...) and then continue to provide updated versions of that
same script.
<h3>Tips</h3>
<p>
While the vim distribution comes with a rich set of documentation it is often hard
to find a place to start when trying to incrementally learn how to use the
editor. When I realized how much I was learning from the vim list alone I
thought it would be great to have a place that the community could maintain
a list of their favorite vim gems. The overall goal is to have a place you 
can visit when you are in a vim learning mood or when you "discover" something 
particularly powerful and want to share it with other vim users. 
<span class="errortext">Please remember vim tips are not meant to be
documentation!</span> Tips should have pointers to where you can read more
about the feature in help or on the web.
</p>
<p>
Each tip has a complexity:
<img src="tips/images/basic.gif" alt="basic"> basic, 
<img src="tips/images/intermediate.gif" alt="intermediate"> intermediate and
<img src="tips/images/advanced.gif" alt="advanced"> advanced (taken from the standard ski hill
levels). Please consider these levels when creating tips. 
</p>
<p>
<h3>Authentication</h3>
<p>
Currently authentication is not required to create a tip. We felt it was important
there was no barrier to entry for tip creation.</p> 

<p>In order to upload scripts you must have an account with vim online. This is
so there can be defined contact people for scripts to avoid confusion.
User passwords are stored using one-way encryption.
</p>
<br>



    </td>
</tr>
</table>


<?php
include("footer.php");
?>
