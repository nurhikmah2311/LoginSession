<?php
//tambahkan untuk session,, membatasi pembacaan script
session_start();
if(empty($_SESSION['user']) OR empty($_SESSION['pass'])){
    header("Location:index.php");
} else {
?>
<html>
    <head>
        <title>Edit Data</title>
        <link rel="stylesheet" type="text/css" href="edit.css">
    </head>
    <body>
        <?php
            include "koneksi.php";
            $id=$_GET['id']; //menangkap id 
            $data=mysqli_query($koneksi, "select*from kelas where id_kelas='$id'");
            $d=mysqli_fetch_array($data); //hasilnya disimpan pada variabel d dalam bentuk array
        ?>

        <form method="post" action="editproses.php" class="form-container">
            <h1>Edit Data</h1>
            <label for="gedung">Gedung :</label>
            <input type="text" name="gedung" value="<?=$d['gedung']?>"> <br>

            <label for="gedung">Angka  :</label>
            <input type="text" name="angka" value="<?=$d['angka']?>"> <br>

            <input type="hidden" name="id" value="<?=$d['id_kelas']?>">
            <input type="submit" value="Edit">
            <a href="kelas.php">Batal</a>
        </form>
    </body>
</html>

<?php //tambahan
} //tambahan untuk session
?>