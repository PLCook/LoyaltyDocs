<?php

include("db.php");

	$name = mysqli_real_escape_string($connection, $_POST['name']);

	$title = mysqli_real_escape_string($connection, $_POST['title']);

	$blogtext = mysqli_real_escape_string($connection, $_POST['blogtext']);

	$query = "INSERT INTO `blogs`(`author`, `title`, `blog`) values ('$name', '$title', '$blogtext')";

	if (!mysqli_query($connection, $query)) 
	{ 
		die('Error: ' . mysqli_error()); 
	}
	
	mysqli_close($connection);

	if($name !=''&& /*$company !=''&& $title !='' &&*/ $blogtext !='')


	header("Location: blog.php");


?>
