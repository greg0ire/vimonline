<?php
// explanation about vim online tips and scripts
require_once("include/init.inc");

$page_title = "huh?";
$nav_main = "scripts";
$nav_sub = "huh";
$page_sid = "sid_empty.php";

include("header.php");
?>
<h1>About Vimonline</h1>
<p>
This is a place where users of the vim editor can add their 
favorite scripts, commands, macros and other assorted tips to a common database. 
Both scripts and tips have <a href="karma.php">karma</a> allowing the community
to rate their usefulness.
</p>
<p>
<b>If you have questions about the vim editor, please use the <a href="community.php">vim mailing list</a>. Not vimonline support.</b>
</p>
<p>
If you have feedback on the site feel free to contact 
<a href="mailto:vimonline-support@lists.sourceforge.net">vimonline-support@lists.sourceforge.net</a> or
directly at <a href="mailto:scrott@users.sourceforge.net">scrott@users.sourceforge.net</a> and <a href="mailto:jmorace@users.sourceforge.net">jmorace@users.sourceforge.net</a>.
Be sure to check the current <a href="https://sourceforge.net/tracker/?atid=391890&group_id=27891&func=browse">feature requests</a> before suggesting a feature. You can also check out the current 
vim online <a href="https://sourceforge.net/tracker/?atid=391887&group_id=27891&func=browse">bugs</a> as well. I try and keep all the feature requests and bugs in the sourceforge trackers. 
For more details you can check out the <a href="http://vimonline.sf.net">vimonline development site</a>.
</p>
<h2>Scripts</h2>
<p>As more people develop scripts for vim it is important to have a central place
to store them. vim online provides a place to upload a script (general utility,
syntax, indent, etc...) and then continue to provide updated versions of that
same script.
<h2>Tips</h2>
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
<h2>Authentication</h2>
<p>
Currently authentication is not required to create a tip. We felt it was important
there was no barrier to entry for tip creation.</p> 

<p>In order to upload scripts you must have an account with vim online. This is
so there can be defined contact people for scripts to avoid confusion.
User passwords are stored using one-way encryption.
</p>
<?php
include("footer.php");
?>
