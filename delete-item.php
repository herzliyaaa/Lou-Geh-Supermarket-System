<?php
	include('db/config.php');

	$barcode= $_GET['barcode'];

	mysqli_query($conn, "DELETE FROM items WHERE barcode = '$barcode'");

	header("location:items.php")

?>