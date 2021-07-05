<?php

/*

*************************

*
*@ xss attack, SQL injection
*
*************************
*/
class FilterString($value){
  public function string($value){
    $value = trim($value);
    if (!preg_match('/^[a-zA-Z0-9]+$/',$value)){
      View::load('error/errorInfo');
    }else{
      filter_var($value,FILTER_SANITIZE_STRING);
      htmlspecialchars($value);
    }
  }
}

?>