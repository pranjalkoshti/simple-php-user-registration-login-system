<?php


class Login_model extends Model
{

  function __construct()
  {

  }

  function login_run()
  {

         parent::__construct();


                if (!empty($_POST['email']) && !empty($_POST['pwd'])){

                  $pwd = $_POST['pwd'];
                  $email =$_POST['email'];

                  $stmt =  $this-> conn -> prepare("SELECT uid,email,pwd,id FROM user WHERE email = :email");
                  $stmt -> bindParam(':email', $email);
                  $stmt -> execute();

                $num = $stmt-> rowCount();
                    if($num > 0){

                    $row = $stmt -> fetch();

                //  print_r($row);
                  if (password_verify($pwd, $row['2'])) {

                        $_SESSION['email'] = $row['1'];

                        $message =  $_SESSION['message'] ="
                         <div class='alert alert-success alert-dismissable' id = 'success-alert'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                           Welcome ". $row['0']."</div>";

                         header('Location:'.path.'dashboard');

                  }else{
                      $_SESSION['a'] = 'a';

                      $_SESSION['message']="
                    <div class='alert alert-warning alert-dismissable'>

                    There is an error logging in, please check your password </div>
                     ";

                    //  header('Location:'.path.'login');
                  }
                  }else{
                     $message = $_SESSION['message'] = "
                    <div class='alert alert-warning alert-dismissable'>

                    There is an error logging in, please check your email </div>
                     ";
                    //  header('Location:'.path.'login');
                   }

                  }else {
                    $message = $_SESSION['message'] = "

                      <div class='alert alert-warning alert-dismissable'>

                      There is an error logging in, please fill in all details </div>";
                      //  header('Location:'.path.'login');
                     }

  }

function logout_run()
{
  Session::session_unset('email');

  Session::session_destroy();
}
}

 ?>
