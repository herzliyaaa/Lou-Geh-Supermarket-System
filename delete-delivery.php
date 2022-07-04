<?php
	include('db/config.php');

	$delivery_transaction_id= $_GET['delivery_transaction_id'];

	mysqli_query($conn, "DELETE FROM delivery_transaction WHERE delivery_transaction_id = '$delivery_transaction_id'");

	header("location:delivery-transactions.php")

?>