<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/manage-employee.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>BookAlore - Manage Rentals</title> 
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
                <li style="background: #f4c095;"><a href="../manage-rentals/manage-rentals.php">
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
                                <img src="../images/cloud.gif" alt="" style="width: 12%; margin: 0 auto;">
                            </center>
                </div>

            <div class="activity">
                <div class="title">
                    <!-- <i class="uil uil-clock-three"></i> -->
                    <span class="text">MANAGE RENTAL HOMES</span>
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
                <a href="register-rental.php" class="btn-add"><i class="uil uil-estate"></i> Add New Rental</a>

                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                        <th style="color: #1d7874;"><br>.</th>
                        <th style="font-size: large;">House ID</th>
                        <th style="font-size: large;">House Name</th>
                        <th style="font-size: large;">Location</th>
                        <th style="font-size: large;">Price</th>
                        <th style="font-size: large;">Owner</th>
                        <th style="font-size: large;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $mysql1 = "SELECT * FROM house_details";
                            $showall = mysqli_query($con, $mysql1);
                            while ($row = mysqli_fetch_assoc($showall))
                            {
                                ?>

                                <tr>
                                    <th></th>
                                    <th style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['House_ID'] ?></th>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['HouseName'] ?></td>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Location'] ?></td>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Price'] ?></td>
                                    <td style="padding-top: 1.5rem; font-size: 17px;"><?php echo $row['Owner_Fname'], ' ', $row['Owner_Lname'] ?></td>
                                    <td style="padding-top: 1rem;">
                                        <a href="modify-rental.php?id=<?php echo $row['House_ID'] ?>"
                                        class="link-primary" style="text-decoration: none;">
                                            <button class="btn-warning">Modify</button>
                                            <!-- <i class="uil uil-edit"></i> -->
                                        </a>
                                        <a href="delete-rental.php?id=<?php echo $row['House_ID'] ?>"
                                        class="link-primary" style="text-decoration: none;">
                                            <button class="btn-delete">Delete</button>
                                            <!-- <i class="uil uil-trash"></i> -->
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
