 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<?php

require 'db.php';
if(isset($_POST['submit_btn'])) {
	$query = "UPDATE laptops SET laptop_name=?, model_no=?, screen_size = ?, processor = ?, hard_drive = ?, ram_size = ?,graphics = ?,audio = ?,webcam = ?, integrated_wifi = ?, power = ?, warranty = ?WHERE laptop_id=?";
	$stmt = $dbc->prepare($query);
	$stmt->bindParam(1, $_POST['lname']);
	$stmt->bindParam(2, $_POST['model']);
	$stmt->bindParam(3, $_POST['screen']);
	$stmt->bindParam(4, $_POST['processor']);
	$stmt->bindParam(5, $_POST['drive']);
	$stmt->bindParam(6, $_POST['ram']);
	$stmt->bindParam(7, $_POST['graphics']);
	$stmt->bindParam(8, $_POST['audio']);
	$stmt->bindParam(9, $_POST['webcam']);
	$stmt->bindParam(10, $_POST['wifi']);
	$stmt->bindParam(11, $_POST['power']);
	$stmt->bindParam(12, $_POST['warranty']);
	$stmt->bindParam(13, $_POST['pid']);
	
	if($stmt->execute()) {
		echo "<script>alert('Record updated.');location.href='index.php'</script>";
	} else {
		die('Unable to update record.');
	}
} else {
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

if(isset($_POST['cancel_btn'])) {
	echo "<script>alert('Update Cancelled.');location.href='index.php'</script>";
}
?>
<html>
<body>
	<div class="container">
		<h2>Edit the Product Details</h2>
<form action="" method="POST" role = "form" class="form-horizontal">
<input type="hidden" value="<?php echo $laptop_id; ?>" name="pid">
<div class="form-group">
<div class= "form-group">
<label for= "name" class= "col-sm-2">Name:</label>
<div class= col-sm-1>
<input type="text" name="lname" value = "<?php echo $lname; ?>" id="name" class="form-control"/>
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Model No:</label>
<div class= col-sm-1>
<input type="number" name="model" value = "<?php echo $model; ?>" id= "model" class = "form-control"/>
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Screen Size:</label>
<div class= col-sm-1>
<input type="number" name="screen" value="<?php echo $screen; ?>" class = "form-control"/> </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Processor:</label>
<div class= col-sm-2>
<input type="text" name="processor" value="<?php echo $processor; ?>" class = "form-control"/>  </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Hard Drive:</label>
<div class= col-sm-2>
<input type="number" name="drive" value="<?php echo $drive; ?>" class = "form-control"/>GB </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">RAM:</label>
<div class= col-sm-1>
<input type="number" name="ram" value="<?php echo $ram; ?>" class = "form-control"/>
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Graphics:</label>
<div class= col-sm-2>
<input type="text" name="graphics" value="<?php echo $graphics; ?>" class = "form-control"/>
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Audio:</label>
<div class= col-sm-2>
<input type="text" name="audio" value="<?php echo $audio; ?>" class = "form-control"/>
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Webcam:</label>
<div class= col-sm-2>
<input type="text" name="webcam"  value="<?php echo $webcam; ?>" class = "form-control"/> </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Integrated Wifi:</label>
<div class= col-sm-2>
<input type="text" name="wifi" value="<?php echo $wifi; ?>" class = "form-control"/>
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Power:</label>
<div class= col-sm-2>
<input type="text" name="power" value="<?php echo $power; ?>" class = "form-control"/> </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Warranty:</label>
<div class= col-sm-1>
<input type="number" name="warranty" value="<?php echo $warranty; ?>" class = "form-control"/>Yr </div>
</div>

<input type="submit" name="submit_btn" class="btn btn-primary" value = "Update"/>
<input type="submit" name="cancel_btn" class="btn btn-primary" value = "Cancel"/>
</form>
</div>
</body>
<?php } ?>
</html>