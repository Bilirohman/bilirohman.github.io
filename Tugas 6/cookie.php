<?php
$cookie_name = "username";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie bernama '" . $cookie_name . "' belum disetel!";
} else {
    echo "Cookie '" . $cookie_name . "' sudah disetel!<br>";
    echo "Nilainya: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> Refresh halaman untuk melihat nilai cookie.</p>

</body>
</html>
