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
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/manage-employee.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>BookAlore - Pending Bookings</title> 
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
            <ul class="nav-links">
                <li><a href="../admin/dashboard.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li style="background: #f4c095;"><a href="../bookings/book-pending.php">
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
            
            <ul class="logout-mode">
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

                <div class="mt-3 pt-2 mb-4">
                            <center>
                                <img src="../images/clock.gif" alt="" style="width: 10%; margin: 0 auto;">
                            </center>
                </div>

            <div class="activity">
                <div class="title">
                    
                    <span class="text">PENDING BOOKINGS</span>
                </div>
            </div>
        </div>

        <div class="activity-data">
                <?php
                        if(isset($_GET['msg']))
                        {
                            $msg = $_GET['msg'];
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            '.$msg.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        }
                ?>

                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                        <th style="color: #1d7874;"><br>.</th>
                        <th style="font-size: large;">Transaction ID</th>
                        <th style="font-size: large;">Check-In Date</th>
                        <th style="font-size: large;">Check-Out Date</th>
                        <th style="font-size: large;">Total Payment</th>
                        <th style="font-size: large;">Payment Mode</th>
                        <th style="font-size: large;">Status</th>
                        <th style="font-size: large;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $mysql1 = "SELECT transaction_tbl.Transaction_ID, transaction_tbl.In_Date, transaction_tbl.Out_Date, transaction_tbl.Total_Pay, transaction_tbl.Pay_Mode, rent_status.Status
                            FROM transaction_tbl, rent_status
                            WHERE transaction_tbl.Transaction_ID = rent_status.Transaction_ID AND rent_status.Status = 'PENDING'";
                            $showall = mysqli_query($con, $mysql1);
                            while ($row = mysqli_fetch_assoc($showall))
                            {
                                ?>

                                <tr>
                                    <th></th>
                                    <th style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Transaction_ID'] ?></th>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['In_Date'] ?></td>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Out_Date'] ?></td>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Total_Pay'] ?></td>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Pay_Mode'] ?></td>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Status'] ?></td>
                                    <td style="padding-top: 1rem;">

                                        <a href="paid-rental.php?id=<?php echo $row['Transaction_ID'] ?>"
                                        class="link-primary" style="text-decoration: none;">
                                            <button class="btn-warning" style="font-weight: bold;">Confirm Payment</button>
                                            
                                        </a>

                                    </td>
                                </tr>

                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
    </section>

    <br><br>

    <script src="../scripts/dashboard-script.js"></script>
</body>
</html>
