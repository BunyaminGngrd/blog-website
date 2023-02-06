<?php
session_start();
error_reporting(0);
include "../php/connection.php";

if ($_POST) {
    if(empty($_POST["yorum"])){
        $blog_id = $_SESSION["blogId"];
        header("Location:../html/yaziDevam.php?id=".$blog_id."#yorumlar");
    }
    else{
        $blog_id = $_SESSION["blogId"];
        $yorum = $_POST["yorum"];
        $userID = $_SESSION["userID"];
    
        $queryYorum = "INSERT INTO `yorumlar`(`kullanici_id`, `blog_id`, `yorum`, `tarih`) VALUES ($userID,$blog_id,'$yorum',CURRENT_DATE)";
        $fetchQueryYorumKayit = $conn->query($queryYorum);
    
        header("Location:../html/yaziDevam.php?id=".$blog_id."#yorumlar");
    }
}
