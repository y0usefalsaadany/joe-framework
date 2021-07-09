<?php 

/*
*************************
*
*@ controle to all controllers
*
*************************
*/

class route 
{
    
    protected $controller = "HomeController"; 
    protected $action = "index"; 
    protected $params=[];


    // filter url
    public function __construct() {
        $this-> url();
        $this -> call_controller( );
    }
    private function url(){
        $url = $_SERVER['REQUEST_URI'];
        $url = trim($url,'/');
        if(!empty($url)){
            // url from string to array
            $url   = explode('/',$url); 

            // if cantroller and methods are found
            $this-> controller = isset($url[0]) ? ucwords($url[0])."Controller":"HomeController"; 
            $this-> action 	  = isset($url[1]) ? $url[1]:"index";

            // delete controller and methods from url
            unset($url[0],$url[1]);
            $this-> params = !empty($url) ? array_values($url) : [];
        }       
    }
    
    // call the controllers
    private function call_controller( ){
    	if (class_exists($this-> controller)){
    		$controller = $this-> controller;
    		if(method_exists($controller,$this->action))
            {
                call_user_func_array([$controller,$this->action],$this->params);
            }else {
    			echo "method not found";
    		}
    	}else {
            view::load('error/404notfound');
	    }
    }
    }



