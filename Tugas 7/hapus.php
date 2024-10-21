<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username']) || $_SESSION['level'] != '2') {
    header("Location: index.php");
}

$npm = $_GET['npm'];
$sql = "DELETE FROM identitas WHERE npm='$npm'";

if ($conn->query($sql) === TRUE) {
    header("Location: tampil_data.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
