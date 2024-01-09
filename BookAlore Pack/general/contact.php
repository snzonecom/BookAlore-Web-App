<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookAlore - Contact</title>

   <!-- link to bootstrap 5 - css -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link to Poppins font - to not install in local anymore -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- link to our css file -->
    <link rel="stylesheet" href="../css/contact.css">

    <!-- link to our icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

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
                    <a class="nav-link" style="font-weight: bolder; color: #1d7874;" href="contact.php">CONTACT US</a>
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

    
<!-- contact us -->
    <div class="my-5 px-4">  
    <h1 class="mt-5" style="text-align:center; font-size: 5rem; color: #071E22; font-weight: bold;">CONTACT US</h1>
            <p class="text-center mt-3 w-75" style="margin: 0 auto;">
            Your Booking Experience Matters to Us. If you have any questions or would like more 
            information about our booking services, please don't hesitate to contact us. 
            Our team is here to assist you and ensure you have a smooth booking experience.</p>
    </div> 
    
  
            <div class="container">
                    <div class="card">
                    <i class="card-icon bi bi-telephone-fill"></i>
                    <h5 class="mt-3">Call Us</h5>
                    (401) 334-2902 
                    </div>  
                    
                    <div class="card">
                    <i class="card-icon bi bi-envelope-fill"></i>
                    <h5 class="mt-3">Email</h5>
                    bookalore@gmail.com
                    </div>  

                    <div class="card">
                    <i class="card-icon bi bi-geo-alt-fill"></i>
                    <h5 class="mt-3">Address</h5>
                    Angeles City, Pampanga 
                    </div>  
            </div>  
        <div class="map">
            <iframe class="w-100 rounded mb-4" height="420px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61617.31925209157!2d120.56550846047153!3d15.153815832018239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f2c6a9ee7ce5%3A0xe88bd233fd20a0cd!2sAngeles%20City%2C%20Pampanga!5e0!3m2!1sen!2sph!4v1681635219837!5m2!1sen!2sph"></iframe>
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