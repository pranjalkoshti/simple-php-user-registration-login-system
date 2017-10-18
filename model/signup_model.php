<?php

/**
 *

 */
class Signup_model extends Model
{

  function __construct()
  {

  }

  function signup_run()
  {
 parent::__construct();

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST['email'];

   $num = Verification::verify_email($email);

   if ($num>0) {
      $message =  $_SESSION['message'] ="
      <div class='alert alert-warning alert-dismissable'>

        Email already registered</div>
      ";

   }else{

   if($_POST['pwd'] == $_POST['cnf-pwd']){

   if (empty($_POST['first_name']) == false && empty($_POST['last_name']) == false &&
   empty($_POST['gender']) == false && empty($_POST['email']) == false && empty($_POST['pwd']) == false ){

   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $pwd = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
   $date_created = date('H:i:s Y-m-d');


   $sql = "INSERT INTO user (first_name, last_name, gender, email, pwd, date_created)
   VALUES (:first_name, :last_name, :gender, :email, :pwd, :date_created)";

   $stmt = $this-> conn ->prepare($sql);

$stmt -> bindParam(':first_name',$first_name);
$stmt -> bindParam(':last_name',$last_name);
$stmt -> bindParam(':email',$email);
$stmt -> bindParam(':gender',$gender);
$stmt -> bindParam(':pwd',$pwd);
$stmt -> bindParam(':date_created',$date_created);



   if ($stmt -> execute()== TRUE) {

        $_SESSION['email'] = $email ;

       header ('Location: dashboard');

   } else {
     echo $stmt -> errorInfo();
     print_r($stmt -> errorInfo());
   $message =  $_SESSION['message'] =  "
     <div class='alert alert-warning alert-dismissable'>

       There is an error submitting your request, please try again</div>
     ";

   }
   }else{
    $message =  $_SESSION['message'] ="
     <div class='alert alert-warning alert-dismissable'>

       All fields must be filled</div>
     ";

   }
   }else{
     $message = $_SESSION['message'] =  "
     <div class='alert alert-warning alert-dismissable'>

       Password not matching </div>
     ";


   }

   } //email verification

   }  // method verification

 }  //function

}  //class


 ?>
