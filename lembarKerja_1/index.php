<?php
    require_once("koneksidb.php");

    $sql_query = "SELECT * FROM tb_mahasiswa";
    $sql = mysqli_query($koneksidb, $sql_query);
    $totaldata = mysqli_num_rows($sql);
    $data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>DATA MAHASISWA</h2>
    <table class="dttabel" width="100%">
        <tr>
            <th>No.</th>
            <th>No. Induk</th>
            <th>Nama Mahasiswa</th>
            <th>JK</th>
            <th>Tgl. Lahir</th>
            <th>Alamat</th>
            <th>Dosen Pembimbing</th>
            <th>No. Telepon</th>
        </tr>
        <tr>
            <td>1</td>
            <td>160202340010</td>
            <td>Agus</td>
            <td>L</td>
            <td>02-10-1990</td>
            <td>Malang</td>
            <td>Bambang</td>
            <td>081233456789</td>
        </tr>
        <tr>
            <td>2</td>
            <td>160202340013</td>
            <td>Budi</td>
            <td>L</td>
            <td>03-02-1989</td>
            <td>Surabaya</td>
            <td>Atin</td>
            <td>081145673456</td>
        </tr>
        <tr>
            <td>3</td>
            <td>160202340017</td>
            <td>Cahya</td>
            <td>P</td>
            <td>06-05-1991</td>
            <td>Blitar</td>
            <td>Atin</td>
            <td>081334556689</td>
        </tr>
        <tr>
            <td>4</td>
            <td>160202340018</td>
            <td>Doni</td>
            <td>L</td>
            <td>05-12-1990</td>
            <td>Malang</td>
            <td>Samsuddin</td>
            <td>-</td>
        </tr>
        <?php do {
            $id = 4;
            if ($totaldata == 0) {
                echo "Data Kosong";
        } else { ?>
        <tr>
            <td><?php for($i = 0; $i <= $id; $i++) $id = $i ?></td>
            <td><?php echo $data["NoInduk"]; ?></td>
            <td><?php echo $data["Nama"]; ?></td>
            <td><?php echo $data["Jk"]; ?></td>
            <td><?php echo $data["TglLahir"]; ?></td>
            <td><?php echo $data["Alamat"]; ?></td>
            <td><?php echo $data["Dosen"]; ?></td>
            <td><?php echo $data["Telp"] ?></td>
        </tr>
        <?php }
        } while ($data = mysqli_fetch_assoc($sql));
        ?>
    </table>
    <br>
    <a href="add.php">Add Data</a>
</body>
</html>