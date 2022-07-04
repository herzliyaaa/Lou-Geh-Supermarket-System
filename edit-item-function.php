<?php

if (isset($_POST['edit_item_btn'])) {
    include "db/config.php";

    $barcode = $_POST['barcode'];
    $product_description = $_POST['product_description'];
    $quantity = $_POST['quantity'];
    $cost_per_unit = $_POST['cost_per_unit'];


    $sql = "UPDATE `items` SET
             
                    `product_description` = '$product_description',
                    `quantity` = '$quantity',
                    `cost_per_unit` = '$cost_per_unit'
                    WHERE `barcode` = '$barcode'";

    mysqli_query($conn, $sql);
    header("location: item-details.php?barcode=$barcode");
}

// if (mysqli_query($conn, $sql)) {
//     echo "New record edited successfully";}

// else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
