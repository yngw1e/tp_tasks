<?php
include "db.php";
if (!isset($_POST['login']) || !isset($_POST['pass'])) {
?>
<form action="./register.php" method="POST">
	Login: <input name="login" /><br />
	Password: <input name="pass" type="password" /><br />
	<input type="submit" />
</form>
<?php
} else {
	$login = mysqli_real_escape_string($mysqli, $_POST['login']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
	$query="insert into users(login, pass)VALUES('".$login."','".$pass."')";


	if (mysqli_query($mysqli, $query)) {
		echo "Success";
	} else {
		echo "Error";
	}
}