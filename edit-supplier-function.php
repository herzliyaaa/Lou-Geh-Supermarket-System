<?php

if (isset($_POST['edit_supplier'])) {
    include "db/config.php";

    $supplier_id = $_POST['supplier_id'];
    $name = $_POST['supplier_name'];
    $address = $_POST['supplier_address'];
    $contact = $_POST['supplier_contact'];


    $sql = "UPDATE `suppliers` SET
             
                    `supplier_name` = '$name',
                    `supplier_address` = '$address',
                    `supplier_contact` = '$contact'
                    WHERE `supplier_id` = '$supplier_id'";

    mysqli_query($conn, $sql);
    header("location: supplier-details.php?supplier_id=$supplier_id");
}

// if (mysqli_query($conn, $sql)) {
//     echo "New record edited successfully";}

// else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
