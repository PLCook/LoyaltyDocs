<?php

$connection = mysql_connect("localhost","loyalty","blues1611");

	if (!$connection) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	}
	mysql_select_db("theloyal_GuestData", $connection);

/*function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM users where name = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['name']) AND !empty($row['password']))
	{
		$_SESSION['userName'] = $row['pass'];
		
		header("Location: writeblog.php");

	}
	if(empty($row['name']) OR empty($row['password']))
	{
		header("Location: blog.php");
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}*/

session_start();

	

	if (isset($_POST['user']) and isset($_POST['pass'])){



	$username = $_POST['user'];

	$password = $_POST['pass'];



	$query = "SELECT * FROM `users` WHERE name='$username' and password='$password'";

	  

	$result = mysql_query($query) or die(mysql_error());

	$count = mysql_num_rows($result);


	if ($count == 1){

	$_SESSION['username'] = $username;

	header("Location: writeblog.php");

}

else{



	echo "Invalid Login Credentials.";

	}

	}


?>