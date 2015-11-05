<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laptops List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body>
	</br>
	
	<div class= "container">
	  <h1>List of Products</h1>
		<p  align = "center"><a href="listitems.php">Add Data</a> </p></br>
		 <div class="table-responsive">
<?php
	require 'db.php';
	try {
	$query = "SELECT * FROM laptops";
	$stmt = $dbc->prepare($query);
	$stmt->execute();
	//echo "<table  class = 'table table-bordered table-hover table-striped' >";
	//echo "<thead>";
	//echo "<tr>";
	////echo "<th>ID</th>";
	//echo "<th>Laptop Name</th>";
	//echo "<th>Model No</th>";
	//echo "<th>Screen Size</th>";
	//echo "<th>Processor</th>";
	//echo "<th>Hard Drive</th>";
	//echo "<th>RAM</th>";
	//echo "<th>Graphics</th>";
	//echo "<th>Audio</th>";
	//echo "<th>Webcam</th>";
	//echo "<th>Integrated Wifi</th>";
	//echo "<th>Power</th>";
	//echo "<th>Warranty</th>";
	//echo "<th>Edit/Delete</th>";
	//echo "</tr>";
	//echo "</thead>";
	//echo"<tbody>";
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
	
	echo "<tr>";
	//echo "<td>{$laptop_id}</td>";
	echo "<br><h2>{$laptop_name} Laptop</h2>";
	echo "<br>Model No:	<b>{$model_no} </b>";
	echo "<br>Screen Size: 	<b>{$screen_size} </b>";
	//echo "<td class='col-sm-2'>{$processor}</td>";
	echo "<br>Processor: 	<b>{$processor} </b>";
	echo "<br>Hard Drive:	<b>{$hard_drive} </b>";
	echo "<br>Ram:	<b>{$ram_size} </b>";
	echo "<br>Graphics:	<b>{$graphics} </b>";
	echo "<br>Audio	<b>{$audio} </b>";
	echo "<br>Webcam:	<b>{$webcam} </b>";
	echo "<br>Integrated Wifi:	<b>{$integrated_wifi} </b>";
	echo "<br>Power:	<b>{$power} </b>";
	echo "<br>Warranty:	<b>{$warranty} </b>";
	echo "<br><a href='view.php?id={$laptop_id}'>View</a> / <a href='delete.php?id={$laptop_id}'>Delete</a> / <a href = 'edit.php?id={$laptop_id}'>Edit</a></td>";
	echo "</tr>";
	echo "</tbody>";
	}
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
?>
	
	</table>
	</div>
	
	</div>
</body>

</html>