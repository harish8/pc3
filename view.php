 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<?php

require 'db.php';

try {
$query = "SELECT * FROM laptops WHERE laptop_id=?";
$stmt = $dbc->prepare($query);
$stmt->bindParam(1, $_GET['id']);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$lname = $row['laptop_name'];
$model = $row['model_no'];
$screen = $row['screen_size'];
$processor = $row['processor'];
$drive = $row['hard_drive'];
$ram = $row['ram_size'];
$graphics = $row['graphics'];
$audio = $row['audio'];
$webcam = $row['webcam'];
$wifi = $row['integrated_wifi'];
$power = $row['power'];
$warranty = $row['warranty'];
$laptop_id = $row['laptop_id'];
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>
<html>
<body>
    <div class= "container">
<form action="index.php" method="POST" role = "form" class="form-horizontal">
<input type="hidden" value="<?php echo $laptop_id; ?>" name="pid">

<h1> <?php echo $lname; ?> Laptop</h1></br>
<p>
Model No:<b><?php echo $model; ?></b></br>
Screen Size: <b><?php echo $screen; ?></b></br>
Processor: <b><?php echo $processor; ?></b></br>
Hard Drive:<b><?php echo $drive; ?></b></br>
RAM: <b><?php echo $ram; ?></b></br>
Graphics: <b><?php echo $graphics; ?></b></br>
Audio: <b><?php echo $audio; ?></b></br>
Webcam: <b><?php echo $webcam; ?> </b></br>
Integrated Wifi: <b><?php echo $wifi; ?></b></br>
Power: <b><?php echo $power; ?></b></br>
Warranty: <b><?php echo $warranty; ?></b></br>
</p>
<?php
echo "<br><a href='delete.php?id={$laptop_id}'>Delete</a> / <a href = 'edit.php?id={$laptop_id}'>Edit</a></td>";
?>
<br>
<input type="submit" name="submit_btn" value= "Go Back" class="btn btn-primary"/>
</form>
</div>
</body>

</html>