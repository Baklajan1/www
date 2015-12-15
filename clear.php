<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/shop.css">
	<title>Delete is done!</title>
</head>
<body>

<?php
	$con = mysql_connect("localhost","user","toor");
	$db = mysql_select_db("datebase");
	if(!$con||!$db)
	{
		exit(mysql_error());
	}
	mysql_query("DELETE FROM `basket` WHERE 1");
	mysql_close();
?>
<div class="main" id="content">
	<hr>
	<h1>Your basket is empty!</h1>
		<a align="center" href="index.php">	Back </a>
	<hr>
</div>


</body>
</html>