<?php 
require("header.php");
?>


<?php
//session_start();
if (isset($_SESSION['userSession'])!="") {
    header("Location: header.php");
}
require_once 'config/config.php';

if(isset($_POST['btn-signup'])) {
    
    $uname = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $upass = strip_tags($_POST['password']);
    
    $uname = $conn->real_escape_string($uname);
    $email = $conn->real_escape_string($email);
    $upass = $conn->real_escape_string($upass);
    
    $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
    
    $check_email = $conn->query("SELECT email FROM user WHERE email='$email'");
    $count=$check_email->num_rows;
    
    if ($count==0) {
        
        $query = "INSERT INTO user(username,email,passwords) VALUES('$uname','$email','$hashed_password')";
    
        if ($conn->query($query)) {
            $msg = "<div class='alert alert-success'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Амжилттай бүртгэгдлээ!
                    </div>";
        }else {
            $msg = "<div class='alert alert-danger'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Бүртгэлд алдаа гарлаа!
                    </div>";
        }
        
    } else {
        
        
        $msg = "<div class='alert alert-danger'>
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
                </div>";
            
    }
    
    $conn->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<br><br><br>
<div class="signin-form">

        
       <form class="form-signin" method="post" id="register-form">
      
        <h4 class="form-signin-heading">Бүртгүүлэх</h4><hr />
        
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Хэрэглэгчийн нэр" name="username" required  />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="И-мэйл" name="email" required  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Нууц үг" name="password" required  />
        </div>
        
        <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Шинээр хэрэглэгч үүсгэх
            </button> 
            <a href="login.php" class="btn btn-default" style="float:right;">Нэвтрэх</a>
        </div> 
      
      </form>


    
</div>

</body>
</html>
<?php 
require("footer.php");
?>
