<?php
// Explanation about tip and script karma
require_once("include/init.inc");

$page_title = "karma";
$nav_main = "scripts";
$nav_sub = "karma";
$page_sid = "sid_empty.php";

include("header.php");
?>
<h1>Karma</h1>
<p>
Scripts and tips both have karma displayed at the top their page.
</p>
<table>
    <tr>
    <td valign="top"><img src="<?=$IMAGES?>/script_karma.gif" alt="script karma box"></td>
    <td valign="top"><img src="<?=$IMAGES?>/tip_karma.gif" alt="tip karma box"></td>
    </tr>
</table>
<p>
The karma is made up of the total
rating a tip or script has, the number of times it has been rated and the number of users that have
viewed/downloaded it. Each user (derived from ip) can rate once using the rating box at the bottom
of the page. There are three anonymous ratings you can give a tip or script:
</p>
<img src="<?=$IMAGES?>/rating.gif" alt="rating box">
<ul>
<li><b>Life Changing</b> (+4) - Changed the way you use vim. For example the <a href="tip_view.php?tip_id=1">"*" command</a> was a "life changing" command for me.
<li><b>Helpful</b> (+1) - Very helpful -- gave you good insight into better and cooler ways to use vim
<li><b>Unfulfilling</b> (-1) - Less that satisfying, confusing, or perhaps a little wrong. If you
rate a tip unfulfilling it might be nice if you add a note to clarify the tip and increase it's value.
</ul>
<?php
include("footer.php");
?>
