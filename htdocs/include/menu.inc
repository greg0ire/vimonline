<?php 

class Menu {

    var $name;
    var $link;
    var $isSeparator;
    var $subMenus;

    function Menu($name,$link) {
        $this->name  = $name;
        $this->link  = $link;
        $this->subMenus = array();
        $this->isSeparator = false;
    }

    function getName() {
        return $this->name;
    }

    function getLink() {
        return $this->link;
    }

    function hasSubMenus(){
        if(sizeof($this->subMenus)==0){
            return false;
        } else {
            return true;
        }
    }

    function isSelected($uri){
        if(strcmp($BASE . $this->link, $uri)==0){
            return true;
        } else {
            return false;
        }
    } 

    function isSubMenuSelected($uri){
        if(!$this->getSubMenus()){
            return false;
        } else {
            foreach($this->getSubMenus() as $subMenu){
                if($subMenu->isSelected($uri)){
                    return true;
                }
            }
        }
    }

    function isOpen($uri){
        if($this->isSelected($uri) || $this->isSubMenuSelected($uri)){
            return true;
        }  else {
            return false;
        }
    }

    function addSubMenu($subMenu){
        array_push($this->subMenus,$subMenu);
    }

    function getSubMenus(){
        return $this->subMenus;
    }

    function setSeparator(){
        $this->isSeparator = true;
    }

    function isSeparator(){
        return $this->isSeparator;
    }

}
?>
