<!DOCTYPE html>
<html>
	<head>
		<title>Market</title>
		<link rel="stylesheet" type="text/css" href="css/shop.css">
	</head>

	<body>
	
	<div class="header">

		<h1 class="title" > Cars.</h1>
		<a href="basket.php" ><h4>Basket</h4></a>
		<hr>

	</div>

	</div>
	<div class="main">

		<?php
			$con = mysql_connect("mysql.hostinger.com.ua","u501054919_1","59ezeten");
			$db = mysql_select_db("u501054919_1");
				if(!$con||!$db)
				{
					exit(mysql_error());
				}

			$items = mysql_query("SELECT * FROM items");
			
			while($row = mysql_fetch_array($items))
				{
					?>
						<div id="content">
						<h4>Title: <?php echo $row['name']?></h4>
						<p>Description: <?php echo $row['description']?></p>
						<img src=<?php echo $row['img'] ?>><br>
						<form method="post" action="insert.php">
							<input type="submit" name = "buy" value=<?php echo $row['price']?>$>
							</input>
							<input type="hidden" name = "i_id" value=<?php echo $row['id']?>>
							</input>
							<input type="hidden" name = "i_name" value=<?php echo $row['name']?>>
							</input>
							<input type="hidden" name = "i_img" value=<?php echo $row['img']?>>
							</input>
						</form>
						<hr>

					</div>
				<?php

				 } 
				 mysql_close();
			
			?>

	</div>

	<div class="footer">

		<a href="mailto:Brehunov.aleksey.95@gmail.com"  style="color:black;"><h1 align="center" > Author.</h1></a>
		
		<hr>

	</div>


	</body>


</html>