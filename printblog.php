<?php
	
	 
	
$connection = mysql_connect("localhost","theloyal_admin","blues1611");

	if (!$connection) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	}

	
$stmt = $mysqli->prepare("SELECT author, title, pubdate, blog FROM blogs");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
 
$stmt->execute();
 
$stmt->bind_result($author, $title, $pubdate, $$blog);
 
echo "<ul>\n";
while($stmt->fetch()){
	printf("\t<li>%s %s</li>\n",
		htmlspecialchars($theblog),
		htmlspecialchars($title),
		htmlspecialchars($pubdate),
		htmlspecialchars($blog)
	);
}
echo "</ul>\n";
 
$stmt->close();






?>