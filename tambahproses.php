<?php

include "koneksi.php";

//tangkap data
$gedung=$_POST['gedung'];
$angka=$_POST['angka'];

mysqli_query($koneksi, "insert into kelas(gedung,angka) values('$gedung','$angka')");

header("Location:kelas.php");
?>