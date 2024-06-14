<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>

<h2>Input Form</h2>
<form action="proses.php" method="post">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="lokasi">Lokasi:</label><br>
    <input type="text" id="lokasi" name="lokasi" required><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
    <label for="laki_laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label><br><br>

    <label for="skills">Skills:</label><br>
    <input type="checkbox" id="html" name="skills[]" value="HTML">
    <label for="html">HTML</label><br>
    <input type="checkbox" id="css" name="skills[]" value="CSS">
    <label for="css">CSS</label><br>
    <input type="checkbox" id="javascript" name="skills[]" value="JavaScript">
    <label for="javascript">JavaScript</label><br>
    <!-- Add more skills checkboxes as needed -->

    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

