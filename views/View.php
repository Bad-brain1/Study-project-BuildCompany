<?php

class View{
    public function render($page, $arg = 0,$arg1=0,$arg2=0,$arg3=0,$arg4=0){
        // return require_once(ROOT.$page);
        return include ROOT.$page;
        // header('Location'.$page);
    }
}