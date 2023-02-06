<?php
session_start();
error_reporting(0);

include 'connection.php';

DEFINE('CHIPER', 'AES-128-CTR');
DEFINE('KEY', 'XeCq1nQ0Py6m4v7SD12KuNdAk');
DEFINE('OPTION', 0);
DEFINE('CRYPTION_IV', '2736452918592746');

if ($_POST) {
    $username = $_POST["username"];
    $userPassword = $_POST["userpassword"];

    $encryptUsername = openssl_encrypt($username, CHIPER, KEY, OPTION, CRYPTION_IV);
    $encryptPassword = openssl_encrypt($userPassword, CHIPER, KEY, OPTION, CRYPTION_IV);

    $query = "SELECT * FROM users WHERE user_name='$encryptUsername' and user_password='$encryptPassword' ";
    $fetchQuery = $conn->query($query);


    if ($fetchQuery->num_rows > 0) {
        while ($row = $fetchQuery->fetch_assoc()) {
            $_SESSION["userID"] = $row["user_id"];
            header("Location:../LoginTabs/blog.php");
        }
        $_SESSION["username"]=$_POST["username"];
    } else {
        echo "<script>alert('Giriş Başarısız.Hatalı Kullanıcı Adı Veya Şifre.');</script>";
    }
}
