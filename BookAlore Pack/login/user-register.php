<?php
  session_start();

  include("../connect/connection.php");
  include("../connect/functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $id = $_POST['regusername'];
      $username = $_POST['regusername'];
      $email = $_POST['regemail'];
      $password = $_POST['regpassword'];
      $contact = $_POST['regcontact'];
      $address = $_POST['regaddress'];

      if(!empty($fname) && !empty($lname) && !empty($username) && !empty($email) && !empty($password) && !empty($contact) && !empty($address))
      {
        $query2 = "SELECT * FROM user_acc WHERE Username = '$id' limit 1";
        $result2 = mysqli_query($con,$query2);

        if($result2 && mysqli_num_rows($result2) == 1)
        {
            username_taken();
        }
        else
        {
            $queryins1 = "INSERT into user_register (first_name,last_name,email,contact,address) VALUES ('$fname','$lname','$email','$contact','$address')";
            $resultins1 = mysqli_query($con, $queryins1);

            $user_id = mysqli_insert_id($con);

            if($resultins1)
            {
                $queryins2 = "INSERT into user_acc (Cust_ID,Username,Password) VALUES ('$user_id','$username','$password')";
                $resultins2 = mysqli_query($con, $queryins2);
                header("Location: ../home.php");
                die;

            }

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
    <title>BookAlore - User Register</title>
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
              <a href="login-menu.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;">Log In</button></a>
              <a href="user-register.php"><button type="button" class="btn btn-outline-light bg-dark" data-bs-toggle="modal">Register</button></a>
            </form>
        </div>
        </div>
    </nav>

    <!-- REGIS FORM -->
            <br>
            <h1 style="text-align:center; font-size: 7rem; color: #071E22; font-weight: bold;">REGISTER</h1>
            <form method="post" style="max-width: 45em; margin: 0 auto;">
                <div class="mb-3">
                    <img style="width: 60%; display: block; margin-left: auto; margin-right: auto;" src="../images/logo.png" >
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <p style="font-weight: bold; font-size: larger; text-align: center;">PERSONAL INFORMATION</p>
                        </div>
                        <div class="col-md-6">
                            <p style="font-weight: bold; font-size: larger; text-align: center;">LOG IN INFORMATION</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control mb-3" name="fname">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control mb-3" name="regusername">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control mb-3" name="lname">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control mb-3" name="regpassword">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control mb-3" name="regemail">
                        </div>
                        <div class="col-md-6">
                            <!-- EMPTY -->
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control mb-3" name="regcontact">
                        </div>
                        <div class="col-md-6">
                            <!-- EMPTY -->
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control mb-3" name="regaddress"></textarea>
                        </div>

                        </div>
                            <span class="badge mb-3 text-wrap lh-base" style="background-color: #679289; font-weight: normal; text-align: left; font-size: small;">
                            <b>REMINDER:</b> The personal details you enter upon registration will automatically reflect upon booking a rental home of your choice. Make sure to give your right details upon registration.
                            </span>
                        </div>

                        <div class="col-12 mb-2 p-3">
                            <div class="form-check">
                            <!-- script link JQuery function - disable and enable of submit button upon trigger of checkbox -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I have read, understood, and agree with the <a href = "../general/tnc.php">Terms and Conditions</a> of BookAlore.
                                </label>
                            </div>
                        </div>
              
                        <div class="d-grid gap-2 d-md-block" style="display: block; margin-left: 1em; margin-right: 0em;">
                            <button class="btn btn-primary" type="reset" style="width: 48%; background-color: #1d7874;">Clear</button>
                            <button class="btn btn-primary" type="submit" name="submit" style="width: 48%; background-color: #1d7874;" id="sub1" disabled="disabled">Submit</button>
                            <br><br><br><br><br><br>
                            <script>
                                $(function() {
                                    $('#gridCheck').click(function() {
                                        if ($(this).is(':checked')) {
                                            $('#sub1').removeAttr('disabled');
                                        } else {
                                            $('#sub1').attr('disabled', 'disabled');
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </form>
    
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