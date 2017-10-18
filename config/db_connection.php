<?php



class Db_Connection extends PDO
{

 function __construct()
 {
$user = 'root';
$password ='password';
    $dsn = 'mysql:dbname=ques;host=localhost';
   try {
 // $dbh = new PDO($dsn, $user, $password);
       $conn = parent::__construct($dsn,'root','password');

   } catch (PDOException $e) {
       echo 'Connection failed: ' . $e->getMessage();
   }
 }

}


 ?>
