<?php include "db/config.php"; 
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="assets/js/script.js" defer></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <title>Lou Geh Supermarket</title>
</head>

<body >


    <!--Container Main start-->
    <div class="container-fluid">
        <div class="d-flex justify-content-start p-3">
            <h1>ITEMS</h1>
        </div>


    

    <div>
        <div class="d-flex p-3 m-0 justify-content-center" style="flex-direction: column;">
        
            <div class='item-table-container'>
                <table id="example" style="width: 100%;" class="display">
                    <thead>
                        <tr>
                            <th>BARCODE</th>
                            <th>PRODUCT DESCRIPTION</th>
                            <th>ITEM QUANTITY</th>
                            <th>COST PER UNIT</th>
                            <th style="text-align: center;">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $items_query =  mysqli_query($conn, "select * from items");
                        while ($row = mysqli_fetch_array($items_query)) {
                        ?>
                            <tr>
                                <td scope="row"><?php echo $row['barcode'] ?></td>
                                <td><?php echo $row['product_description'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td><?php echo $row['cost_per_unit'] ?></td>
                                <td style="text-align: center;">
                                    <a class="edit-btn" href="item-details.php?barcode=<?php echo $row['barcode'] ?>">
                                        <i class='bx bx-info-circle'></i>
                                    </a>

                                    <!-- <button class="edit-btn" id="editBtn">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="delete-btn" id="delBtn">
                                        <i class='bx bx-trash'></i>
                                    </button> -->
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <button onclick="window.print()">PRINT THIS PAGE</button>
    </div>
    <!--Container Main end-->

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>