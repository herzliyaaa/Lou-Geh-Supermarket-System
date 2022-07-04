<?php
include "db/config.php";
if (isset($_POST['add_delivered'])) {

    $name = $_POST['supplier_name'];
    $barcode = $_POST['barcode'];
    $product_description = $_POST['product_description'];
    $quantity = $_POST['quantity'];
    $cost_per_unit = $_POST['cost_per_unit'];
    $total = $_POST['total'];


    $sql = "INSERT INTO `delivery_transaction`(
                    `supplier_name`,
                    `barcode`,
                    `product_description`,
                    `quantity`,
                    `cost_per_unit`,
                    `total`
                    )
                   
            
            VALUES     (
                        '$name',
                        '$barcode',
                        '$product_description',
                        '$quantity',
                        '$cost_per_unit',
                        '$total'
                        )";

    mysqli_query($conn, $sql);
    header("location: delivery-transactions.php");
}
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
