<?php
//tambahkan untuk session,, membatasi pembacaan script
session_start();
if(empty($_SESSION['user']) OR empty($_SESSION['pass'])){
    header("Location:index.php");
} else {
    include "koneksi.php";
    // query sql
    $query = "select * from kelas";
    $hasil = mysqli_query($koneksi, $query);
?>   

    <html>
        <head>
            <title>Data Kelas FTIK</title>
            <link rel="stylesheet" type="text/css" href="kelas.css">
        </head>
        <body>
            <div class="container">
                <h1>Data Kelas FTIK</h1>
                <a href='tambah.php' class="btn">Tambah Data</a>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Gedung</th>
                        <th>Angka</th>
                        <th>Aksi</th>
                    </tr>
                    <tbody>
                        <?php
                        $no = 0;
                        // menampilkan data
                        while($data=mysqli_fetch_array($hasil)){
                            $no++;
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>{$data['gedung']}</td>";
                            echo "<td>{$data['angka']}</td>";
                            echo "<td class='action-links'>
                                    <a href='edit.php?id={$data['id_kelas']}' class='edit'>Edit</a> |
                                    <a href='hapus.php?id={$data['id_kelas']}'>Hapus</a> 
                                </td>";
                            echo "<tr>";
                        }
                        ?>   
                    </tbody>
                </table>
                <a href='logout.php' class="btn logout">Keluar</a>
            </div>
        </body>
    </html>

<?php
}
?>