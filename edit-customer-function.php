<?php

if (isset($_POST['edit_customer'])) {
    include "db/config.php";

    $customer_id = $_POST['customer_id'];
    $firstname = $_POST['customer_firstname'];
    $middlename = $_POST['customer_middlename'];
    $lastname = $_POST['customer_lastname'];
    $address = $_POST['customer_address'];
    $contact = $_POST['customer_contact'];


    $sql = "UPDATE `customers` SET
             
                    `customer_firstname` = '$firstname',
                    `customer_middlename` = '$middlename',
                    `customer_lastname` = '$lastname',
                    `customer_address` = '$address',
                    `customer_contact` = '$contact'
                    WHERE `customer_id` = '$customer_id'";

    mysqli_query($conn, $sql);
    header("location: customer-details.php?customer_id=$customer_id");
}

// if (mysqli_query($conn, $sql)) {
//     echo "New record edited successfully";}

// else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
