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

<body id="body-pd">
    <?php include 'components/sidebar.php'; ?>

    <!--Container Main start-->
    <div class="container-fluid">
        <div class="d-flex justify-content-start p-3">
            <h1>SALES TRANSACTIONS</h1>
        </div>


        <!-- start add modal -->
        <div id="myModal" class="modal">
            <div class="modal-content" style="  margin: 10% auto;">
                <span class="close" id="add-modal-close">&times;</span>
                <div class="modal-container">
                    <div class="modal-form">
                        <form action="add-item.php" method="post" style="width: 20rem;">
                            <div class="py-2">
                                <label class="modal-label">Customer Name</label>
                                <input name="barcode">
                            </div>

                            <div class="py-2">
                                <label class="modal-label">Item Description</label>
                                <input name="product_description">
                            </div>

                            <div class="py-2">
                                <label class="modal-label">Item Quantity</label>
                                <input name="quantity">
                            </div>


                            <div class="py-2">
                                <label class="modal-label">Cost per Unit</label>
                                <input name="cost_per_unit">
                            </div>

                            <div class="py-2">
                                <label class="modal-label">Total</label>
                                <input name="cost_per_unit">
                            </div>

                            <div class="py-2 d-flex justify-content-end align-items-end">
                                <button type="submit" name="add_item_btn" class="primary-btn">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->


        <div>
            <div class="d-flex p-3 m-0 justify-content-center" style="flex-direction: column;">
                <div class='d-flex p-1 justify-content-end align-items-end'>
                    <button class='primary-btn' id="myBtn">NEW TRANSACTION</button>
                </div>

                <div class='item-table-container'>
                    <table id="example" style="width: 100%;" class="display">
                        <thead>
                            <tr>
                                <th>SALES TRANSACTION ID</th>
                                <th>CUSTOMER NAME</th>
                                <th>BARCODE</th>
                                <th>ITEM DESCRIPTION</th>
                                <th>ITEM QUANTITY</th>
                                <th>COST PER UNIT</th>
                                <th>TOTAL</th>
                                <th style="text-align: center;">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sales_query =  mysqli_query($conn, "select * from sales_transactions");
                            while ($row = mysqli_fetch_array($sales_query)) {
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $row['sales_transaction_id'] ?></td>
                                    <td><?php echo $row['customer_name'] ?></td>
                                    <td><?php echo $row['barcode'] ?></td>
                                    <td><?php echo $row['product_description'] ?></td>
                                    <td><?php echo $row['quantity'] ?></td>
                                    <td><?php echo $row['cost_per_unit'] ?></td>
                                    <td><?php echo $row['total'] ?></td>
                                    <td style="text-align: center;">
                                        <a class="edit-btn" href="sales-details.php?sales_transaction_id=<?php echo $row['sales_transaction_id'] ?>">
                                            <i class='bx bx-info-circle'></i>
                                        </a>

                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Container Main end-->

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>

</body>

</html>