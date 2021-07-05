<?php

/*
*************************
*
*@ view page
*
*************************
*/


class view{
    static function load($view_name, $view_data =[]){
        extract($view_data);
        $file = VIEWS . $view_name . ".php";
        if (file_exists($file)){
            require $file;
        }else {
            echo "this ".$view_name." not found";
        }
    }
}