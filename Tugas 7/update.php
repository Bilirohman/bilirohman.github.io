<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $email = $_POST['email'];

    $sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', jk='$jk', tgl_lhr='$tgl_lhr', email='$email' WHERE npm='$npm'";

    if ($conn->query($sql) === TRUE) {
        header("Location: tampil_data.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
