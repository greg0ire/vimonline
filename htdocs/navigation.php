<?php
// navigation.php handles the sidebar navigation for vim online
require_once("$BASE_DIR/include/menu.inc");

// menu setup
$home = new Menu('Home',$BASE.'/index.php');
$search = new Menu('Search',$BASE.'/search.php');

$about = new Menu('About Vim',$BASE.'/about.php');
$about->addSubMenu(new Menu('in 6 Kbyte',$BASE.'/6kbyte.php'));
$about->addSubMenu(new Menu('for Vi users',$BASE.'/viusers.php'));
$about->addSubMenu(new Menu('for Vim 5 users',$BASE.'/vim5users.php'));
$about->addSubMenu(new Menu('for others',$BASE.'/others.php'));

$community = new Menu('Community',$BASE.'/community.php');
$community->addSubMenu(new Menu('Mailing Lists',$BASE.'/maillist.php'));
$community->addSubMenu(new Menu('Web Pages',$BASE.'/web.php'));
$community->addSubMenu(new Menu('Credits',$BASE.'/thanks.php'));

$docs = new Menu('Documentation',$BASE.'/docs.php');
$docs->addSubMenu(new Menu('help files online &gt;&gt;','http://vimdoc.sourceforge.net/cgi-bin/vim2html2.pl'));
$docs->addSubMenu(new Menu('the book &gt;&gt;','http://iccf-holland.org/click5.html'));
$docs->addSubMenu(new Menu('the FAQ &gt;&gt;','http://vimdoc.sourceforge.net/cgi-bin/vimfaq2html3.pl'));

$download = new Menu('Download',$BASE.'/download.php');
$download->addSubMenu(new Menu('List of Mirrors',$BASE.'/mirrors.php'));
$download->addSubMenu(new Menu('ftp://ftp.vim.org/pub/vim/','Vim ftp site &gt;&gt;'));
$download->addSubMenu(new Menu('Vim from CVS',$BASE.'/cvs.php'));
$download->addSubMenu(new Menu('Script links',$BASE.'/vimscriptlinks.php'));
$download->addSubMenu(new Menu('Runtime files',$BASE.'/runtime.php'));

$news = new Menu('News',$BASE.'/news/news.php');

$scripts = new Menu('Scripts',$BASE.'/scripts/index.php');
$scripts->addSubMenu(new Menu('Browse all',$BASE.'/scripts/script_search_results.php'));
$scripts->addSubMenu(new Menu('Add Script',$BASE.'/scripts/add_script.php'));
$scripts->addSubMenu(new Menu('Karma',$BASE.'/karma.php'));

$tips = new Menu('Tips',$BASE.'/tips/index.php');
$tips->addSubMenu(new Menu('Browse all',$BASE.'/tips/tip_search_results.php'));
$tips->addSubMenu(new Menu('Download all',$BASE.'/tips/tip_download.php'));
$tips->addSubMenu(new Menu('Karma',$BASE.'/karma.php'));

$account = new Menu('Account',$BASE.'/account/index.php');

$trivia = new Menu('Trivia',$BASE.'/trivia.php');
$trivia->addSubMenu(new Menu('Logos',$BASE.'/logos.php'));
$trivia->addSubMenu(new Menu('Buttons',$BASE.'/buttons.php'));
$trivia->addSubMenu(new Menu('Weird stuff',$BASE.'/weird.php'));

$help = new Menu('Help',$BASE.'/huh.php');

// construct the top level main menus
$mainMenus = array($home,$search,$about,$community,$docs,$download,$news,$scripts,$tips,$account,$trivia,$help);
// paint the login status and the menus
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
<?php
if(isSessionValid()){
    $user = getSessionUser();
?>
        <td><small>welcome <?=$user->getFirstName()?> (<a href="<?=$BASE?>/logout.php">logout</a>)</small></td>
<?php
} else {
?>
        <td><small>not logged in (<a href="<?=$BASE?>/login.php">login</a>)</small></td>
<?php
} 
?>
    </tr>
    <tr>
        <td><img src="<?=$IMAGES?>/spacer.gif" alt="" border="0" width="1" height="1"></td>
    </tr>
    <tr>
        <td class="darkbg"><img src="<?=$IMAGES?>/spacer.gif" alt='' border="0" height="3"></td>
    </tr>
    <tr>
        <td><img src="<?=$IMAGES?>/spacer.gif" alt="" border="0" width="1" height="2"></td>
    </tr>
</table>
<?php
// draw the menus
foreach($mainMenus as $menu){
    if($menu->isSelected($REQUEST_URI)){
        // we are in this nav main
?>
        <span class="sidebarheader"><?=$menu->getName()?></span><br>
<?php
    } else {
?>
        <span class="sidebarheader"><a href="<?=$menu->getLink()?>"><?=$menu->getName()?></a></span><br>
<?php
    }
    if($menu->isOpen($REQUEST_URI)){
        foreach($menu->getSubMenus() as $subMenu){
            if($subMenu->isSelected($REQUEST_URI)){
?>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><?=$subMenu->getName()?></span><br>
<?php
            } else {
?>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="sidebarheader"><a href="<?=$subMenu->getLink()?>"><?=$subMenu->getName()?></a></span><br>
<?php
            }           
        }
    }
}
?>
