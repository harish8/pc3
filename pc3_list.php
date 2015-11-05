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
  
	<div class= "container">
<h1>Pc3 - Personal computer cost and config Details</h1>
  <p>
    Its just a simple web application purely written in php. This application basically concentrated on the crud functionality saving and retrieving  all the information into the database.  
  </p>
<?php
	require 'db.php';
	try {
	$query = "SELECT * FROM laptops";
	$stmt = $dbc->prepare($query);
	$stmt->execute();
	echo "<table  class = 'table table-bordered table-hover table-striped'>";
	echo "<thead>";
	echo "<tr>";
	//echo "<th>ID</th>";
	echo "<th>Laptop Name</th>";
	echo "<th>Model No</th>";
	echo "<th>Screen Size</th>";
	echo "<th>Processor</th>";
	echo "<th>Hard Drive</th>";
	echo "<th>RAM</th>";
	echo "<th>Graphics</th>";
	echo "<th>Audio</th>";
	echo "<th>Webcam</th>";
	echo "<th>Integrated Wifi</th>";
	echo "<th>Power</th>";
	echo "<th>Warranty</th>";
	echo "<th>Edit/Delete</th>";
	echo "</tr>";
	echo "</thead>";
	echo"<tbody>";
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
	
	echo "<tr>";
	//echo "<td>{$laptop_id}</td>";
	echo "<td>{$laptop_name}</td>";
	echo "<td>{$model_no}</td>";
	echo "<td>{$screen_size}</td>";
	echo "<td class='col-sm-2'>{$processor}</td>";
	echo "<td>{$hard_drive}</td>";
	echo "<td>{$ram_size}</td>";
	echo "<td>{$graphics}</td>";
	echo "<td>{$audio}</td>";
	echo "<td>{$webcam}</td>";
	echo "<td>{$integrated_wifi}</td>";
	echo "<td class='col-sm-1'>{$power}</td>";
	echo "<td>{$warranty}</td>";
	echo "<td class='col-sm-2'><a href='view.php?id={$laptop_id}'>View</a> / <a href='delete.php?id={$laptop_id}'>Delete</a> / <a href = 'edit.php?id={$laptop_id}'>Edit</a></td>";
	echo "</tr>";
	echo "</tbody>";
	}
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
?>
	</>
	</table> </br>
	<a href="listitems.php">Add Data</a> </br>
	</div>
</body>

</html>