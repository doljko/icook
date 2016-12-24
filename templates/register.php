<?php
session_start();

//if(isset($_SESSION['usr_id'])) {
//    header("Location: index.php"); include_once 'config.php';

//set validation error flag as false $error = false;

require("config.php");

    $error = false;
//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Нэрний үсэгнүүд цагаан толгой үсгээс бүрдэнэ.";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Бүртгэлтэй И-мэйл хаягаар нэвтэрнэ үү.";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Нууц үг 6 үсэгээс бүрдэнэ.";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Нууц үг буруу байна.";
    }
    if (!$error) {
        if(mysqli_query($conn, "INSERT INTO user(username,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Амжилттай нэвтэрлээ! <a href='login.php'>Нэвтрэх</a>";
        } else {
            $errormsg = "Алдаатай байна.!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Script</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
    
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Нэвтрэх</a></li>
                <li class="active"><a href="register.php">Бүртгүүлэх</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" method="post" name="signup">
                <fieldset>
                    <legend>Бүртгүүлэх</legend>

                    <div class="form-group">
                        <label for="name">Нэр</label>
                        <input type="text" name="name" placeholder="Нэр" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">И-мэйл</label>
                        <input type="text" name="email"  placeholder="И-мэйл" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Нууц үг</label>
                        <input type="password" name="password" placeholder="Нууц үг" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Нууц үг дахин баталгаажуулах</label>
                        <input type="password" name="cpassword" placeholder="Нууц үг баталгаажуулалт" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signup" value="Бүртгүүлэх" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
   
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>