<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div class="container">
        <h2>Edit Student</h2>
        <form method="post" action="edit.php">
            <input type="hidden" name="npm" value="<?php echo $row['npm']; ?>">
            <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
            <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required>
            <input type="date" name="tgl_lhr" value="<?php echo $row['tgl_lhr']; ?>" required>
            <input type="text" name="jk" value="<?php echo $row['jk']; ?>" maxlength="1" required>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
            <input type="submit" value="Update">
        </form>
    </div>

    <?php
    include "koneksi.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST["npm"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $tgl_lhr = $_POST["tgl_lhr"];
        $jk = $_POST["jk"];
        $email = $_POST["email"];

        $sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', tgl_lhr='$tgl_lhr', jk='$jk', email='$email' WHERE npm='$npm'";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Record updated successfully</p>";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>

</html>