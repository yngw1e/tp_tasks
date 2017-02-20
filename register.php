<?php
if (!isset($_POST['login']) || !isset($_POST['pass'])) {
?>

<?php
} else {
<form action="./register.php">
	<input name="login" />
	<input name="pass" type="password" />
</form>
}