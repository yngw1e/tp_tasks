Push string banned! ImageTragick safe!
<form method=post enctype='multipart/form-data'>
<input name=file type=file>
<input type=submit>
</form>
<?php
    echo "Upload an image";
    if (strpos(file_get_contents($_FILES["file"]["tmp_name"]), "push") !== FALSE) die("Push string banned");
    passthru("identify ".$_FILES["file"]["tmp_name"]." 2>&1");
?>
