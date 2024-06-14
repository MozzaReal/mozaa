<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
<form action="InputData.php" method="post">
    <h1>From Input Data Mahasiswa<h1>
<br>
<pre>
    NIM            :<input type="text" name="nim">
    Nama           :<input type="text" name="nama">
    Jenis Kelamin  :<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                    <input type="radio" name="jenis_kelamin" value="Laki_laki">Laki-Laki
    Tanggal Lahir  :<input type="date"class="form-control" required name="ttl"> 
    Tempat Lahir   :<input type="text" name="tempat_lahir">
    Jurusan        :<select name="jurusan">
                        <option value="-pilih">
                        <option value="Akutansi">Akutansi
                        <option value="Sistem Informasi">Sistem Informasi
                        <option value="Manajemen">Manajemen
</select>
    Tahun Masuk    :<select name="tahun_masuk">
                        <option value="2021">2021
                        <option value="2022">2022
                        <option value="2023">2023
</select>
<input type="submit" value="submit"><input type="reset" value="cancel">             
    
</body>
</html>
