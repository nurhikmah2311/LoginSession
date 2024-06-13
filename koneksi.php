<?php
$server="localhost:3307";
$username="root";
$password="";
$database="weblanjut";

//Koneksi dan memilih databse di server
$koneksi=mysqli_connect($server,$username,$password,$database)
or die(mysqli_connect_error());
?>