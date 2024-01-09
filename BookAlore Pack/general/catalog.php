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
    <title>BookAlore - Catalog</title>
    <!-- link to bootstrap 5 - css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link to Poppins font - to not install in local anymore -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- link to our css file -->
    <link rel="stylesheet" href="../css/catalog-style.css">

    <!-- link to our icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    
  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-4 shadow-sm sticky-top" style="font-size: large; font-weight: 500;">
        <div class="container-fluid">
              <a class="navbar-brand" href="../home.php">
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
                    <a class="nav-link" href="../home.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-weight: bolder; color: #1d7874;" href="catalog.php">HOUSE CATALOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT US</a>
                </li>
                    <a class="nav-link" href="tnc.php">T&Cs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
            </ul>
            <form class="d-flex">
              
              <a href="../login/login-menu.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;" data-bs-toggle="modal" data-bs-target="#loginMod">Log In</button></a>
              <a href="../login/user-register.php"><button type="button" class="btn btn-outline-light" style="background-color: #1d7874;" data-bs-toggle="modal" data-bs-target="#regisMod">Register</button></a>
            </form>
        </div>
        </div>
    </nav>

  <!-- content -->
    <h1 class="mt-5" style="text-align:center; font-size: 5rem; color: #071E22; font-weight: bold;">RENTAL HOMES CATALOG</h1>

    <div class="container center-itms">
        <div class="row">
        <div class="col-lg px-4">

        <!-- CARD -->
        <?php
            $mysql = "SELECT house_img.IMG1_Main, house_details.House_ID, house_details.HouseName, house_details.Location, house_details.Price, house_feature.Rooms, house_feature.Beds, house_feature.Bathroom, house_feature.Max_Capacity FROM house_img, house_details INNER JOIN house_feature ON house_details.House_ID = house_feature.House_ID WHERE house_img.House_ID = house_details.House_ID;";
            $showdeets = mysqli_query($con, $mysql);
            while ($row = mysqli_fetch_assoc($showdeets))
            {
        ?>



        <div class="card mb-1 mt-2 shadow">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5">
                    <img src="<?php echo $row['IMG1_Main'] ?>" class="img-fluid rounded" style="max-height: 20em;">
                </div>
                <div class="col-md-4 px-lg-4 px-md-3 px-0">
                    <h5 class="room-name mt-2"><?php echo $row['HouseName'] ?></h5>
                    <br>

                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill cust-bg text-wrap">
                            <?php echo $row['Rooms'] ?> rooms
                        </span>
                        <span class="badge rounded-pill cust-bg text-wrap">
                            <?php echo $row['Bathroom'] ?> bathroom
                        </span>
                        <span class="badge rounded-pill cust-bg text-wrap">
                            <?php echo $row['Beds'] ?> beds
                        </span>
                    </div>

                    <div class="features mb-4">
                        <h6 class="mb-1">Max Capacity
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <?php echo $row['Max_Capacity'] ?> people
                        </span>
                        </h6>
                    </div>

                    <div class="features mb-4">
                        <h6 class="mb-1"><i class="ri-map-pin-2-fill"></i>
                            <?php echo $row['Location'] ?>
                        </h6>
                    </div>

                </div>
                <div class="col-md-3 text-align-center">
                    <h6 class="mb-4 price-format"><?php echo $row['Price'] ?> per night</h6>

                    <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-sm w-75 btn-outline-dark shadow-none mb-2">Book Now</a>

                    <!-- Modal -->
                    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="loginModalLabel">
                                <i class="uil uil-user-exclamation" style="font-size: 40px; color: #1D7874;"></i>
                                Unregistered User Spotted
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Oops! Looks like you're not able to book a rental home at BookAlore just yet. In order to access our full range of services, you'll need to become a registered user of the BookAlore family first. Don't worry, the registration process is quick and easy, and it will give you full access to all of our services. So don't miss out on the chance to find your perfect rental home – join the BookAlore family today!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="../login/user-register.php"><button type="button" class="btn btn-outline-light" style="background-color: #1d7874;">Register Now</button></a>
                        </div>
                        </div>
                    </div>
                    </div>

                    <a href="room.php?id=<?php echo $row['House_ID']?>" class="btn btn-sm w-75 btn-outline-dark shadow-none">See more details</a>
                </div>
                </div>
            </div>

            <?php
                }
            ?>

        </div>
        </div>
        </div>    
    </div>

  <!-- footer -->
  <div class="container-fluid bg-white mt-5">
            <div class="row align-items-start" style="background-color: #e8eaf3;">
            
                <div class="col py-3 mx-3"><br>
                    <h3 class="h-font fw-bold fs-3 mb-2">BookAlore</h3>
                    <p>
                        Book to BookAlore to find the best safe place as you explore the wonders of our dearest Pampanga!
                    </p>
                </div>
                <div class="col py-3 mx-3" style="align-items: center;"><br><br>
                    <img src="../images/mod-logo-long.png" style="min-width: 100%;">
                </div>
                <div class="col py-3 mx-3"><br>
                    <h5 class="mb-3">Get to know us more!</h5>
                    <a href="tnc.php" class="d-inline-block mb-2 text-dark text-decoration-none">++ Terms & Conditions</a><br>
                    <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">++  About Us</a>
                </div>
                
                <div class="col py-3 mx-3"><br>
                    <h5 class="mb-3">Follow Us</h5>
                    <a href="https://www.facebook.com/" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="ri-facebook-box-fill"></i> Facebook
                    </a><br>
                    <a href="https://instagram.com/" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="ri-instagram-fill"></i> Instagram
                    </a>
                </div>
            </div>
        </div>
        <h6 class="bg-dark text-white p-3" style="text-align: center;">Created and Developed by Castro, Manalansan, Nunag, and Paras</h6>
    
    
    <!-- script for bootstrap 5 - bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>