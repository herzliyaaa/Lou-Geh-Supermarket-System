
<?php
 $page = 'Items';
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
            <h1>ITEM DETAILS</h1>
        </div>



        <div>
            <div class="d-flex p-3 m-0 justify-content-center" style="flex-direction: column;">
            <i class='bx bx-arrow-back bx-md' onclick="document.location.href='items.php'" style="cursor: pointer;"></i>
                <?php include "db/config.php";

                $barcode = $_GET['barcode'];
                $querysql =  mysqli_query($conn, "SELECT * FROM `items` WHERE barcode = '$barcode'");
                while ($row = mysqli_fetch_array($querysql)) {
                ?>
                    <div class='item-view-container'>
                        <form style="width: 40rem;">
                            <div class="py-2">
                                <label class="modal-label">Barcode</label>
                                <input name="barcode" value="<?php echo $row['barcode']; ?>" disabled>
                            </div>

                            <div class="py-2">
                                <label class="modal-label">Item Description</label>
                                <input name="product_description" value="<?php echo $row['product_description']; ?>" disabled>
                            </div>

                            <div class="py-2">
                                <label class="modal-label">Item Quantity</label>
                                <input name="quantity" value="<?php echo $row['quantity']; ?>" disabled>
                            </div>


                            <div class="py-2">
                                <label class="modal-label">Cost per Unit</label>
                                <input name="cost_per_unit" value="<?php echo $row['cost_per_unit']; ?>" disabled>
                            </div>

                            <div class="py-2 d-flex justify-content-end align-items-end gap-2">
                                <a href="edit-item.php?barcode=<?php echo $row['barcode']; ?>" name="edit_item_btn" class="primary-btn">EDIT</a>
                                <a class="primary-btn" style="background-color:red !important;" id="delBtn">
                                    DELETE
                                </a>

                                <!-- start delete modal -->
                                <div id="deleteModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" id="delete-modal-close">&times;</span>

                                        <div class="modal-delete-container">
                                            <div class="modal-confirmation-header">
                                                <p style="font-weight: 700;">Are you sure you want to delete <?php echo $row['product_description']; ?>?</p>
                                            </div>
                                            <div class="modal-del-buttons">
                                                <a class="primary-btn" id="delete-cancel" style="background-color:gray !important;">Cancel</a>
                                                <a class="primary-btn" style="background-color:red !important;" href="delete-item.php?barcode=<?php echo $row['barcode']; ?>">Delete</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end modal -->


                    </div>
                    </form>
            </div>
        <?php } ?>
        </div>
    </div>


    <!--Container Main end-->

    <script>
        var deleteconfirm_modal = document.getElementById('deleteModal');
        var delbtn = document.getElementById('delBtn');
        var delspan = document.getElementById('delete-modal-close');
        var cancel = document.getElementById('delete-cancel');

        delbtn.onclick = function() {
            deleteconfirm_modal.style.display = 'block';
        };

        delspan.onclick = function() {
            deleteconfirm_modal.style.display = 'none';
        };

        cancel.onclick = function() {
            deleteconfirm_modal.style.display = 'none';
        };
    </script>

</body>

</html>