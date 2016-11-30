<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: login.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: jor.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: login.php");
}
