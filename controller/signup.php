<?php



/**
 *
 */
class Signup
{

  function __construct()
  {

  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $num = verify_email($conn, $email);

  if ($num>0) {
     $message =  $_SESSION['message'] ="
     <div class='alert alert-warning alert-dismissable'>

       Email already exists</div>
     ";

    header ('Location: register');

  }else{
  if($_POST['pwd'] == $_POST['cnf-pwd']){

  if (empty($_POST['first_name']) == false && empty($_POST['last_name']) == false &&
  empty($_POST['gender']) == false && empty($_POST['email']) == false && empty($_POST['pwd']) == false ){

  $first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
  $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pwd = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
  $date_created = date('H:i:s Y-m-d');


  $sql = "INSERT INTO user (first_name, last_name, gender, email, pwd, creation_date)
  VALUES (?, ?, ?, ?, ?,?)";
  $stmt = $conn->prepare($sql);

  $stmt -> bind_param('sssssi', $first_name, $last_name, $gender, $email, $pwd, $date_created );

  if ($stmt -> execute()== TRUE) {
  $message = $_SESSION['message'] = "
  <div class='alert alert-success alert-dismissable'>

    New account is created, please log in using ".$email."</div>";

      header ('Location: login');
  } else {
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

      Password not matching</div>
    ";


  }
  }
  }
}
 ?>
