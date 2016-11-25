<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "cook";
  try{
      $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
      echo "Өгөгдөлтэй холбогдлоо..";

      
  } catch(PDOException $e){
      exit('Database error');
  }
?>