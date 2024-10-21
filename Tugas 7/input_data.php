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

    $sql = "INSERT INTO identitas (npm, nama, alamat, jk, tgl_lhr, email) 
            VALUES ('$npm', '$nama', '$alamat', '$jk', '$tgl_lhr', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: tampil_data.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
