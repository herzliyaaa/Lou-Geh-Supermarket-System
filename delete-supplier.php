<?php
	include('db/config.php');

	$supplier_id= $_GET['supplier_id'];

	mysqli_query($conn, "DELETE FROM suppliers WHERE supplier_id = '$supplier_id'");

	header("location: suppliers.php")

?>