<?php
	include('db/config.php');

	$sales_transaction_id= $_GET['sales_transaction_id'];

	mysqli_query($conn, "DELETE FROM sales_transaction WHERE sales_transaction_id = '$sales_transaction_id'");

	header("location:sales-transactions.php")

?>