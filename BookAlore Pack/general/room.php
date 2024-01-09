<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookAlore - Room</title>
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
                    <a class="nav-link" href="catalog.php">HOUSE CATALOG</a>
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
              <!-- me-lg-* refers to margin end when full screen, me-* refers to margin end when screen in adjust -->
              <a href="../login/login-menu.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;" data-bs-toggle="modal" data-bs-target="#loginMod">Log In</button></a>
              <a href="../login/user-register.php"><button type="button" class="btn btn-outline-light" style="background-color: #1d7874;" data-bs-toggle="modal" data-bs-target="#regisMod">Register</button></a>
            </form>
        </div>
        </div>
    </nav>

  <!-- content -->
  <?php
        $id = $_GET['id'];
        $sql = "SELECT house_img.IMG1_Main, house_img.IMG2, house_img.IMG3, house_img.IMG4, house_img.IMG5, house_img.IMG6, house_img.IMG7, house_img.IMG8, house_details.House_ID, house_details.HouseName, house_details.Location, house_details.Price, house_feature.Rooms, house_feature.Beds, house_feature.Bathroom, house_feature.Max_Capacity, house_details.Owner_Fname, house_details.Owner_Lname FROM house_img, house_details INNER JOIN house_feature ON house_details.House_ID = house_feature.House_ID WHERE house_img.House_ID = house_details.House_ID AND house_details.House_ID = $id;";
        $showdeets = mysqli_query($con, $sql);
            
            while ($row = mysqli_fetch_assoc($showdeets))
            {
    ?>

  <h1 class="mt-4 mb-3 text-dark" style="text-align:center; font-size: 4rem; font-weight: bold;"><?php echo $row['HouseName'] ?> </h1>

  <div class="col-lg-7 col-md-12 px-4" style="margin: 0 auto;">
        <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>            
        </div>
        <div class="carousel-inner" style="height: 40em;">
            <div class="carousel-item active">
                <img src="<?php echo $row['IMG1_Main'] ?>" class="img-fluid" style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $row['IMG2'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $row['IMG3'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $row['IMG4'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $row['IMG5'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $row['IMG6'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $row['IMG7'] ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $row['IMG8'] ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
  </div>

  <div class="col-lg-7 col-md-12 px-4 mt-5" style="margin: 0 auto;">
    <div class="card mb-4 border-1 shadow-sm rounded-3">
        <div class="card-body" style="text-align: center;">
            <h4 class="mt-2"><?php echo $row['Price'] ?> per night</h4>

            <h6 class="mt-3 mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                <?php echo $row['Rooms'] ?> rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                <?php echo $row['Beds'] ?> beds
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
                <?php echo $row['Bathroom'] ?> bathrooms
            </span>

            <h6 class="mt-3 mb-1"><i class="ri-hotel-bed-fill"></i>
                Max Capacity : 
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <?php echo $row['Max_Capacity'] ?> people
                </span>
            </h6>

            <h6 class="mt-3 mb-1"><i class="ri-map-pin-2-fill"></i>
                <?php echo $row['Location'] ?>
            </h6>

            <h6 class="mt-3 mb-1"><i class="ri-user-location-fill"></i>
                <?php echo $row['Owner_Fname'] ?> <?php echo $row['Owner_Lname'] ?> 
            </h6>

            <a data-bs-toggle="modal" data-bs-target="#seemoreModal" class="btn w-50 text-white shadow-none mt-3 mb-2" style="background:#1d7874;">Book Now</a>

            <!-- Modal -->
            <div class="modal fade" id="seemoreModal" tabindex="-1" aria-labelledby="seemoreModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="seemoreModalLabel">
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
            
        </div>
    </div>
  </div>

  <?php
            }
  ?>

  <!-- facilities -->

  <h3 class="mt-5 mb-3 text-dark" style="text-align:center; font-size: 2.5rem; font-weight: bold;">Amenities</h3>
  <p class="w-75 mb-5" style="text-align: center; margin: 0 auto;">
  BookAlore is a top-notch rental home service that guarantees the availability of essential amenities that meet the highest qualifications. Whether you're looking for a short-term rental or an extended stay, BookAlore has got you covered with our exceptional services and top-of-the-line amenities. With BookAlore, you can rest assured that your stay will be comfortable and secure, as we make sure that your stay have the following amenities: 
  </p>

  <div class="container" style="margin: 0 auto;">

    <div class="row">
        <div class="col align-self-start mb-5 px-4">
            
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                <i class="uil uil-snowflake-alt" style="font-size: 40px; color: #1D7874;"></i>
                <h5 class="ms-3 mt-2">Central Air Conditioning</h5>
                </div>
                <p>This facility provides a centralized cooling system that circulates cool air throughout the house. It helps to maintain a comfortable temperature in the house, even during hot weather.</p>
            </div>
        </div>

        <div class="col align-self-center mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <i class="uil uil-wifi" style="font-size: 40px; color: #1D7874;"></i>
                    <h5 class="ms-3 mt-2">Internet Connection</h5>
                </div>
                <p>This facility provides wireless internet access throughout the house, allowing guests to stay connected and access the internet from anywhere in the house.</p>
            </div>
        </div>

        <div class="col align-self-center mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <i class="uil uil-fire" style="font-size: 40px; color: #1D7874;"></i>
                    <h5 class="ms-3 mt-2">Fire Alarm & Fire Extinguisher</h5>
                </div>
                <p>This facility provides safety measures in the event of a fire emergency. The fire alarm system will alert guests in case of a fire, while the fire extinguisher can be used to put out a small fire and prevent it from spreading.</p>
            </div>
        </div>

        
    </div>

    <div class="row">

        <div class="col align-self-center mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <i class="uil uil-shield-check" style="font-size: 40px; color: #1D7874;"></i>
                    <h5 class="ms-3 mt-2">Security</h5>
                </div>
                <p>This facility provides various security measures, such as CCTV cameras, security guards, or security alarms, to ensure the safety and security of guests during their stay.</p>
            </div>
        </div>

        <div class="col align-self-center mb-5 px-4">
            
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                <i class="uil uil-swimmer" style="font-size: 40px; color: #1D7874;"></i>
                <h5 class="ms-3 mt-2">Swimming Pool</h5>
                </div>
                <p>This facility provides guests with access to a swimming pool, allowing them to relax and enjoy themselves in the water during their stay.</p>
            </div>
        </div>

        <div class="col align-self-center mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <i class="uil uil-car-sideview" style="font-size: 40px; color: #1D7874;"></i>
                    <h5 class="ms-3 mt-2">Secured Parking Space</h5>
                </div>
                <p>This facility provides a secure and designated parking space for guests, ensuring that their vehicles are safe and protected from theft or damage.</p>
            </div>
        </div>

    </div>


    <div class="row">

        <div class="col align-self-center mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <i class="uil uil-crockery" style="font-size: 40px; color: #1D7874;"></i>
                    <h5 class="ms-3 mt-2">Fully-equipped Kitchen</h5>
                </div>
                <p>A fully-equipped kitchen includes a refrigerator, stove, oven, microwave, dishwasher, and kitchen utensils, allowing guests to prepare their meals and save money on dining out.</p>
            </div>
        </div>

        <div class="col align-self-center mb-5 px-4">
            
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                <i class="uil uil-tv-retro" style="font-size: 40px; color: #1D7874;"></i>
                <h5 class="ms-3 mt-2">Televison & Netflix</h5>
                </div>
                <p>A television with cable or streaming services provides entertainment for guests during their downtime.</p>
            </div>
        </div>

        <div class="col align-self-center mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                    <i class="uil uil-pagelines" style="font-size: 40px; color: #1D7874;"></i>
                    <h5 class="ms-3 mt-2">Outdoor Space</h5>
                </div>
                <p>An outdoor space, such as a balcony, patio, or garden, allows guests to enjoy fresh air and the natural surroundings of the home.</p>
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