<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img">
        <img src="https://i.imgur.com/hczKIze.jpg" alt="">
        <!-- <i class='bx bx-store-alt'></i> -->
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo">
                <i class='bx bx-cart nav_logo-icon'></i>
                <span class="nav_logo-name">LG SUPERMARKET</span> </a>
            <div class="nav_list"> <a href="items.php" class="nav_link <?php if ($page == 'Items') {
                                                                            echo 'active';
                                                                        } ?>">

                    <i class='bx bx-basket nav_icon'></i> <span class="nav_name">Items</span> </a>
                <a href="customers.php" class="nav_link <?php if ($page == 'Customers') {
                                                            echo 'active';
                                                        } ?>"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Customers</span> </a>
                <a href="suppliers.php" class="nav_link <?php if ($page == 'Suppliers') {
                                                            echo 'active';
                                                        } ?>"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Suppliers</span> </a>
                <a href="sales-transactions.php" class="nav_link <?php if ($page == 'Sales') {
                                                                        echo 'active';
                                                                    } ?>"> <i class='bx bx-receipt nav_icon'></i> <span class="nav_name">Sales</span> </a>
                <a href="delivery-transactions.php" class="nav_link <?php if ($page == 'Delivery') {
                                                                        echo 'active';
                                                                    } ?>"> <i class='bx bx-package nav_icon'></i> <span class="nav_name">Delivery</span> </a>
            </div>
        </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
    </nav>
</div>


</html>