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
    <title>BookAlore - About</title>

    <!-- link to bootstrap 5 - css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link to Poppins font - to not install in local anymore -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- link to our icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  
    <!--link for css-->
    <link rel ="stylesheet" href= "../css/about-style.css">
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
                    <a class="nav-link" style="font-weight: bolder; color: #1d7874;" href="cust-about.php?id=<?php echo $user_id?>">ABOUT</a>
                </li>
            </ul>
            <form class="d-flex">
              <!-- me-lg-* refers to margin end when full screen, me-* refers to margin end when screen in adjust -->
              <a href="track-booking.php?id=<?php echo $user_id?>"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;">Track a Booking</button></a>
              <a href="../home.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;">Log Out</button></a>
            </form>
        </div>
        </div>
    </nav>

<!-- CONTENT -->

<div class="row w-75 mt-5" style="margin: 0 auto;">
      <div class="col-md-4">
        <h2 class="forda-grn">About Us</h2>
        <p>
            The travel and tourism industry is returning to normal operations following the pandemic.
            Travelers are now able to book rental units online, bypassing traditional travel channels like travel agencies.
            This web application will be inclusive of rental houses around the Pampanga area, highlighting the tourism in Pampanga. The internet has diminished the importance of the traditional middleman (travel agents), but still serve as a conduit between tourists and travel service providers.
            <br><br> For extras, BookAlore showcase the unique cultural and historical attractions in Pampanga, encouraging tourists to explore and experience the local culture while staying in their rental units.
        </p>
      </div>
      <div class="col-md-4">
        <center><img src="../images/logo.png" class="w-75" alt=""></center>
      </div>
      <div class="col-md-4">
        <h5 class="forda-grn"><i class="uil uil-heart-sign" ></i> Work with heart</h5>
        <p>We believe that being authentic and doing things from our heart speaks volumes in the professional world that people appriciate.</p>

        <br>

        <h5 class="forda-grn"><i class="uil uil-calling"></i> Reliable services</h5>
        <p>Every customer needs a reliable service, BOOKALORE is one of the reliable webpage that every customer needs. BOOKALORE employee are all reliable employee.</p>

        <br>

        <h5 class="forda-grn"><i class="uil uil-star"></i> Great support</h5>
        <p>We believe that having a authentic support system that comes from our heart speaks our company values that we value what our customer needs.</p>

      </div>
    </div>
</div>

<!-- CREATORS -->
<div class="w-75 p-2 mt-5" style="background: #679289; margin: 0 auto;">
  <div class="container my-5">
      <h1 class="text-center mb-4">Meet the FOUR Creators</h1>
      <div class="row">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../images/sheyn.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Shane Nicole Paras</h5>
              <p class="card-text">Founder, Web Developer</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../images/jai.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jaira Micah Nunag</h5>
              <p class="card-text">Founder, Web Developer</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../images/el.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Erniella Manalansan</h5>
              <p class="card-text">Founder, Web Developer</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="../images/ez.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ezralyn Castro</h5>
              <p class="card-text">Founder, Web Developer</p>
            </div>
          </div>
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
                    <a href="cust-tnc.php?id=<?php echo $user_id?>" class="d-inline-block mb-2 text-dark text-decoration-none">++ Terms & Conditions</a><br>
                    <a href="cust-about.php?id=<?php echo $user_id?>" class="d-inline-block mb-2 text-dark text-decoration-none">++  About Us</a>
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
    

</body>
</html>