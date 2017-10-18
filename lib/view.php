<?php



class View
{

  function __construct()
  {
Session::session_start();

  }

  function controller($arg)
  {
    $file = 'view/'.$arg.'/index.php ';
    if(file_exists($file)){
        require 'view/header.php';
        require 'view/'.$arg.'/index.php ';
        require 'view/footer.php';

        }
  }

  function error_page()
  {
        require 'view/header.php';
        require 'view/error/index.php';
        require 'view/footer.php';

  }

}
 ?>
