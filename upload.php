<?php
$filename = time() . rand() . '_' . basename($_FILES['file']['name']);
if($_FILES['file']['size'] > 10000000)
	die('File too big');
if(!move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $filename . '.stuf'))
	die('Failed to upload file');
file_put_contents('creation_date/' . $filename . '.sfdb', time());
echo '<a href="download.php?file=' . $filename . '">File</a>';