Insert xml in http://188.166.56.154/a1/command/xxe.php?xml=...
<br />
<?php
ini_set("display_errors", 1); 
libxml_disable_entity_loader(false);
libxml_use_internal_errors(true);
echo $_GET['xml'];
$xml=simplexml_load_string($_GET['xml'], 'SimpleXMLElement', LIBXML_NOENT) or die("Error: Cannot create object");
print_r($xml);
echo '123';
?>
