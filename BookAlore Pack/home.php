<?php
  session_start();

  include("connection.php");
  include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $name = $_POST['regname'];
      $username = $_POST['regusername'];
      $email = $_POST['regemail'];
      $password = $_POST['regpassword'];
      $contact = $_POST['regcontact'];
      $address = $_POST['regaddress'];

      if(!empty($name) && !empty($username) && !empty($email) && !empty($password) && !empty($contact) && !empty($address))
      {

        $query = "INSERT into user_register (name,email,contact,address,username,password) VALUES ('$name','$email','$contact','$address','$username','$password')";

        mysqli_query($con, $query);
        header("Location: home.php");
        die;

      }
      else
      {
        echo "Please enter all the needed details.";
      }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookAlore</title>
    <!-- link to bootstrap 5 - css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link to Poppins font - to not install in local anymore -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- link to our css file -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- link to our icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    
  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-4 shadow-sm sticky-top" style="font-size: large; font-weight: 500;">
        <div class="container-fluid">
              <a class="navbar-brand" href="home.php">
              <style>
                  .zoom {
                    transition: transform .2s;
                    margin: 0 auto;
                  }
                  .zoom:hover {
                    transform: scale(1.5);
                  }
                </style>
                <div class="zoom"><img src="images/navbar-logo.png"></div>
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="font-weight: bolder; color: #1d7874;" aria-current="page" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="general/catalog.php">HOUSE CATALOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="general/contact.php">CONTACT US</a>
                </li>
                    <a class="nav-link" href="general/tnc.php">T&Cs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="general/about.php">ABOUT</a>
                </li>
            </ul>
            <form class="d-flex">
              <!-- me-lg-* refers to margin end when full screen, me-* refers to margin end when screen in adjust -->
              <a href="login/login-menu.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;" data-bs-toggle="modal" data-bs-target="#loginMod">Log In</button></a>
              <a href="login/user-register.php"><button type="button" class="btn btn-outline-light" style="background-color: #1d7874;" data-bs-toggle="modal" data-bs-target="#regisMod">Register</button></a>
            </form>
        </div>
        </div>
    </nav>

  <!-- CONTENTS -->

  <!-- upper content -->
  <div style="background-image :url('images/homepho1.png'); background-size: cover; background-position: center;">
    <center>
      <img src="images/logo-landscape.png" alt="" style="width: 30%;" class="pt-5 pb-3">
      <br>
      <span class="badge rounded-pill bg-light text-dark p-3 fst-italic fs-6 lh-sm mb-5">
        Are you planning a trip to Pampanga and looking for a convenient and comfortable place to stay?
        <br>Look no further than our rental homes located near some of the top destinations in the area!
      </span>
        
      </p>
    </center>
  </div>

  <!-- recharge content -->
  <center>
  <div style="width: 85%;">
      <div class="row pt-5 pb-5">
        <div class="col-3"><img src="images/car-dribble.gif" alt="" class="w-100"></div>
        <div class="col-9" style="color: #1d7874; text-align: left;">
        <h1 style="font-size: 3rem; color: #071E22; font-weight: bold;">RECHARGE? RECHARGE!</h1>
        In today's fast-paced world, we often find ourselves constantly pushing ourselves to work harder and longer hours, sacrificing rest and relaxation for the sake of productivity. However, it's important to remember that taking a break is just as essential as working hard. It allows us to recharge our batteries, clear our minds, and return to our work with renewed energy and focus.
        <br><br>
        And where better to take a break than in Pampanga? With its stunning natural landscapes, rich cultural heritage, and numerous tourist attractions, Pampanga is the perfect place to unwind and recharge. Whether it's a relaxing day at Skyranch, a serene stroll by the Lakeshore, or a mouthwatering meal at one of its many world-renowned restaurants, Pampanga has something for everyone.
        <br><br>
        <a href="general/catalog.php"><button type="button" class="btn btn-outline-light mb-5" style="background-color: #1d7874;">Browse BookAlore Rental Homes Now ></button></a>
        </div>
      </div>
    </div>
  </center>

  <!-- featuring the wonders of pampanga -->
  <div style="background: #e8eaf3;" class="pt-2 pb-4">
    <h1 class="mt-5" style="text-align:center; font-size: 5rem; color: #071E22; font-weight: bold;">FEATURING THE WONDERS</h1>
    <hr style="width: 50%; margin: 0 auto; text-align: center;">
    <br>
    <p style="width: 75%; margin: 0 auto; text-align: center;">With our prime locations and cozy accommodations, you can easily explore all that Pampanga has to offer and make unforgettable memories during your stay.
    <br>Book your rental home with us today and experience the best of Pampanga!</p>
    
  <div style="width: 85%; margin: 0 auto;">
    <div class="row row-cols-1 row-cols-md-2 g-4 m-5">

      <div class="col">
        <div class="card">
          <h5 class="card-header p-3 bg-transparent text-success">
            <i class="uil uil-flower"></i>
            Skyranch
          </h5>
          <img src="images/skyranch.jpg" class="card-img-top" >
          <div class="card-body" style="background-color: #81b3a8bb;">
            <p class="card-text">
              Skyranch is a popular amusement park located in the heart of Pampanga. It offers a variety of exciting rides and attractions for all ages, including a giant Ferris wheel, roller coasters, and a zip line.
              Skyranch is perfect for families or groups of friends who are looking for a fun day out.
            </p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <h5 class="card-header p-3 bg-transparent text-success">
            <i class="uil uil-trees"></i>
            Lakeshore
          </h5>
          <img src="images/laskehsore.png" class="card-img-top">
          <div class="card-body" style="background-color: #81b3a8bb;">
            <p class="card-text">
              Lakeshore is a beautiful residential community located in Pampanga that offers a serene and relaxing environment. The community is situated next to a natural lake, and residents can enjoy various recreational activities such as fishing, boating, and swimming.
              Lakeshore is perfect for those who are looking for a peaceful and tranquil getaway.
            </p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <h5 class="card-header p-3 bg-transparent text-success">
            <i class="uil uil-plane-departure"></i>
            Clark International Airport
          </h5>
          <img src="images/clark-airport.jpg" class="card-img-top">
          <div class="card-body" style="background-color: #81b3a8bb;">
            <p class="card-text">
              Clark International Airport is one of the main international airports in the Philippines and serves the Greater Manila Area. The airport is located in the city of Angeles, Pampanga and offers flights to various domestic and international destinations.
              Clark International Airport is perfect for those who want to explore other parts of the Philippines or travel to other countries.
            </p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <h5 class="card-header p-3 bg-transparent text-success">
            <i class="uil uil-restaurant"></i>
            Biggest McDonald
          </h5>
          <img src="images/biggest-mcdo.png" class="card-img-top">
          <div class="card-body" style="background-color: #81b3a8bb;">
            <p class="card-text">
              The Biggest McDo in the world is located in Pampanga and is a popular tourist destination. This McDonald's branch holds the Guinness World Record for the largest outdoor seating area of any fast food restaurant.
              The branch also has a unique design inspired by Filipino architecture, making it a must-visit spot for tourists.
            </p>
          </div>
        </div>
      </div>
      
    </div>
    </div>
    </div>

  <!-- facilities -->

  <h1 class="mt-5" style="text-align:center; font-size: 5rem; color: #071E22; font-weight: bold;">AMENITIES</h1>
  <hr style="width: 50%; margin: 0 auto; text-align: center;">
  <br>
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
                    <img src="images/mod-logo-long.png" style="min-width: 100%;">
                </div>
                <div class="col py-3 mx-3"><br>
                    <h5 class="mb-3">Get to know us more!</h5>
                    <a href="general/tnc.php" class="d-inline-block mb-2 text-dark text-decoration-none">++ Terms & Conditions</a><br>
                    <a href="general/about.php" class="d-inline-block mb-2 text-dark text-decoration-none">++  About Us</a>
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