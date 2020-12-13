<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h2>Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		require '../database/connDB.php';
		$query = mysqli_query($conn, "SELECT * FROM `lab_test`
		 WHERE `test_name` LIKE '%$keyword%' 
		 ORDER BY `test_name`") or die(mysqli_error($query));

		while($fetch = mysqli_fetch_array($query)){
	?>

	<div style="word-wrap:break-word;">
	<a href="get.php?id=<?php echo $fetch['id']?>">
		<h4><?php echo $fetch['test_name']?></h4>
	</a>
		<p><?php echo substr($fetch['synonymus'], 0, 100)?>...</p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>