<?php
session_start();
if (!isset($_SESSION['login'])) {
?>
<form action="./login.php">
	<input name="login" />
	<input name="pass" type="password" />
</form>
<?php
} else {
<div>
  <h3>Messages</h3>
</div>
}
