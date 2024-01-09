<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    $user_id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookAlore - Track Booking</title>
    <!-- link to bootstrap 5 - css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link to Poppins font - to not install in local anymore -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- link to our css file -->
    <link rel="stylesheet" href="../css/styles.css">

    <!-- link to our icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    
  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-4 shadow-sm sticky-top" style="font-size: large; font-weight: 500;">
        <div class="container-fluid">
              <a class="navbar-brand" href="cust-home.php?id=<?php echo $user_id?>">
              <style>
                  .zoom {
                    transition: transform .2s;
                    margin: 0 auto;
                  }
                  .zoom:hover {
                    transform: scale(1.5);
                  }
                </style>
                <div class="zoom"><img src="../images/navbar-logo.png"></div>
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="cust-home.php?id=<?php echo $user_id?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cust-catalog.php?id=<?php echo $user_id?>">HOUSE CATALOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cust-contact.php?id=<?php echo $user_id?>">CONTACT US</a>
                </li>
                    <a class="nav-link" href="cust-tnc.php?id=<?php echo $user_id?>">T&Cs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cust-about.php?id=<?php echo $user_id?>">ABOUT</a>
                </li>
            </ul>
            <form class="d-flex">
              <!-- me-lg-* refers to margin end when full screen, me-* refers to margin end when screen in adjust -->
              <a href="track-booking.php?id=<?php echo $user_id?>"><button type="button" class="btn btn-outline-light bg-dark me-lg-2 me-2">Track a Booking</button></a>
              <a href="../home.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;">Log Out</button></a>
            </form>
        </div>
        </div>
    </nav>

  <!-- CONTENTS -->

  <h1 class="mt-5 mb-3" style="text-align:center; font-size: 5rem; color: #071E22; font-weight: bold;">
        <i class="uil uil-telescope"></i>
        <br>TRACK A BOOKING NOW!
  </h1>
  <p class="mb-4" style="text-align:center;">Please enter the transaction ID provided to you in the search bar below to track the status of your booking.<br>Once entered, the current status of your booking will be displayed.</p>

  <center>
    <form class="d-flex w-50" method="post">
        <input class="form-control me-2" name="searchtrack" type="number" placeholder="Transaction ID Here" aria-label="Search">
        <button type="submit" name="submit" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;">Search</button>
    </form>
  </center>

  <!-- show tracking details -->

  <?php
    if(isset($_POST['submit']))
    {
        $search = $_POST['searchtrack'];

        if(!empty($search))
        {

            $query = "SELECT * FROM `rent_status` WHERE Transaction_ID = $search;";
            $result = mysqli_query($con, $query);

            $total = mysqli_num_rows($result);

            if($total == 1)
            {
                $row = mysqli_fetch_assoc($result);

                echo '
                <center>
                <div class="mt-5">
                    <p class="mb-0">TRANSACTION NO.</p>
                    <h1 class="mt-0 mb-4" style="font-size: 5rem; color: #1d7874; font-weight: bold;">'.$row["Transaction_ID"].'</h1>
                </div>
    
                <div class="mt-5">
                    <p class="mb-0">CURRENT STATUS</p>
                    <h1 class="mt-0" style="font-size: 5rem; color: #1d7874; font-weight: bold;">'.$row["Status"].'</h1>
                </div>
    
                <br>
                </center>';
                
            }
            else
            {
                track_notexist();
            }
        }
        else
        {
            fill_searchbar();
        }
    }

  ?>

    <!-- script for bootstrap 5 - bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>