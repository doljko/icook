<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tutorial-10</title>
</head>
<body>
<?php
session_start();
if($_SESSION['user_name'] == '')
{
header("Location: index.php");
exit;
}
echo "Hi ".$_SESSION['user_name'];
?>
<a href="logout.php">Logout</a>
</body>
</html>