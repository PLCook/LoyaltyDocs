<?php
	
	 
	
$connection = mysql_connect("localhost","theloyal_admin","blues1611");

	if (!$connection) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	}
	mysql_select_db("theloyal_StoredData", $connection);
	


// Escape user inputs for security

//$name = mysqli_real_escape_string($connection, $_POST['name']);

//$company = mysqli_real_escape_string($connection, $_POST['company']);

//$title = mysqli_real_escape_string($connection, $_POST['title']);

//$email = mysqli_real_escape_string($connection, $_POST['email']);

 

// attempt insert query execution

$sql = "INSERT INTO `Contacts`(`name`, `company`, `title`, `email`) VALUES ('$_POST[name]', '$_POST[company]', '$_POST[title]', '$_POST[email]')";

	if (!mysql_query($sql,$connection)) 
	{ 
		die('Error: ' . mysql_error()); 
	}
	
	mysql_close($connection);

	if($_POST[name] !=''&& $_POST[company] !=''&& $_POST[title] !=''&& $_POST[email] !='')
	{
	// To redirect form on a particular page
	header("Location:about.php");
	}
	
	
	
?>
