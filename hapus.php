<?php
//tambahkan untuk session,, membatasi pembacaan script
session_start();
if(empty($_SESSION['user']) OR empty($_SESSION['pass'])){
    header("Location:index.php");
} else {
    include "koneksi.php";

    $id=$_GET['id'];

    mysqli_query($koneksi, "delete from kelas where id_kelas='$id'");
    header("Location:kelas.php");
}
?>