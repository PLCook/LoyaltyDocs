<?php

$connection = mysql_connect("localhost","theloyal_admin","blues1611");

	if (!$connection) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	}
	mysql_select_db("theloyal_StoredData", $connection);
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
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
}

?>



