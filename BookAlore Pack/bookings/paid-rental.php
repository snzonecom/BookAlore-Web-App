<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    $id = $_GET['id'];
    $sql = "UPDATE rent_status SET Status = 'PAID' WHERE Transaction_ID = '$id'";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        header("Location: book-pending.php");
    }
    else
    {
        echo "Failed: " .mysqli_error($con);
    }


?>