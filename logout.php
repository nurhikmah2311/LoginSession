<?php
    session_start(); //Memulai Session
    session_destroy(); //Hancurkan Session
    header("Location:index.php"); //Kembali ke halaman Login
?>