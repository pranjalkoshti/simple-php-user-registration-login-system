<?php


class Autoloader
{

  function __construct()
  {

  }
  function autoload($classname)
  {
    $filename = path. $classname .".php";
     return 'require "'.$filename.'";';
  }
}
 ?>
