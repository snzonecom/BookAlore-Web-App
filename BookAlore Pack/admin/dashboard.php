<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="../css/dashboard-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
    <!-- ICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>BookAlore - Admin Dashboard</title>

</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../images/logo-house.png" alt="">
            </div>

            <span class="logo_name">BookAlore</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links" style="padding-left: 0;">
            <li style="background: #f4c095;"><a href="../admin/dashboard.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="../bookings/book-pending.php">
                    <i class="uil uil-clock-eight"></i>
                    <span class="link-name">Pending Bookings</span>
                </a></li>
                <li><a href="../bookings/book-manage.php">
                    <i class="uil uil-book-reader"></i>
                    <span class="link-name">Manage Bookings</span>
                </a></li>
                <li><a href="../bookings/book-record.php">
                    <i class="uil uil-books"></i>
                    <span class="link-name">Bookings Record</span>
                </a></li>
                <li><a href="../manage-employee/lock-employee.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Manage Admins</span>
                </a></li>
                <li><a href="../manage-rentals/manage-rentals.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Manage Rentals</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode" style="padding-left: 0;">
                <li><a href="../home.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
            </ul>

        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
        </div>


        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">
                        <form method="POST">
                            <?php
                                session_start();
                                echo "Hello, " .$_SESSION['employee']. " !";
                            ?>
                        
                        </form>
                    </span>
                </div>

                <div class="mt-3 pt-2 mb-4">
                    <center>
                        <img src="../images/banners.png" alt="">
                    </center>
                </div>

                <div class="boxes">
                    <?php

                        $pending = "SELECT COUNT(*) as count FROM rent_status WHERE Status = 'PENDING'";
                        $showpending = mysqli_query($con, $pending);

                        while ($rowPending = mysqli_fetch_assoc($showpending))
                        {
                    ?>
                    <div class="box box1">
                        <i class="uil uil-clock-nine"></i>
                        <span class="text">Pending Bookings</span>
                        <span class="number"><?php echo $rowPending['count'] ?></span>
                    </div>

                    <?php } ?>

                    <?php

                        $paid = "SELECT COUNT(*) as count FROM rent_status WHERE Status = 'PAID'";
                        $showpaid = mysqli_query($con, $paid);

                        while ($rowPaid = mysqli_fetch_assoc($showpaid))
                        {
                    ?>
                    
                    <div class="box box2">
                        <i class="uil uil-bill"></i>
                        <span class="text">Paid Bookings</span>
                        <span class="number"><?php echo $rowPaid['count'] ?></span>
                    </div>
                    <?php } ?>

                    <?php

                        $refund = "SELECT COUNT(*) as count FROM rent_status WHERE Status = 'REFUND'";
                        $showref = mysqli_query($con, $refund);

                        while ($rowRefund = mysqli_fetch_assoc($showref))
                        {
                    ?>
                    <div class="box box3">
                        <i class="uil uil-money-insert"></i>
                        <span class="text">Refunded Bookings</span>
                        <span class="number"><?php echo $rowRefund['count'] ?></span>
                    </div>
                    <?php } ?>

                </div>
            </div>
            
            </div>
        </div>
    </section>

    <script src="../scripts/dashboard-script.js"></script>
</body>
</html>
