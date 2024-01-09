<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    session_start();

    if(isset($_POST['submit']))
    {
        $username = $_POST['userid'];
        $emplo_id = $_POST['userid'];
        $passw = $_POST['userpass'];

        if(!empty($username) && !empty($passw))
        {

            $query = "SELECT * FROM manager_acc WHERE id = '$username' && password='$passw'";
            $result = mysqli_query($con, $query);

            $total = mysqli_num_rows($result);

            if($total == 1)
            {
                $_SESSION['username'] = $username;
                header("Location: manage-employee.php");
                
            }
            else
            {
                wrong_login_manager();
            }
        }
        else
        {
            fill_details();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookAlore - LOCK</title>
    
    <!-- link to Poppins font - to not install in local anymore -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- link to our icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- link to our css file -->
    <link rel="stylesheet" href="../css/lock-employee.css">

</head>

<body style="background-image: url('images/#.jpg');">

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
                <li style="background: #f4c095;"><a href="../manage-employee/lock-employee.php">
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

    <!-- LOGIN SECTION AND FORM -->
            <br>
            <h1 style="text-align:center; font-size: 5rem; color: #071E22; font-weight: bold;">MANAGER LOG IN</h1>

            <div class="form-style">
                <form method="post">
                    <div class="lock-logo">
                        <img src="../images/unlock_icon.gif" >
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <label class="form-label">Manager ID</label>
                        <input type="username" class="form-control" name="userid">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="userpass">
                        <div class="form-text mb-3">
                            <b><br>WARNING:</b> Woops! This feature is only exclusive for manager. Be sure you are a part of our BookAlore Team - MANAGER before continuing with the login process. For our team's tracking purposes, your log in time and date is recorded.
                        </div>
                    </div>
                    <div class="log-button">
                        <button class="btn btn-dark" name="submit" type="submit">Log In</button>
                        <br><br><br><br><br><br>
                    </div>
                </form>
            </div>
        </div>
    </section>

    
    <!-- script for bootstrap 5 - bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../scripts/dashboard-script.js"></script>
</body>
</html>