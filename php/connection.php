<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "netflix";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($con==false)
{
    echo "Database is not Connected!";
}
?>