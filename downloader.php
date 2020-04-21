<?php
if(time() - file_get_contents('creation_date/' . $_GET['file'] . '.sfdb') > 10800)
    die('File is 3 hours old and no longer accessable');
echo file_get_contents('uploads/' . $_GET['file'] . '.stuf');
header('Content-Disposition: attachment; filename="'. substr($_GET['file'], 21) . '"');