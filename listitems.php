 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<?php
if(isset($_POST['cancel_btn'])) {
	//if($_POST['cancel_btn'] == ""){

	echo "<script>location.href='index.php'</script>";
	//}
}



if(isset($_POST['submit_btn'])) {
	$lname = $_POST['lname'];
	$drive = $_POST['drive'];
	$model = $_POST['model'];
	$screen = $_POST['screen'];
	$processor = $_POST['processor'];
		if(( $lname && $drive && $model && $screen && $processor) == 0){
	//$err = "Please fill all the fields";
	echo "<script>alert('Please fill al the fields');location.href = 'listitems.php'</script>";
	exit;
		}
		
require 'db.php';
try {
$query = "INSERT INTO laptops SET laptop_name=?, model_no=?, screen_size = ?, processor = ?, hard_drive = ?, ram_size = ?, graphics = ?, audio = ?, webcam = ?, integrated_wifi = ?, power = ?,warranty = ?,date_reg=?";
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
$stmt->bindParam(13, date('m/d/Y'));
	if($stmt->execute()) {
		echo "<script>alert('Record was saved.');location.href='index.php'</script>";
	} else {

	}
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
} else {
?>
<html>

<body>
	<div class="container">
		<h2>Add the Product Details</h2>
		
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" role = "form" class="form-horizontal">
<input type="hidden" value="<?php echo $laptop_id; ?>" name="pid">
<div class="form-group">
<div class= "form-group">
<label for= "name" class= "col-sm-2">Name:</label>
<div class= col-sm-1>
<input type="text" name="lname" value = "" id="name" class="form-control" />
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Model No:</label>
<div class= col-sm-1>
<input type="number" name="model" value = "" id= "model" class = "form-control" />
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Screen Size:</label>
<div class= col-sm-1>
<input type="number" name="screen" value="" class = "form-control"  /> </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Processor:</label>
<div class= col-sm-2>
<input type="text" name="processor" value="" class = "form-control" />  </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Hard Drive:</label>
<div class= col-sm-2>
<input type="number" name="drive" value="" class = "form-control" />GB </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">RAM:</label>
<div class= col-sm-1>
<input type="number" name="ram" value="" class = "form-control" />
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Graphics:</label>
<div class= col-sm-2>
<input type="text" name="graphics" value="" class = "form-control" />
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Audio:</label>
<div class= col-sm-2>
<input type="text" name="audio" value="" class = "form-control" />
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Webcam:</label>
<div class= col-sm-2>
<input type="text" name="webcam"  value="" class = "form-control" /> </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Integrated Wifi:</label>
<div class= col-sm-2>
<input type="text" name="wifi" value="" class = "form-control" />
</div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Power:</label>
<div class= col-sm-2>
<input type="text" name="power" value="" class = "form-control" /> </div>
</div>
<div class= "form-group">
<label for= "model" class= "col-sm-2">Warranty:</label>
<div class= col-sm-1>
<input type="number" name="warranty" value="" class = "form-control" />Yr </div>
</div>

<input type="submit" name="submit_btn" class="btn btn-primary" value = "Add"/>
<input type="submit" name="cancel_btn" class="btn btn-primary" value = "Cancel"/>
</form>
</div>
</body>
<?php } ?>
</html>