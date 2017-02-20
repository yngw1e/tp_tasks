<?php
include 'db.php';

session_start();
if (!isset($_SESSION['login'])) {
?>
<form action="./login.php" method="POST">
	Login: <input name="login" /><br />
	Password: <input name="pass" type="password" /><br />
	<input type="submit" />
</form>
<?php
} else {
?>
<div>
<?php
	echo "Hello ".$_SESSION['login'];
	?>
  <h3>Messages</h3>
</div>
<?php
	$sql = "SELECT login, message FROM messages ORDER BY message_id DESC limit 10";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<h5>" . $row["login"]. "</h5><p>" . $row["message"]. "</p><br>";
	    }
	}
?>
<form action="./send_message.php" method="POST">
	Message: <textarea name="message" ></textarea><br />
	<input type="submit" />
</form>
<?php
}

