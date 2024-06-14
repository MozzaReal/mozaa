<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $ttl=$_POST['ttl'];
    ?>

<table border="1">
        <tr>
            <td colspan="2" align="center"><b>Document</b></td>
        </tr>
        <tr>
            <td>Nama</td><td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Nim</td><td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td><?php echo $ttl; ?></td>
        </tr>
    </table>

    

    <a href="coba2.php">INPUT DATA LAGI</a>
</body>
</html>
