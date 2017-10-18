<?php



class Db_Connection extends PDO
{

 function __construct()
 {

    $dsn = 'mysql:dbname=ques;host=localhost';
   try {

       parent::__construct($dsn,'root','password');

   } catch (PDOException $e) {
       echo 'Connection failed: ' . $e->getMessage();
   }
 }

}


 ?>
