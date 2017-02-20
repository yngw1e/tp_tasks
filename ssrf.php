<?php
$url = escapeshellarg($_GET['url']);
passthru('curl -m5 '.$url);