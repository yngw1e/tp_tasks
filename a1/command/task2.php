<?php
if ($_GET['str']) {
    $command = 'echo "'.$_GET['str'].'" | tr \'[:upper:]\' \'[:lower:]\'';
    $command = str_replace('|', '', $command);
    $command = str_replace('`', '', $command);
    system($command);
} else {
    echo "To get lowercased value use http://188.166.56.154/a1/command/task1.php?str=STRING_TO_LOWERCASE\n";
}
echo "<!-- system('echo \"'.\$_GET['str'].'\" | tr \'[:upper:]\' \'[:lower:]\'') -->";
