<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Vaccine Laboratories</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Test Name - Search Box</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="index.php" class="btn btn-success">Back</a>
		
		<?php
			require '../database/connDB.php';
			if(ISSET($_REQUEST['id']))
			{
				$query = mysqli_query($conn, "SELECT * FROM `lab_test`
				 WHERE `id` = '$_REQUEST[id]'")
				 or die(mysqli_error($conn));
				$fetch = mysqli_fetch_array($query);
		?>
				<h3><?php echo $fetch['test_name']?></h3>
				<p><?php echo nl2br($fetch['synonymus'])?></p>
		<?php
			}
		?>
		
	</div>
</body>
</html>