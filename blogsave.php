<?php

$connection = mysql_connect("localhost","theloyal_admin","blues1611");

	if (!$connection) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	}
	mysql_select_db("theloyal_StoredData", $connection);

if(!empty($_POST['name']) && ($_POST['blogtext']))   
{
	$query = mysql_query("INSERT INTO blogs(author, title, blog) values ('$_POST[name]', '$_POST[title]', '$_POST[blogtext]')") or die(mysql_error());

	header("Location: blog.php");
}

?>
