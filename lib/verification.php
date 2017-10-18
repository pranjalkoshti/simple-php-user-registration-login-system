<?php
/**
 *
 */
class Verification extends Model
{

  function __construct()
  {

  }

  static function verify_email($email){
    $conn = new Db_Connection;

    $sql = "SELECT * FROM user WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(':email', $email);
    $stmt -> execute() ;
    
    $num = $stmt-> rowCount();

    return $num;
  }


}
 ?>
