<?php

mysql_connect("IP","USERNAME","PASSWORD");
mysql_select_db("DB_NAME");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Streaming & Download</title>
</head>

<body>

<?php

$query = mysql_query("SELECT * FROM `videos`");
while($row = mysql_fetch_assoc($query))
{
	$id = $row['id'];
	$name = $row['name'];
	
	echo "<a href='index.php?id=$id'>$name</a><br />";
}

?>

</body>
</html>
