<?php session_start();
include "../php/connection.php";
?>
<?php
$userID = $_SESSION["userID"];
if ($_FILES["profilResmi"]) {
    $file = "pphotos/";
    $profil_tmp_name = $_FILES['profilResmi']['tmp_name'];
    $profil_url = substr($_FILES['profilResmi']['name'], -4, 4);
    $profil_new_name = rand(0, 999999) . $profil_url;
    $profil_upload = $file . $profil_new_name;
    if (!file_exists($file)) {
        mkdir("pphotos");
    }
    if (move_uploaded_file($profil_tmp_name, $profil_upload)) {
        $add = $conn->prepare("UPDATE users SET profile_image=? WHERE user_id =$userID");
        $run = $add->execute([$profil_new_name]);
    }
}
if ($_FILES["arkaplanResmi"]) {
    $file = "pphotos/";
    $background_tmp_name = $_FILES['arkaplanResmi']['tmp_name'];
    $background_url = substr($_FILES['arkaplanResmi']['name'], -4, 4);
    $background_new_name = rand(0, 999999) . $background_url;
    $background_upload = $file . $background_new_name;

    if (!file_exists($file)) {
        mkdir("pphotos");
    }
    if (move_uploaded_file($background_tmp_name, $background_upload)) {
        $add = $conn->prepare("UPDATE users SET background_image=? WHERE user_id =$userID");
        $run = $add->execute([$background_new_name]);
    }
}
if ($_POST["hakkinda"]) {
    $hakkinda = $_POST["hakkinda"];
    $queryKayit = "update users set hakkinda='$hakkinda' where user_id=$userID ";
    $fetchQueryKayit = $conn->query($queryKayit);
}
if ($_POST["isim"]) {
    $isim = $_POST["isim"];
    $queryKayit = "update users set name='$isim' where user_id=$userID ";
    $fetchQueryKayit = $conn->query($queryKayit);
}
if ($_POST["soyisim"]) {
    $soyisim = $_POST["soyisim"];
    $queryKayit = "update users set surname='$soyisim' where user_id=$userID ";
    $fetchQueryKayit = $conn->query($queryKayit);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ff16f2cb3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/profilDuzenle.css" type="text/css">
    <title>LOGO Blog</title>
</head>
<body>
    <nav class="container-fluid bg-basic">
        <header id="logo">LOGO<i class="fab fa-innosoft"></i> Blog</header>

        <ul id="menu">
            <li><a href="../LoginTabs/blog.php"><i class="fas fa-home"></i> Blog Home</a></li>
            <li><a href="profile.php"><img src="../kits/user.png"> Your Profile</a></li>
            <li><a href="#"><img src="../kits/settings.png"> Settings</a></li>
            <li><a href="../index.php"><img src="../kits/log-out.png"> Exit Profile</a></li>
        </ul>

        <button type="button" class="btn" id="menu-btn" onclick="menuClick();"><i class="fas fa-bars"></i></button>
        <button type="button" class="btn" id="menu-close-btn" onclick="menuClose();"><i class="fas fa-times"></i></button>
    </nav>
    <ul id="acilirMenu" class="container-fluid">
        <li class="secenek"><a href="../LoginTabs/blog.php"><i class="fas fa-home"></i> Blog Home</a></li>
        <li class="secenek"><a href="profile.php"><img src="../kits/user.png"> Your Profile</a></li>
        <li class="secenek"><a href="#"><img src="../kits/settings.png"> Settings</a></li>
        <li class="secenek"><a href="../index.php"><img src="../kits/log-out.png"> Exit Profile</a></li>
    </ul>

    <div id="anaSekme" class="container-fluid">

        <section id="section">

            <article class="container-fluid" id="profilDuzen">


                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Profil Düzenle</legend>
                        <label>İsim : </label> <br>
                        <textarea class="form-control" name="isim" style="height: 30px"></textarea>
                        <label>Soyisim : </label> <br>
                        <textarea class="form-control" name="soyisim" style="height: 30px"></textarea>
                        <label>Hakkınızda : </label> <br>
                        <textarea class="form-control" name="hakkinda" style="height: 100px"></textarea>
                        <label>Profil Resmi : </label> <br>
                        <input type="file" class="form-control" name="profilResmi">
                        <label>Arkaplan Resmi : </label> <br>
                        <input type="file" class="form-control" name="arkaplanResmi"><br>
                        <input type="submit" class="btn btn-success">
                        <input type="reset" class="btn btn-danger"><br>
                    </fieldset>
                </form>
            </article>
        </section>
    </div>
    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>
    <script src="../js/profile.js" type="text/javascript"></script>
</body>
</html>