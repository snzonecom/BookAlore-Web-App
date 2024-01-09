<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookAlore - Login Menu</title>
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

</head>

<body style="background-image: url('images/#.jpg')">
    
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
                    <a class="nav-link" href="../general/catalog.php">HOUSE CATALOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../general/contact.php">CONTACT US</a>
                </li>
                    <a class="nav-link" href="../general/tnc.php">T&Cs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../general/about.php">ABOUT</a>
                </li>
            </ul>
            <form class="d-flex">
              <!-- me-lg-* refers to margin end when full screen, me-* refers to margin end when screen in adjust -->
              <a href="login-menu.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2 bg-dark">Log In</button></a>
              <a href="user-register.php"><button type="button" class="btn btn-outline-light" style="background-color: #1d7874;">Register</button></a>
            </form>
        </div>
        </div>
    </nav>

            <br><br>
            <h1 style="text-align:center; font-size: 8rem; color: #071E22; font-weight: bold;">LOG IN</h1>
            <p style="text-align:center; font-weight: bold; font-size: 1.2rem;">DO YOU WANT TO LOG IN AS :</p>

  <!-- customer and admin buttons -->
  <style>
    .zoom-card {
        transition: transform .2s;
    }
    .zoom-card:hover {
        transform: scale(1.15);
    }
    </style>
    
            <table style="margin-left: auto; margin-right: auto;">
                <tr>
                    <th>
                        <div class="card m-3" style="width: 18rem;">
                            <div class="zoom-card">
                                <a href="cust-login.php" class="btn btn-dark" style="background-color: #679289; min-height: 22rem;">
                                    <img src="../images/cust-icon.png" class="card-img-top mt-4" style="max-width: 25%; align-self: center;">
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title" style="font-weight: bold; color: black; font-size: 1.8em;">CUSTOMER</h5>
                                        <p class="card-text" style="font-size: medium;">Enjoy BookAlore's features and services to find the best place for your stay in Pampanga.</p>
                                        <p><i>Click here to Log In.</i></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="card m-3" style="width: 18rem;">
                            <div class="zoom-card">
                                <a href="admin-login.php" class="btn btn-dark" style="background-color: #679289; min-height: 22rem;">
                                    <img src="../images/admin-icon.png" class="card-img-top mt-4" style="max-width: 25%; align-self: center;">
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title" style="font-weight: bold; color: black; font-size: 1.8em;">ADMIN</h5>
                                        <p class="card-text" style="font-size: medium;">Book and hustle to alore more bookings!<br>The features and services are in your hands.</p>
                                        <p><i>Click here to Log In.</i></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </th>
                </tr>
            </table>
            <br><br><br>

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
                    <a href="../general/tnc.php" class="d-inline-block mb-2 text-dark text-decoration-none">++ Terms & Conditions</a><br>
                    <a href="../general/about.php" class="d-inline-block mb-2 text-dark text-decoration-none">++  About Us</a>
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