<?php

$directory = 'uploads/';
$file = $directory .  basename($_FILES['image']['name']);
$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));


if (isset($_POST['submit'])) {
	$check = getimagesize($_FILES['image']['tmp_name']);
}   if ($check === false) {
	$errors['image'] = "Only image is allowed";
}

if (file_exists($file)) {
	$errors['image'] = "Sorry your image is already exists";
}

if ($_FILES['image']['size'] > 5 * 1024 * 1024) {
	$errors['image'] = "Sorry, your image is too large";
}

if ($imageFileType !== 'png' && $imageFileType !== 'jpg' && $imageFileType !== 'jpeg' && $imageFileType !== 'gif') {
	$errors['image'] ="Please upload requested image format";
}

else {
	move_uploaded_file($_FILES['image']['tmp_name'], $file);
}





