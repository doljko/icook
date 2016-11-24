<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "cook";
  try{
      $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
      echo "Database connected..";

      
  } catch(PDOException $e){
      exit('Database error');
  }
?>