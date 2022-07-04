<?php include "db/config.php";
 $page = 'Suppliers';
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
        <h1>EDIT SUPPLIER</h1>
        </div>



        <div>
            <div class="d-flex p-3 m-0 justify-content-center" style="flex-direction: column;">
                <i class='bx bx-arrow-back bx-md' onclick='history.back()' style="cursor: pointer;"></i>
                <?php include "db/config.php";

                $supplier_id = $_GET['supplier_id'];
                $querysql =  mysqli_query($conn, "SELECT * FROM `suppliers` WHERE supplier_id = '$supplier_id'");
                while ($row = mysqli_fetch_array($querysql)) {
                ?>
                    <div class='item-view-container'>
                        <form action="edit-supplier-function.php" method="post" style="width: 40rem;">
                        <div class="py-2">
                                <!-- <label class="modal-label">Supplier ID</label> -->
                                <input name="supplier_id" value="<?php echo $row['supplier_id']; ?>" hidden>
                            </div>

                            <div class="py-2">
                                <label class="modal-label">Supplier Name</label>
                                <input name="supplier_name" value="<?php echo $row['supplier_name']; ?>" >
                            </div>

                            <div class="py-2">
                                <label class="modal-label">Supplier Address</label>
                                <input name="supplier_address" value="<?php echo $row['supplier_address']; ?>">
                            </div>


                            <div class="py-2">
                                <label class="modal-label">Supplier Contact</label>
                                <input name="supplier_contact" value="<?php echo $row['supplier_contact']; ?>" >
                            </div>

                            <div class="py-2 d-flex gap-2 justify-content-end align-items-end">
                                <a href="supplier-details.php?supplier_id=<?php echo $row['supplier_id']; ?>" class="primary-btn" style="background-color:gray !important;">CANCEL</a>
                                <button type="submit" name="edit_supplier" class="primary-btn">EDIT</button>
                            </div>
                        </form>
                    </div>
                <?php } ?>
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