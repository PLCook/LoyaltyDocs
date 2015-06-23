<?php
	
include("db.php");

	
$sql = 'SELECT `author`, `title`, `pubdate`, `blog` FROM blogs ORDER BY blog_id DESC';



$retval = mysqli_query( $connection, $sql );
if(! $retval )
{
  die('Could not get data:');
}
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    	echo("<p class=\"bloghead\">" . $row["author"] . "</p>");
	echo("<p class=\"bloghead\">" . $row["title"] . "</p>");
	echo("<p class=\"blogdate\">" . $row["pubdate"] . "</p>");
	echo("<p class=\"blogbody\">" . $row["blog"] . "</p>");
} 


?>

