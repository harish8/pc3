<?php
require 'db.php';
try {
$query = 'DELETE FROM laptops WHERE laptop_id=?';
$stmt = $dbc->prepare($query);
$stmt->bindParam(1, $_GET['id']);
if($stmt->execute()) {
	echo "<script>alert('Record deleted.');location.href='index.php'</script>";
} else {
	die('Unable to delete record.');
}
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>