<!DOCTYPE html>
<html>
	<head>
		<title>Basket</title>
		<link rel="stylesheet" type="text/css" href="css/shop.css">
	</head>

	<body>
	
	<div class="header">

		<h1>Basket.</h1>
		<a href="index.php">Back</a>
		
		

	</div>
	<div class="main">
		<hr>
		<?php
			$con = mysql_connect("localhost","user","toor");
			$db = mysql_select_db("datebase");
				if(!$con||!$db)
				{
					exit(mysql_error());
				}

			$total = 0;

			$basket = mysql_query("SELECT * FROM basket");

			while($row = mysql_fetch_array($basket))
				{
					?>
						<div id="content">
						<h4>Title: <?php echo $row['name']?></h4>
						<p>Description: <?php echo $row['description']?></p>
						<img src=<?php echo $row['img'] ?>><br>
						<hr>

						
					</div>
				<?php
				$total+= $row['totalcost'];
				 } 
				 mysql_close();
			?>
			<form action="clear.php" >
						<input  type="submit" value="Clear all basket" />
			<h1> Total cost:
			<?php
				echo $total;
			?>$
			</h1>
	</div>
	</body>


</html>