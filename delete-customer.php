<?php
	include('db/config.php');

	$customer_id= $_GET['customer_id'];

	mysqli_query($conn, "DELETE FROM customers WHERE customer_id = '$customer_id'");

	header("location:customers.php")

?>