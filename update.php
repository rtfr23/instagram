<?php
	$con = mysqli_connect('127.0.0.1', 'root', "", "instagram");
	$id = $_GET["id"];
	$txt = $_GET["text"];
	$img = $_GET["img"];
	mysqli_query($con, "UPDATE posts SET text='{$txt}', user='liubov', img='{$img}' WHERE id={$id}");
	header('Location: index.php');
?>