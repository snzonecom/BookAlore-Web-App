<?php
  session_start();

  include("../connect/connection.php");
  include("../connect/functions.php");

  $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $firstname = $_POST['adfname'];
      $lastname = $_POST['adlname'];
      $contact = $_POST['adcontact'];
      $bday = $_POST['adbday'];
      $adpassw = $_POST['adpassw'];
      $adsex = $_POST['adsex'];

      if(!empty($firstname) && !empty($lastname) && !empty($contact) && !empty($bday) && !empty($adpassw) && !empty($adsex))
      {
            $query = "UPDATE admin_db, admin_acc SET admin_db.FirstName = '$firstname', admin_db.LastName = '$lastname', admin_db.Contact = '$contact', admin_db.Birthday = '$bday', admin_db.Age = FLOOR(DATEDIFF(CURRENT_DATE, '$bday') / 365.25), admin_acc.Password = '$adpassw', admin_db.Gender = '$adsex' WHERE admin_db.Employee_ID = '$id' AND admin_acc.Employee_ID = '$id'";

            mysqli_query($con, $query);
            header("Location: manage-employee.php");
            die;
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
    <title>BookAlore - Modify Employee</title>
    <!-- link to bootstrap 5 - css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                <li style="background: #f4c095;"><a href="../manage-employee/manage-employee.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Manage Admins</span>
                </a></li>
                <li><a href="../manage-rentals/manage-rentals.php">
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
            <h1 style="text-align:center; font-size: 7rem; color: #071E22; font-weight: bold;">EDIT EMPLOYEE RECORD</h1>
            
            <?php
                $id = $_GET['id'];
                $sql = "SELECT admin_db.Employee_ID, admin_db.FirstName, admin_db.LastName, admin_db.Gender, admin_db.Contact, admin_db.Birthday, admin_db.Age, admin_acc.Password FROM admin_db, admin_acc WHERE admin_db.Employee_ID = $id AND admin_acc.Employee_ID = $id";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
            ?>
            
            <form method="post" style="max-width: 45em; margin: 0 auto; font-family: 'Poppins', sans serif;">
                <div class="mb-3">
                    <img style="width: 60%; display: block; margin-left: auto; margin-right: auto; margin-bottom:" src="../images/modify-emplo.png" >
                    <br><br>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control mb-3" name="adfname" value="<?php echo $row['FirstName']?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control mb-3" name="adlname" value="<?php echo $row['LastName']?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control mb-3" name="adcontact" value="<?php echo $row['Contact']?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Birthday</label>
                            <input type="date" class="form-control mb-3" name="adbday" value="<?php echo $row['Birthday']?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control mb-3" name="adpassw" value="<?php echo $row['Password']?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSex" class="form-label">Sex</label>
                            <select id="inputSex" class="form-select" name="adsex" value="<?php echo $row['Gender']?>">
                                <option>Female</option>
                                <option>Male</option>
                            </select>
                        </div>

                        </div>
                            <span class="badge mb-3 text-wrap lh-base" style="background-color: #679289; font-weight: normal; text-align: left; font-size: small;">
                            <b>REMINDER:</b> Please check the employee details before submitting it. The EMPLOYEE ID will be generated automatically after registration. Give the employee his/her EMPLOYEE ID after registration.
                            </span>
                        </div>

                        <div class="col-12 mb-2 p-3">
                            <div class="form-check">
                            <!-- script link JQuery function - disable and enable of submit button upon trigger of checkbox -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I double checked the information entered for this employee record update.
                                </label>
                            </div>
                        </div>
              
                        <div class="d-grid gap-2 d-md-block" style="display: block; margin-left: 1em; margin-right: 0em;">
                        <a href="manage-employee.php"><button class="btn btn-primary" type="button" style="width: 28%; background-color: #1d7874;"> < BACK</button></a>
                            <button class="btn btn-primary" type="submit" name="submit" style="width: 68%; background-color: #1d7874;" id="sub1" disabled="disabled">Update</button>
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