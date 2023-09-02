<?php
$server="localhost";
$username="root";
$password="Joker.321@";
$con=mysqli_connect($server,$username,$password);

if (!$con){
    die("Could not connect to server" .mysqli_connect_error());

}
echo "Connected to server";


?>