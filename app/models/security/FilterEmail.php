<?php

/*

*************************

*
*@ xss attack, SQL injection
*
*************************
*/

class FilterEmail{
  public function email($value){
    $value = trim($value);
    filter_var($value,FILTER_SANITIZE_EMAIL);
    htmlspecialchars($value);
  }
}