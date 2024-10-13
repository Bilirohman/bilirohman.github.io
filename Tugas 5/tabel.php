<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Data</title>
    <link rel="stylesheet" type="text/css" href="tabel.css">
</head>
<body>
    <h2>Student List</h2>
    <table>
        <tr>
            <th>NPM</th>
            <th>Name</th>
            <th>Address</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php
        include "koneksi.php";

        $sql = "SELECT * FROM identitas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td data-label='NPM'>".$row["npm"]."</td>
                        <td data-label='Name'>".$row["nama"]."</td>
                        <td data-label='Address'>".$row["alamat"]."</td>
                        <td data-label='Birth Date'>".$row["tgl_lhr"]."</td>
                        <td data-label='Gender'>".$row["jk"]."</td>
                        <td data-label='Email'>".$row["email"]."</td>
                        <td data-label='Actions'>
                            <a href='edit.php?npm=".$row["npm"]."'>Edit</a>
                            <a href='delete.php?npm=".$row["npm"]."'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No data found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
