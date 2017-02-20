<?php
include "db.php";
if (!isset($_POST['login']) || !isset($_POST['pass'])) {
?>
<form action="./login.php" method="POST">
	Login: <input name="login" /><br />
	Password: <input name="pass" type="password" /><br />
	<input type="submit" />
</form>
<?php
} else {
	$login = mysqli_real_escape_string($mysqli, $_POST['login']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
	$query="select login, pass from users where login='".$login."' and pass='".$pass."'";

	$result = mysqli_query($mysqli, $query);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		session_start();
		$_SESSION['login'] = $row['login'];
		echo "Hello ".$_SESSION['login'];
		header('Location: ./xss.php');
	} else {
		echo "Error";
	}
}