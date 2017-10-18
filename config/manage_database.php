<?php



class Manage_database
{

  function __construct()
  {
    function create_database($db_name)
    {

      $this -> conn = new Db_Connection;

      $sql = "CREATE DATABASE $db_name";
      if ($conn->query($sql) === TRUE) {
       echo "Database created successfully";

       } else {

     echo "Error creating database: " . $conn->error;
  }

  $conn->close();
    }

    function create_table($db_name)
    {
      $this -> conn = new Db_Connection;

      $sql = "CREATE TABLE IF NOT EXISTS `$db_name`.`user` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(45) NOT NULL,
    `last_name` VARCHAR(45) NOT NULL,
    `gender` VARCHAR(45) NOT NULL,
    `email` VARCHAR(128) NOT NULL,
    `pwd` VARCHAR(128) NOT NULL,
    `date_created` INT(11) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `email_UNIQUE` (`email` ASC))
  ENGINE = InnoDB";

      if ($conn->query($sql) === TRUE) {
       echo "Database created successfully";

       } else {

     echo "Error creating database: " . $conn->error;
  }

  $conn->close();
    }

  }


}



 ?>
