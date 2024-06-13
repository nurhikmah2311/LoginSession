<?php

include "koneksi.php"; //memasukkan kunci

$user = $_POST['user'];
$pass = md5($_POST['pass']); //Enkripsi data ke md5

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE user='$user' AND pass='$pass'");
$jumlah = mysqli_num_rows($login); //Menghitung data
$x = mysqli_fetch_array($login); //Ambil data dari database

if($jumlah == 1){
    //mendaftarkan 
    session_start(); //Memulai Session
    
    //Assign Session
    $_SESSION['user']=$x['user'];
    $_SESSION['pass']=$x['pass'];
    
    header("Location:kelas.php"); //jika Login Berhasil
    }
    else{
    header("Location:login.php");
    }
?>