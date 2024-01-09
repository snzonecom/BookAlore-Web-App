<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    $id = $_GET['id'];
    $sql = "DELETE admin_db, admin_acc FROM admin_db
        INNER JOIN admin_acc ON admin_db.Employee_ID = admin_acc.Employee_ID
        WHERE admin_db.Employee_ID = '$id' AND admin_acc.Employee_ID = '$id'";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        header("Location: manage-employee.php?msg=Record deleted successfully");
    }
    else
    {
        echo "Failed: " .mysqli_error($con);
    }


?>