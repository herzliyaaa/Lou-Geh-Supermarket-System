<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lougehdb";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
	echo "Connection failed!";
}