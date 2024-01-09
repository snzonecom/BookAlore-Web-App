<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    $id = $_GET['id'];

    $sql = "DELETE house_details, house_feature, house_img
    FROM house_details
    JOIN house_feature ON house_details.House_ID = house_feature.House_ID
    JOIN house_img ON house_details.House_ID = house_img.House_ID
    WHERE house_details.House_ID = $id;";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        header("Location: manage-rentals.php?msg=Record deleted successfully");
    }
    else
    {
        echo "Failed: " .mysqli_error($con);
    }


?>