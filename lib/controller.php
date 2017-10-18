<?php
require "config/config.php";
require "config/db_connection.php";
require "lib/view.php";
require "lib/error.php";
require "lib/model.php";
require "model/Login_model.php";
require "lib/session.php";

class Controller extends View
{

  function __construct()
  {
  Session::session_start();
  Session::session_set('user','user');
   $error = new Error_page;
    $url = $_GET['url'];
    $url = explode("/" , $url );
// print_r($url);

if(empty($_GET['url'])){
  require "controller/index.php";
  $controller = new index;
  parent::controller(index);
  return false;
}
    if(isset($url['0'])){
      $file = 'controller/'.$url['0'].'.php ';
    if(file_exists($file))  {
      require 'controller/'.$url['0'].'.php ';
      $controller = new $url['0'];

      if(isset($url['1'])){
        if(method_exists($controller,$url['1'])){
        $controller -> {$url['1']}();
      }else{
    $error -> show_error();
    return false;
      }
      }

    }else{    // file_exists controller
  $error -> show_error();
  return false;
    }
    // isset controller
     parent::controller($url['0']);
     return false;
  }


  }
}
 ?>
