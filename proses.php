<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses input</title>
</head>
<body>
<?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $lokasi = $_POST['lokasi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $skills = isset($_POST['skills']) ? $_POST['skills'] : array();

    ?>
        
        
            <br>Nama</br><br><?php echo $nama; ?></br>
        
            <br>Email</br><br><?php echo $email; ?></br>
        
            <br>Lokasi</br><br><?php echo $lokasi; ?></br>
        
            <br>Jenis Kelamin</br><br><?php echo $jenis_kelamin; ?></br>
        
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah setidaknya satu skill dipilih
    if (isset($_POST['skills']) && !empty($_POST['skills'])) {
        // Mengambil nilai yang dipilih dari checkbox
        $selected_skills = $_POST['skills'];
        
        // Mencetak nilai skill yang dipilih
        echo "Skill yang dipilih:<br>";
        foreach ($selected_skills as $skill) {
            echo $skill . "<br>";
        }
    } else {
        // Jika tidak ada skill yang dipilih
        echo "Anda belum memilih skill.";
    }
}
?>

   
    <a href="input.php">INPUT DATA LAGI</a>
    
</body>
</html>