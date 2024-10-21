<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);  

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['npm'] = $row['npm'];  

        header("Location: tampil_data.php");
    } else {
        echo "Username atau password salah!";
    }
}
?>
