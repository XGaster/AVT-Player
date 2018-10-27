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
<center><img src="img1.png" style="width:20%"></center>
<style>
body {
  background-image: url("carbon_fibre_v2.png");
  background-position: 50% 50%;
  background-repeat: repeat;
video {
	position: left;
	top: 50%;
	left: 50%;
	transform: translateX
}
</style>
<center>
<body>
<div class=video>
<?php

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysql_query("SELECT * FROM `videos` WHERE id='$id'");
	while($row = mysql_fetch_assoc($query))
	{
		$name = $row['name'];
		$url = $row['url'];
	}
	
#	echo "You are watching ".$name."<br />";
#	echo "<button><a href="$url" download>Scarica l'episodio!</a></button>"
	echo "<video width='70%' height='70%' src='$url' controls></video>";
#	echo "<a href="$url">Download</a>"
}
else
{
	echo "Error!";
}

?>

</div>
<h1></h1>
</center>
</center>
</body>
</html>
