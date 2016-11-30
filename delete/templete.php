<?php 
    require_once("header.php");
    require_once("config/database.php");

 if(isset($_POST['register_bt'])){

    $usernames = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
      //create user
      $password =md5($password); //hash pass
      $sql = "INSERT INTO user (username, email, password) VALUES('$username','$email','$password')";
      mysql_query($db, $sql);
      $_SESSION['message'] = "You are now logged in";
      $_SESSION['username'] = $username; 
    }
    else
    {
      $_SESSION['message']= "The two passwords to do not match";
    }

  $query = $pdo->prepare("SELECT * FROM user WHERE username = '$usernames'");
      $query->execute();
      $count = $query->rowCount();
      var_dump($query);
      var_dump($count);
      if($count == 0){
        echo 'nothing found!';
      }else{
        echo "newterlee";
      }

  
}
  
    
?>
<body>

<div id="frm">
	<form method="POST">
		<p>
			<label>Хэрэглэгчийн нэр:</label>
			<input type="text" id="user" name="username">
		</p>
		<p>
			<label>Нууц үг:</label>
			<input type="password" id="pass" name="password">
		</p>

		<p>
			<input type="submit" id="btn" name="login">
		</p>
</body>

</div>

 <?php if (isset($error)) {
        echo $error;
      }
      ?>

<?php 
require("footer.php");
?>
