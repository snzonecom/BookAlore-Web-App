<?php

  include("../connect/connection.php");
  include("../connect/functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // HOME DETAILS
      $name = $_POST['homename'];
      $loc = $_POST['homeloc'];
      $fname = $_POST['fname_own'];
      $lname = $_POST['lname_own'];
      $price = $_POST['price'];

      //HOME FEATURES
      $room = $_POST['room'];
      $bed = $_POST['bed'];
      $bath = $_POST['bathroom'];
      $capacity = $_POST['maxcap'];
      
      //IMAGES
      $img1 = $_FILES["img1"];
      $img2 = $_FILES["img2"];
      $img3 = $_FILES["img3"];
      $img4 = $_FILES["img4"];
      $img5 = $_FILES["img5"];
      $img6 = $_FILES["img6"];
      $img7 = $_FILES["img7"];
      $img8 = $_FILES["img8"];

      if(!empty($name) && !empty($loc) && !empty($fname) && !empty($lname) && !empty($price))
      {
            $query1 = "INSERT into house_details (HouseName,Location,Owner_Fname,Owner_Lname,Price) VALUES ('$name','$loc','$fname','$lname','$price')";
            $result1 = mysqli_query($con, $query1);

            $home_id = mysqli_insert_id($con);

            if(!empty($room) && !empty($bed) && !empty($bath) && !empty($capacity))
            {
                $query2 = "INSERT into house_feature (House_ID, Rooms, Beds, Bathroom, Max_Capacity) VALUES ('$home_id','$room','$bed','$bath','$capacity')";
                $result2 = mysqli_query($con, $query2);

                if($result2)
                {

                    // IMAGE 1
                    $imgName1 = $img1['name'];   //file name
                    $imgTmp1 = $img1['tmp_name']; //tmp name
                    $breakName1 = explode('.',$imgName1);
                    $FileExtend1 = strtolower(end($breakName1));  //file extension

                    // IMAGE 2
                    $imgName2 = $img2['name'];
                    $imgTmp2 = $img2['tmp_name'];
                    $breakName2 = explode('.',$imgName2);
                    $FileExtend2 = strtolower(end($breakName2));

                    // IMAGE 3
                    $imgName3 = $img3['name'];
                    $imgTmp3 = $img3['tmp_name'];
                    $breakName3 = explode('.',$imgName3);
                    $FileExtend3 = strtolower(end($breakName3));

                    // IMAGE 4
                    $imgName4 = $img4['name'];
                    $imgTmp4 = $img4['tmp_name'];
                    $breakName4 = explode('.',$imgName4);
                    $FileExtend4 = strtolower(end($breakName4));

                    // IMAGE 5
                    $imgName5 = $img5['name'];
                    $imgTmp5 = $img5['tmp_name'];
                    $breakName5 = explode('.',$imgName5);
                    $FileExtend5 = strtolower(end($breakName5));

                    // IMAGE 6
                    $imgName6 = $img6['name'];
                    $imgTmp6 = $img6['tmp_name'];
                    $breakName6 = explode('.',$imgName6);
                    $FileExtend6 = strtolower(end($breakName6));

                    // IMAGE 7
                    $imgName7 = $img7['name'];
                    $imgTmp7 = $img7['tmp_name'];
                    $breakName7 = explode('.',$imgName7);
                    $FileExtend7 = strtolower(end($breakName7));

                    // IMAGE 2
                    $imgName8 = $img8['name'];
                    $imgTmp8 = $img8['tmp_name'];
                    $breakName8 = explode('.',$imgName8);
                    $FileExtend8 = strtolower(end($breakName8));

                    $extension = array('jpeg','jpg','png');

                    if(in_array($FileExtend1,$extension))
                    {
                        $uploadIMG1 = '../images/'.$imgName1;
                        $uploadIMG2 = '../images/'.$imgName2;
                        $uploadIMG3 = '../images/'.$imgName3;
                        $uploadIMG4 = '../images/'.$imgName4;
                        $uploadIMG5 = '../images/'.$imgName5;
                        $uploadIMG6 = '../images/'.$imgName6;
                        $uploadIMG7 = '../images/'.$imgName7;
                        $uploadIMG8 = '../images/'.$imgName8;

                        move_uploaded_file($imgTmp1,$uploadIMG1);
                        move_uploaded_file($imgTmp2,$uploadIMG2);
                        move_uploaded_file($imgTmp3,$uploadIMG3);
                        move_uploaded_file($imgTmp4,$uploadIMG4);
                        move_uploaded_file($imgTmp5,$uploadIMG5);
                        move_uploaded_file($imgTmp6,$uploadIMG6);
                        move_uploaded_file($imgTmp7,$uploadIMG7);
                        move_uploaded_file($imgTmp8,$uploadIMG8);

                        $UploadAll = "INSERT INTO house_img (House_ID,IMG1_Main,IMG2,IMG3,IMG4,IMG5,IMG6,IMG7,IMG8)
                        VALUES ('$home_id', '$uploadIMG1', '$uploadIMG2', '$uploadIMG3', '$uploadIMG4', '$uploadIMG5', '$uploadIMG6', '$uploadIMG7', '$uploadIMG8')";

                        $alluploaded = mysqli_query($con, $UploadAll);

                        header("Location: manage-rentals.php");
                        die;
                    }
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
    <title>BookAlore - New Rental</title>

    <!-- link to Poppins font - to not install in local anymore -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- link to our css file -->
    <link rel="stylesheet" href="../css/register-employee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link to our icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>

<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../images/logo-house.png" alt="">
            </div>

            <span class="logo_name">BookAlore</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links" style="padding-left: 0;">
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
                <li><a href="../manage-employee/manage-employee.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Manage Admins</span>
                </a></li>
                <li style="background: #f4c095;"><a href="../manage-rentals/manage-rentals.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Manage Rentals</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode" style="padding-left: 0;">
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

    <!-- REGIS FORM -->
            <br>
            <h1 style="text-align:center; font-size: 7rem; color: #071E22; font-weight: bold;">ADD NEW RENTAL</h1>
            <form method="post" style="max-width: 45em; margin: 0 auto;" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-3">
                    <img style="width: 60%; display: block; margin-left: auto; margin-right: auto; margin-bottom:" src="../images/add-rental.png" >
                    <br><br>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <center><p style="font-size: 1.5em; font-weight: bold;">DETAILS</p></center>
                        <div class="col-md-6">
                            <label class="form-label">House Name</label>
                            <input type="text" class="form-control mb-3" name="homename" require>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control mb-3" name="homeloc" require>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Owner First Name</label>
                            <input type="text" class="form-control mb-3" name="fname_own">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Owner Last Name</label>
                            <input type="text" class="form-control mb-3" name="lname_own">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control mb-3" name="price">
                        </div>

                        <hr class = "mt-4 mb-5">
                        <center><p style="font-size: 1.5em; font-weight: bold;">FEATURES</p></center>

                        <div class="col-md-6">
                            <label class="form-label">Number of Rooms</label>
                            <input type="number" class="form-control mb-3" name="room">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Number of Beds</label>
                            <input type="number" class="form-control mb-3" name="bed">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Number of Bathrooms</label>
                            <input type="number" class="form-control mb-3" name="bathroom">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Maximum Capacity</label>
                            <input type="number" class="form-control mb-3" name="maxcap">
                        </div>

                        <hr class = "mt-4 mb-5">
                        <center><p style="font-size: 1.5em; font-weight: bold;">IMAGES</p></center>

                        <div class="col-md-6">
                            <label class="form-label">THUMBNAIL</label>
                            <input type="file" class="form-control mb-3" name="img1" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">HOME OVERVIEW</label>
                            <input type="file" class="form-control mb-3" name="img2" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">POOL AREA</label>
                            <input type="file" class="form-control mb-3" name="img3" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">LOUNGE AREA</label>
                            <input type="file" class="form-control mb-3" name="img4" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">KITCHEN</label>
                            <input type="file" class="form-control mb-3" name="img5" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">BATHROOM</label>
                            <input type="file" class="form-control mb-3" name="img6" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">BEDROOM</label>
                            <input type="file" class="form-control mb-3" name="img7" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">OPEN SPACE</label>
                            <input type="file" class="form-control mb-3" name="img8" accept=".jpg, .jpeg, .png">
                        </div>

                        <hr class = "mt-5 mb-2">

                        </div>
                            <span class="badge mb-2 text-wrap lh-base mt-4" style="background-color: #679289; font-weight: normal; text-align: left; font-size: small;">
                            <b>REMINDER:</b> Please check all of the details before submitting it. The HOUSE ID will be generated automatically after adding it in our system. You can check it once uploaded.
                            </span>
                        </div>

                        <div class="col-12 mb-2 p-3">
                            <div class="form-check">
                            <!-- script link JQuery function - disable and enable of submit button upon trigger of checkbox -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I, the rental home owner, double checked the information entered by BookAlore employee.
                                </label>
                            </div>
                        </div>
              
                        <div class="d-grid gap-2 d-md-block" style="display: block; margin-left: 1em; margin-right: 0em;">
                            <a href="manage-rentals.php"><button class="btn btn-primary" type="button" style="width: 20%; background-color: #1d7874;"> < BACK</button></a>
                            <button class="btn btn-primary" type="reset" style="width: 30%; background-color: #1d7874;">Clear</button>
                            <button class="btn btn-primary" type="submit" name="submit" style="width: 47%; background-color: #1d7874;" id="sub1" disabled="disabled">Submit</button>
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
        </div>
    </section>
    
    
    <!-- script -->
    <script src="../scripts/dashboard-script.js"></script>

    
</body>
</html>