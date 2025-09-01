<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>DATA MAHASISWA</h2>
        <table class="frtabel">
            <form action="tambah.php" method="post">
                <caption>Tambah data Mahasiswa</caption>
                <tr>
                    <td width="140px">No. Induk</td>
                    <td>
                        <input type="text" name="NoInduk" maxlength="12">
                    </td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>
                        <input type="text" name="Nama" maxlength="50">
                    </td>
                </tr>
                <tr>
                    <td>Jk</td>
                    <td>
                        <input type="radio" name="Jk" value="L" checked> Laki Laki
                        <input type="radio" name="Jk" value="P" checked> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tgl. Lahir</td>
                    <td>
                        <input type="date" name="TglLahir">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="Alamat" cols="30"></textarea>
                    </td>
                </tr>
                <tr>
                <td>Dosen Pembimbing</td>
                    <td>
                        <input type="text" name="Dosen" maxlength="50">
                    </td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>
                        <input type="tel" name="Telp" maxlength="50">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" name="btnproses" value="btnproses">Proses</button>
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>