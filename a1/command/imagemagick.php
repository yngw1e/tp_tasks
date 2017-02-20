<?php
    echo "Upload an image";
    passthru("identify ".$_FILES["file"]["tmp_name"]." 2>&1");
?>
<form method=post enctype='multipart/form-data'>
<input name=file type=file>
<input type=submit>
</form>
