<?php


/**
 *
 */
class Dashboard extends Controller
{

  function __construct()
  {
    session::session_start();

       $email = session::session_get('email');
       if ($email == false){
          header('Location:'.path.'login');
      }

  }
}

?>
