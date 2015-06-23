<?php
$connection = mysqli_connect("localhost","loyalty","blues1611");

	if (!$connection) 
	{ 
		die('Could not connect: ' . mysqli_error()); 
	}
	mysqli_select_db($connection, "theloyal_GuestData");



?>