<?php

mysql_connect("IP","USERNAME","PASSWORD");
mysql_select_db("DB_NAME");

if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];
	
	move_uploaded_file($temp,"uploaded/".$name);
	$url = "LINKOFDIRECTLINK";
	mysql_query("INSERT INTO `videos` VALUE ('','$name','$url')");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Streaming & Download</title>
</head>

<body>

<a href="videos.php">Videos</a>
<form action="uploader.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" />
    <input type="submit" name="submit" value="Upload!" />
</form>

<?php

if(isset($_POST['submit']))
{
	echo "<br />".$name." has been uploaded";
}

?>

</body>
</html>
