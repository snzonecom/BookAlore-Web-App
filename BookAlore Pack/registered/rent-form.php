<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    $user_id = $_GET['user'];
    $id = $_GET['id'];
    $price = $_GET['rate'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookAlore - Rent Form</title>
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
              <a href="track-booking.php?id=<?php echo $user_id?>"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;">Track a Booking</button></a>
              <a href="../home.php"><button type="button" class="btn btn-outline-light me-lg-2 me-2" style="background-color: #1d7874;">Log Out</button></a>
            </form>
        </div>
        </div>
    </nav>

    <!-- FORM -->
    <?php
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
              $user_id = $_GET['user'];
              $id = $_GET['id'];
              $rate = $_GET['rate'];
              
              // Sanitize user inputs
              $cust_id = mysqli_real_escape_string($con, $user_id);
              $house_id = mysqli_real_escape_string($con, $id);
              $price = $rate;

              $paymode = $_POST['payment'];
              $indate = $_POST['checkin'];
              $outdate = $_POST['checkout'];

              $query1 = "INSERT INTO transaction_tbl (Cust_ID, Pay_Mode, In_Date, Out_Date, No_Days, Total_Pay, House_ID)
              VALUES ('$cust_id', '$paymode', '$indate', '$outdate', DATEDIFF('$outdate', '$indate'), '$price' * DATEDIFF('$outdate', '$indate'), '$house_id')";

              $result1 = mysqli_query($con,$query1);

              $trans_id = mysqli_insert_id($con);

              if($result1)
              {
                $query2 = "INSERT INTO rent_status (Transaction_ID, House_ID, Status)
                VALUES ('$trans_id','$house_id','PENDING')";

                $result2 = mysqli_query($con,$query2);

                header("Location: book-summary.php?user=$user_id&id=$id&transaction=$trans_id");
                die;
              }

            }
        
        ?>

            <br>
            <h1 style="text-align:center; font-size: 5.5rem; color: #071E22; font-weight: bold;">RENT FORM</h1>
            <form method="post" style="max-width: 45em; margin: 0 auto;">
                <div class="mt-0">
                    <img style="width: 60%; display: block; margin-left: auto; margin-right: auto;" src="../images/logo.png" >
                </div>
                <h5 class="text-center mb-5" style="color:#3f1101;">Further information where you can send your payment will be sent in your email address, kindly check your inbox from time-to-time. </h5>
                <hr class="mb-4">
                
                <div class="container-fluid">
                    <div class="row">

                        <p class="mb-4" style="font-weight: bold; font-size: 1.8em; text-align: center;">RENT DETAILS</p>
                        <div class="col-md-6">
                            <label class="form-label">House ID</label>
                            <input type="text" class="form-control mb-3" name="houseid" placeholder="<?php echo $id ?>" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rent Price per Day</label>
                            <input type="email" class="form-control mb-3" placeholder="<?php echo $price ?>" name="rentprice" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Check In Date</label>
                            <input type="date" class="form-control mb-3" name="checkin">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Check Out Date</label>
                            <input type="date" class="form-control mb-3" name="checkout">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="paymentMode" class="form-label">Payment Mode</label>
                                <select id="paymentMode" class="form-select" name="payment">
                                    <option>GCash</option>
                                    <option>PayMaya</option>
                                    <option>Credit Card</option>
                                    <option>Debit Card</option>
                                    <option>Bank Transfer</option>
                                    <option>Paypal</option>
                                    <option>Home Credit</option>
                                </select>
                        </div>
                        <hr class="mt-4">

                        </div>
                            <span class="badge mt-2 mb-3 text-wrap lh-base" style="background-color: #679289; font-weight: normal; text-align: left; font-size: small;">
                            <b>REMINDER:</b> The personal details embedded in your account upon registration will reflect upon booking a rental home of your choice. By filling up the rent details, make sure to give your right details upon booking. 
                            </span>
                        </div>

                        <div class="col-12 mb-2 p-3">
                            <div class="form-check">
                            <!-- script link JQuery function - disable and enable of submit button upon trigger of checkbox -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I have read, understood, and agree with the <a href = "cust-tnc.php?id=<?php echo $user_id?>">Terms and Conditions</a> of BookAlore.
                                </label>
                            </div>
                        </div>
              
                        <div class="d-grid gap-2 d-md-block" style="display: block; margin-left: 1em; margin-right: 0em;">
                            <a href="../"><button class="btn btn-primary" type="button" style="width: 20%; background-color: #1d7874;">< BACK</button></a>
                            <button class="btn btn-primary" type="reset" style="width: 30%; background-color: #1d7874;">Clear</button>
                            <button class="btn btn-primary" type="submit" name="submit" style="width: 48%; background-color: #1d7874;" id="sub1" disabled="disabled">BOOK NOW</button>
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

    
    <!-- script for bootstrap 5 - bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>