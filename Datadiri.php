<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $ttl=$_POST['ttl'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $pendidikan=$_POST['pendidikan'];
    ?>
    <table border="1">
        <tr>
            <td colspan="2" align="center"><b>Data Registrasi</b></td>
        </tr>
        <tr>
            <td>Nama</td><td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td><td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td><?php echo $ttl; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td><td><?php echo $pendidikan; ?></td>
        </tr>
    </table>
    <a href="FormRegistrasi.php">INPUT DATA LAGI</a>
</body>
</html>
