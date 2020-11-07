<?php
	$name = $_GET["name"];
	$desc = $_GET["desc"];
	$file = $_GET["file"];
	$con = mysqli_connect('127.0.0.1', 'root', "", "instagram");
	mysqli_query($con, "INSERT  INTO posts (text, img, user) VALUES ('$desc', '$file', '$name')");
	header('Location: index.php');
?>
