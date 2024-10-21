<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username']) || $_SESSION['level'] != '2') {
    header("Location: index.php");
}

$npm = $_GET['npm'];
$sql = "SELECT * FROM identitas WHERE npm='$npm'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Edit Data Mahasiswa</h2>
            <form method="POST" action="update.php">
                <input type="hidden" name="npm" value="<?php echo $row['npm']; ?>">
                <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
                <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required>
                <input type="radio" name="jk" value="L" <?php echo $row['jk'] == 'L' ? 'checked' : ''; ?> required>Laki-laki
                <input type="radio" name="jk" value="P" <?php echo $row['jk'] == 'P' ? 'checked' : ''; ?> required>Perempuan
                <input type="date" name="tgl_lhr" value="<?php echo $row['tgl_lhr']; ?>" required>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>

</html>