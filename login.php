<?php 
require("header.php");
?>
<?php
session_start();
require_once 'config/config.php';

if (isset($_SESSION['userSession'])!="") {
    header("Location: jor.php");
    exit;
}

if (isset($_POST['btn-login'])) {
    
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);
    
    $query = $conn->query("SELECT user_id, email, passwords FROM user WHERE email='$email'");
    $row=$query->fetch_array();
    
    $count = $query->num_rows; // if email/password are correct returns must be 1 row
    
    if (password_verify($password, $row['passwords']) && $count==1) {
        $_SESSION['userSession'] = $row['user_id'];
        header("Location: jor.php");
    } else {
        $msg = "<div class='alert alert-danger'>
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
                </div>";
    }
    $conn->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coding Cage - Login & Registration System</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<br><br>
<div class="signin-form">

    <div class="container">
     
    
       <form class="form-signin" method="post" id="login-form">
      
        <h4 class="form-signin-heading">Нэвтрэх хэсэг</h4><hr />
        
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="И-мэйл" name="email"  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Нууц үг" name="password"  />
        </div>
       
        <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Нэвтрэх
            </button> 
            
            <a href="burtgel.php" class="btn btn-default" style="float:right;">Бүртгүүлэх</a>
            
        </div>  
        
        
      
      </form>

    </div>
    
</div>

</body>
</html>
<?php 
require("footer.php");
?>