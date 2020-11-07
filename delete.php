<?php
	$con = mysqli_connect('127.0.0.1', 'root','','instagram');
	 $id = $_GET["id"];
	 mysqli_query($con, "DELETE FROM posts WHERE id=$id");
	 header('Location: index.php');
?>