<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Data</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="container">
        <h2>Insert New Student</h2>
        <form method="post" action="input.php">
            <input type="text" name="npm" placeholder="NPM" required>
            <input type="text" name="nama" placeholder="Name" required>
            <input type="text" name="alamat" placeholder="Address" required>
            <input type="date" name="tgl_lhr" required>
            <input type="text" name="jk" placeholder="Gender (M/F)" maxlength="1" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" value="Submit">
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

        $sql = "INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email)
                VALUES ('$npm', '$nama', '$alamat', '$tgl_lhr', '$jk', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>New record created successfully</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>
</body>
</html>
