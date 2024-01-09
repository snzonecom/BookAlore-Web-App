<?php

  include("../connect/connection.php");
  include("../connect/functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

    $id = $_GET['id'];

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


      if(!empty($name) && !empty($loc) && !empty($fname) && !empty($lname) && !empty($price))
      {
            $query1 = "UPDATE house_details
            SET HouseName = '$name', Location = '$loc', Owner_Fname = '$fname', Owner_Lname = '$lname', Price = '$price'
            WHERE House_ID = $id";

            $result1 = mysqli_query($con, $query1);

            if(!empty($room) && !empty($bed) && !empty($bath) && !empty($capacity))
            {
                $query2 = "UPDATE house_feature
                SET Rooms = '$room', Beds = '$bed', Bathroom = '$bath', Max_Capacity = '$capacity'
                WHERE House_ID = $id";

                $result2 = mysqli_query($con, $query2);
                
                header("Location: manage-rentals.php");
                die;
                    
                
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
    <title>BookAlore - Modify Rentals</title>

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
            <h1 style="text-align:center; font-size: 7rem; color: #071E22; font-weight: bold;">MODIFY RENTAL</h1>

            <?php
                $id = $_GET['id'];
                $sql = "SELECT house_details.House_ID, house_details.HouseName, house_details.Location, house_details.Price,
                house_details.Owner_Fname, house_details.Owner_Lname, house_feature.Rooms, house_feature.Beds, house_feature.Bathroom,
                house_feature.Max_Capacity
                
                FROM house_details, house_feature

                WHERE house_details.House_ID = $id AND house_feature.House_ID = $id";

                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
            ?>


            <form method="post" style="max-width: 45em; margin: 0 auto;" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-3">
                    <img style="width: 60%; display: block; margin-left: auto; margin-right: auto; margin-bottom:" src="../images/modify-rental.png" >
                    <br><br>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <center><p style="font-size: 1.5em; font-weight: bold;">DETAILS</p></center>
                        <div class="col-md-6">
                            <label class="form-label">House Name</label>
                            <input type="text" class="form-control mb-3" value="<?php echo $row['HouseName'] ?>" name="homename" require>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control mb-3" value="<?php echo $row['Location'] ?>" name="homeloc" require>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Owner First Name</label>
                            <input type="text" class="form-control mb-3" name="fname_own" value="<?php echo $row['Owner_Fname'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Owner Last Name</label>
                            <input type="text" class="form-control mb-3" name="lname_own" value="<?php echo $row['Owner_Lname'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control mb-3" name="price" value="<?php echo $row['Price'] ?>">
                        </div>

                        <hr class = "mt-4 mb-5">
                        <center><p style="font-size: 1.5em; font-weight: bold;">FEATURES</p></center>

                        <div class="col-md-6">
                            <label class="form-label">Number of Rooms</label>
                            <input type="number" class="form-control mb-3" name="room" value="<?php echo $row['Rooms'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Number of Beds</label>
                            <input type="number" class="form-control mb-3" name="bed" value="<?php echo $row['Beds'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Number of Bathrooms</label>
                            <input type="number" class="form-control mb-3" name="bathroom" value="<?php echo $row['Bathroom'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Maximum Capacity</label>
                            <input type="number" class="form-control mb-3" name="maxcap" value="<?php echo $row['Max_Capacity'] ?>">
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
                            <a href="manage-rentals.php"><button class="btn btn-primary" type="button" style="width: 28%; background-color: #1d7874;"> < BACK</button></a>
                            <button class="btn btn-primary" type="submit" name="submit" style="width: 68%; background-color: #1d7874;" id="sub1" disabled="disabled">Submit</button>
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