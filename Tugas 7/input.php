<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Form Input Data Mahasiswa</h2>
            <form method="POST" action="input_data.php">
                <input type="text" name="npm" placeholder="NPM" required>
                <input type="text" name="nama" placeholder="Nama" required>
                <input type="text" name="alamat" placeholder="Alamat" required>
                <div>
                    <label>Jenis Kelamin:</label><br>
                    <input type="radio" name="jk" value="L" required>Laki-laki
                    <input type="radio" name="jk" value="P" required>Perempuan
                </div>
                <input type="date" name="tgl_lhr" placeholder="Tanggal Lahir" required>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>