<?php

/*

*************************

*
*@ xss attack, SQL injection 
*
*************************
*/
class FilterUrlId{
  public function url($value){
    $value = trim($value);
    is_numeric($value);
  }
}