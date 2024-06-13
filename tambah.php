<?php
//tambahkan untuk session,, membatasi pembacaan script
session_start();
if(empty($_SESSION['user']) OR empty($_SESSION['pass'])){
    header("Location:index.php");
} else {
?>
<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" type="text/css" href="tambah.css">
    </head>
    <body>
        <form method="post" action="tambahproses.php" class="form-container">
            <h1>Tambah Data</h1>
            <label for="gedung">Gedung :</label>
            <input type="text" name="gedung"> <br>

            <label for="angka">Angka   :</label>
            <input type="text" name="angka"> <br>

            <input type="submit" value="Tambah">
            <a href="kelas.php">Batal</a>
        </form>
    </body>
</html>

<?php //tambahan
} //tambahan untuk session
?>