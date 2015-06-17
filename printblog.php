<?php
	
	 
	
$conn = mysql_connect("localhost","theloyal_admin","blues1611");

	if (!$conn) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	}


	
$sql = 'SELECT author, title, pubdate, blog FROM blogs';

mysql_select_db('theloyal_StoredData');

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    	echo("<p class=\"bloghead\">" . $row["author"] . "</p>");
	echo("<p class=\"bloghead\">" . $row["title"] . "</p>");
	echo("<p class=\"blogdate\">" . $row["pubdate"] . "</p>");
	echo("<p class=\"blogbody\">" . $row["blog"] . "</p>");
} 


?>

