<?php
include "db/config.php";
if (isset($_POST['add_item_btn'])) {

    $barcode = $_POST['barcode'];
    $product_description = $_POST['product_description'];
    $quantity = $_POST['quantity'];
    $cost_per_unit = $_POST['cost_per_unit'];



    $sql = "INSERT INTO `items`(
                    `barcode`,
                    `product_description`,
                    `quantity`,
                    `cost_per_unit`)
                   
            
            VALUES     (
                        '$barcode',
                        '$product_description',
                        '$quantity',
                        '$cost_per_unit'
                       
                        
                        )";

    mysqli_query($conn, $sql);
    header("location: items.php");
}
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
