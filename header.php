<!DOCTYPE html>
<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
include_once 'config/config.php';


?>
<html lang="en">
  <head>
    
    <title>Bootstrap Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" ><img src="public/img/logo.png"  style="width:150px;height:70px;"></a>


<?php 
if (!isset($_SESSION['userSession'])) {
    echo "
  <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
          <li ><a href='index.php'>Нүүр</a></li>
          <li><a href='aboutus.php'>Бидний тухай</a></li>
          <li><a href='info.php'>Мэдээ </a></li>
          <li><a href='contact.php'>Холбоо барих</a></li>
               <li><a href='login.php'>Нэвтрэх</a></li>
        
      </ul>
      
    </div>

    ";
}
else
{
  $query = $conn->query("SELECT * FROM user WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$conn->close();

  echo "
<div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
          <li ><a href='index.php'>Нүүр</a></li>
          <li><a href='aboutus.php'>Бидний тухай</a></li>
          <li><a href='jor.php'>Жор оруулах</a></li>
          <li><a href='info.php'>Мэдээ </a></li>
       
          <li><a href='contact.php'>Холбоо барих</a></li>

        
      </ul>
       <ul class='nav navbar-nav navbar-right'>
            <li><a href=''><span class='glyphicon glyphicon-user'></span>&nbsp;  ".$userRow['username']." </a></li>
            <li><a href='logout.php?logout'><span class='glyphicon glyphicon-log-out'></span>&nbsp; Гарах</a></li>
          </ul>
    </div>

  ";

}


?>

  
  </div>
</nav>