<?php
	
	 
	
include ("db.php");
	


// Escape user inputs for security

$name = mysqli_real_escape_string($connection, $_POST['name']);

$company = mysqli_real_escape_string($connection, $_POST['company']);

$title = mysqli_real_escape_string($connection, $_POST['title']);

$email = mysqli_real_escape_string($connection, $_POST['email']);

 

// attempt insert query execution

$sql = "INSERT INTO `Contacts`(`name`, `company`, `title`, `email`) VALUES ('$name', '$company', '$title', '$email')";

	if (!mysqli_query($connection, $sql)) 
	{ 
		die('Error: ' . mysqli_error()); 
	}
	
	mysqli_close($connection);

	if($name !=''&& /*$company !=''&& $title !='' &&*/ $email !='')
	{
	// To redirect form on a particular page
	header("Location:about.php");
	}
	
	
	
?>
