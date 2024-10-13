<?php
include "koneksi.php";

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $sql = "DELETE FROM identitas WHERE npm='$npm'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}

header("Location: tabel.php");
exit();
?>
