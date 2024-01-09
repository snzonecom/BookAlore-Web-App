<?php

    include("../connect/connection.php");
    include("../connect/functions.php");

    $id = $_GET['id'];
    $sql = "DELETE transaction_tbl, rent_status FROM transaction_tbl
        INNER JOIN rent_status ON transaction_tbl.Transaction_ID = rent_status.Transaction_ID
        WHERE transaction_tbl.Transaction_ID = '$id' AND rent_status.Transaction_ID = '$id'";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        header("Location: book-record.php?msg=Record deleted successfully");
    }
    else
    {
        echo "Failed: " .mysqli_error($con);
    }


?>