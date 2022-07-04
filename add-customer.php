<?php
include "db/config.php";
if (isset($_POST['add_customer'])) {

    // $customer_id = $_POST['customer_id'];
    $firstname = $_POST['customer_firstname'];
    $middlename = $_POST['customer_middlename'];
    $lastname = $_POST['customer_lastname'];
    $address = $_POST['customer_address'];
    $contact = $_POST['customer_contact'];


    $sql = "INSERT INTO `customers`(
                    `customer_firstname`,
                    `customer_middlename`,
                    `customer_lastname`,
                    `customer_address`,
                    `customer_contact`
                    )
                   
            
            VALUES     (
                        '$firstname',
                        '$middlename',
                        '$lastname',
                        '$address',
                        '$contact'
                       
                        
                        )";

    mysqli_query($conn, $sql);
    header("location: customers.php");
}
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
