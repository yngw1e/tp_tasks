<?php
include "db.php";
session_start();

if (isset($_POST['message']) && isset($_SESSION['login'])) {
	$login = mysqli_real_escape_string($mysqli, $_SESSION['login']);
	$message = mysqli_real_escape_string($mysqli, $_POST['message']);

	$query="insert into messages(login, message)VALUES('".$login."','".$message."')";


	if (mysqli_query($mysqli, $query)) {
		echo "Success";
		header('Location: ./xss.php');
	} else {
		echo "Error";
	}
} else {
	echo "Wrong params";
}