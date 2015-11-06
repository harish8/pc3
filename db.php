<?php
try {
$dbc = new PDO('mysql:host=localhost; dbname=yourdbname', 'username', 'password');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>
