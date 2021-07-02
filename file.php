<?php
if (isset($_FILES['file'])) {
	$directory = './slips/';
	$date = date_create();
	$name = date_timestamp_get($date).".".pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
	move_uploaded_file($_FILES['file']['tmp_name'], $directory.$name);
	echo substr($directory.$name, 1);
} else header("Location: .");