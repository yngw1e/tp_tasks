<?php
include "db.php";

session_start();
if (!isset($_POST['flag']) || !isset($_SESSION['login'])) {
?>
<form action="./submit_flag.php" method="POST">
	Flag: <input name="flag" /><br />
	<input type="submit" />
</form>
<?php
} else {
	$login = $_SESSION['login'];
	if (file_exists("/var/lib/php/sessions/sess_".$_POST['flag'])) {
		$x = file_get_contents("/var/lib/php/sessions/sess_".$_POST['flag']);
		$arr = explode('"', $x);
		$session_login = $arr[count($arr)-2];
		if ($session_login !== $login) {
			$y = mysqli_real_escape_string($mysqli, $login);
			echo $y;
			mysqli_query($mysqli, "UPDATE users SET attack_points=attack_points+1 WHERE login='".$y."'");
			$z = mysqli_real_escape_string($mysqli, $session_login);
			echo $z;
			mysqli_query($mysqli, "
			    UPDATE users 
			    SET defense_points = defense_points - 1
			    WHERE login = '".$z."'
			");
			unlink("/var/lib/php/sessions/sess_".$_POST['flag']);
			echo "+1 flag!";
		}
	} 
}