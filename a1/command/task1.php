<?php
if ($_GET['str']) {
    system('echo "'.$_GET['str'].'" | tr \'[:upper:]\' \'[:lower:]\'');
} else {
    echo "To get lowercased value use http://188.166.56.154/a1/command/task1.php?str=STRING_TO_LOWERCASE\n";
}
echo "<!-- system('echo \"'.\$_GET['str'].'\" | tr \'[:upper:]\' \'[:lower:]\'') -->";
