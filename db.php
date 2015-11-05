<?php
try {
$dbc = new PDO('mysql:host=localhost; dbname=hariwvga_pc3', 'hariwvga_pc3', 'passwordpc3');
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
?>