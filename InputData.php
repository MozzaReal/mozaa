<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<?php
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $ttl=$_POST['ttl'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $jurusan=$_POST['jurusan'];
    $tahun_masuk=$_POST['tahun_masuk'];
    ?>
    <table border="1">
        <tr>
            <td colspan="2" align="center"><b>Data Mahasiswa</b></td>
        </tr>
        <tr>
            <td>NIM</td><td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Nama</td><td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td><?php echo $ttl; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td><td><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <td>Tahun Masuk</td><td><?php echo $tahun_masuk; ?></td>
        </tr>
    </table>
    <a href="DataMahasiswa.php">INPUT DATA LAGI</a>
    
</body>
</html>