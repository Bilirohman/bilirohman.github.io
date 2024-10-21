<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$npm = $_SESSION['npm'];

$sql = "SELECT * FROM identitas WHERE npm='$npm'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo '<div class="login-container">
            <div class="login-box">
                <h2>Anda belum memiliki data mahasiswa</h2>
                <a href="input.php" class="btn">Masukkan Data Mahasiswa</a>
            </div>
          </div>';
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="table-container">
        <h2>Data Mahasiswa</h2>
        <table>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <?php if ($_SESSION['level'] == '2') {
                    echo "<th>Aksi</th>";
                } ?>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['npm']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['jk']; ?></td>
                    <td><?php echo $row['tgl_lhr']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <?php if ($_SESSION['level'] == '2') { ?>
                        <td>
                            <a class="btn" href="edit.php?npm=<?php echo $row['npm']; ?>">Edit</a>
                            <a class="btn" href="hapus.php?npm=<?php echo $row['npm']; ?>">Hapus</a>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        <a href="logout.php" class="logout-btn btn">Logout</a>
    </div>
</body>

</html>