<!DOCTYPE html>
<html>
<head>
	<title>insert is done!</title>
</head>
<body>

		<?php

		$con = mysql_connect("localhost","user","toor");
		$db = mysql_select_db("datebase");

		$p = $_POST['buy'];
		$id = $_POST['i_id'];
		$name = $_POST['i_name'];
		$img = $_POST['i_img'];

		mysql_query("INSERT INTO `datebase`.`basket` (`id`, `totalcost`,`name`, `img`) VALUES ('$id', '$p','$name','$img')") ;

		mysql_close();

		?>
		<hr>
		<h1>Item successfully added to the cart!</h1>
		<hr>
		<a href="basket.php"><h1>Basket</h1></a>
		<a href="index.php"><h1>Back</h1></a>

</body>
</html>
