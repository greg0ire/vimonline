<?php

function escapeForHTML($string) {
    return _escapeForHTML($string,true,true,true);
}

function escapeForHTMLNoBreaks($string){
    return _escapeForHTML($string,false,true,true);
}

function limitStrLength($string){
    if(strlen($string) > 400){
        return substr($string,0,400) . "...";
    } else {
        return $string;
    }
}

function escapeEmail($email){
    return str_replace("@"," at ",$email);
}

function _escapeForHTML($string,$replace_cr,$maintain_spaces,$link) {
    global $BASE;
    if($string == null) {
        return "";
    }
    $string = str_replace("<","&lt;",$string);
    $string = str_replace(">","&gt;",$string);
    $string = str_replace("\"","&quot;",$string);
    $string = str_replace("\'","&#039",$string);

    // these need to be last (or we will escape them!)
    if($replace_cr){
        $string = str_replace(chr(10),"<br>",$string);
    }
    if($maintain_spaces){
        $string = str_replace("  ","&nbsp;&nbsp;",$string);
    }
    if($link){
        //$string = preg_replace("/((http|https|ftp|news):\/\/\S+\w)/","<a href=\"\\0\" target=\"_blank\">\\0</a>",$string);
        $string = preg_replace("/([\w]+:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/i", "<a target=\"_blank\" href=\"$1\">$1</A>",$string); 

        $string = preg_replace("/(vimtip #)(\d+)/","<a href=\"$BASE/tips/tip.php?tip_id=\\2\">\\0</a>",$string);
        $string = preg_replace("/(vimtip#)(\d+)/","<a href=\"$BASE/tips/tip.php?tip_id=\\2\">\\0</a>",$string);
        $string = preg_replace("/(vimscript #)(\d+)/","<a href=\"$BASE/scripts/script.php?script_id=\\2\">\\0</a>",$string);
        $string = preg_replace("/(vimscript#)(\d+)/","<a href=\"$BASE/scripts/script.php?script_id=\\2\">\\0</a>",$string);
    }
    return $string;
}

function formatDate($timstamp){
        $date_format = 'F j, Y G:i';
        return date($date_format,$timstamp);
}
function formatNewsDate($timstamp){
        $date_format = 'd-M-Y';
        return date($date_format,$timstamp);
}

?>
