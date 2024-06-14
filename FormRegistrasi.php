<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <form action="Datadiri.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat"><br>
        
        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br>
        
        <label for="ttl">Tanggal Lahir:</label><br>
        <input type="date" id="ttl" name="ttl"><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        
        <label for="pendidikan">Pendidikan:</label><br>
        <select name="pendidikan">
                        <option value="-pilih">
                        <option value="SD">SD
                        <option value="SMP">SMP
                        <option value="SMA">SMA 
                        <option value="S1">S1 
                        <option value="D3">D3
</select>
<input type="submit" value="submit"><input type="reset" value="cancel">
    </form>
</body>
</html>
