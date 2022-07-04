<?php
include "db/config.php";
if (isset($_POST['add_supplier'])) {

    // $barcode = $_POST['barcode'];
    $name = $_POST['supplier_name'];
    $address = $_POST['supplier_address'];
    $contact = $_POST['supplier_contact'];



    $sql = "INSERT INTO `suppliers`(
                    `supplier_name`,
                    `supplier_address`,
                    `supplier_contact`)
                   
            
            VALUES     (
             
                        '$name',
                        '$address',
                        '$contact'
                       
                        
                        )";

    mysqli_query($conn, $sql);
    header("location: suppliers.php");
}
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
