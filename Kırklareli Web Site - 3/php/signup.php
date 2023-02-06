<?php

include 'connection.php';

DEFINE('CHIPER', 'AES-128-CTR');
DEFINE('KEY', 'XeCq1nQ0Py6m4v7SD12KuNdAk');
DEFINE('OPTION', 0);
DEFINE('CRYPTION_IV', '2736452918592746');

if (isset($_POST)) {
   
        if ($_POST["password"] == $_POST["passwordCheck"]) {
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];
            $userPassword = $_POST["password"];
            $image = "111111.png";

            $encryptUsername = openssl_encrypt($username, CHIPER, KEY, OPTION, CRYPTION_IV);
            $encryptPassword = openssl_encrypt($userPassword, CHIPER, KEY, OPTION, CRYPTION_IV);

            $query = "INSERT INTO users (`user_name`, `user_password`, `name`, `surname`, `email`, `phone_number`,`profile_image`,`background_image`) VALUES ('$encryptUsername','$encryptPassword','$name','$surname','$email','$phonenumber','$image','$image')";
            $fetchQuery = $conn->query($query);

            if (!$fetchQuery) {
                echo "<script>alert('Kayıt Başarısız');</script>";
            } else {
                header("Location:../html/loginSignUp.php");
                echo "<script>alert('Kayıt Başarılı');</script>";
            }
        } else {
            echo "<script>alert('Parolalar Eşleşmiyor');</script>";
            header("Location:../html/loginSignUp.php");
        }
    
}
