<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bookalore";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("An error occurred! Failed to connect in the database.");
}

?>