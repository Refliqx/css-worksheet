<?php
    require_once('koneksidb.php');

    if (isset($_POST['btnproses']) == 'btnproses') {
        $NoInduk = trim($_POST['NoInduk']);
        $Nama = trim($_POST['Nama']);
        $Jk = trim($_POST['Jk']);
        $TglLahir = trim($_POST['TglLahir']);
        $Alamat = trim($_POST['Alamat']);
        $Dosen = trim($_POST['Dosen']);
        $Telp = trim($_POST['Telp']);

        $query_sql = "INSERT INTO tb_mahasiswa (NoInduk, Nama, Jk, TglLahir, Alamat, Dosen, Telp) VALUES ('$NoInduk', '$Nama', '$Jk', '$TglLahir', '$Alamat', '$Dosen', '$Telp');";
        $sql = mysqli_query( $koneksidb, $query_sql );
        if ($sql) {
            echo "<script> alert('Data berhasil ditambahkan!'); </script>";
            echo "<script> window.location.href='index.php'; </script>";
        }
    }
?>