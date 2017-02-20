<?php
include "db.php";

$sql = "SELECT login, attack_points, defense_points FROM users ORDER BY attack_points DESC";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table><thead><th>Login</th><th>Attack Points</th><th>Defense Points</th></thead><tbody>';
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["login"]. "</td><td>" . $row["attack_points"]. "</td><td>" . $row["defense_points"] ."</td></tr>";
    }
    echo '</tbody></table>';
}