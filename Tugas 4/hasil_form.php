<?php
// Periksa apakah metode request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form input
    $npm = htmlspecialchars($_POST['npm']);
    $nama = strtoupper(htmlspecialchars($_POST['nama'])); // Huruf besar
    $alamat = strtoupper(htmlspecialchars($_POST['alamat'])); // Huruf besar
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $hobi = htmlspecialchars($_POST['hobi']);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .result-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #3498db;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .result-group {
            margin-bottom: 10px;
        }

        .result-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .result-group p {
            margin: 0;
            padding: 8px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="result-container">
        <h2>Hasil Input Data Mahasiswa</h2>

        <div class="result-group">
            <label>NPM:</label>
            <p><?php echo $npm; ?></p>
        </div>

        <div class="result-group">
            <label>Nama:</label>
            <p><?php echo $nama; ?></p>
        </div>

        <div class="result-group">
            <label>Alamat:</label>
            <p><?php echo $alamat; ?></p>
        </div>

        <div class="result-group">
            <label>Tempat Lahir:</label>
            <p><?php echo $tempat_lahir; ?></p>
        </div>

        <div class="result-group">
            <label>Tanggal Lahir:</label>
            <p><?php echo $tanggal_lahir; ?></p>
        </div>

        <div class="result-group">
            <label>Jenis Kelamin:</label>
            <p><?php echo $jenis_kelamin; ?></p>
        </div>

        <div class="result-group">
            <label>Hobi:</label>
            <p><?php echo $hobi; ?></p>
        </div>
    </div>
</body>

</html>