<?php session_start();
include "../php/connection.php";
?>
<?php
if ($_POST) {
    $yazi = $_POST["blogum"];
    $baslik = $_POST["basligim"];
    $kategoriID = $_POST["kategori"];
    $icerik = $_POST["icerik"];
    $userID = $_SESSION["userID"];



    if ($_FILES["blogResmi"]) {
        $file = "photos/";
        $blog_tmp_name = $_FILES['blogResmi']['tmp_name'];
        $blog_url = substr($_FILES['blogResmi']['name'], -4, 4);
        $blog_new_name = rand(0, 999999) . $blog_url;
        $blog_upload = $file . $blog_new_name;

        if (!file_exists($file)) {
            mkdir("photos");
        }
        if (move_uploaded_file($blog_tmp_name, $blog_upload)) {
            $add = $conn->prepare("INSERT INTO `blog`( `user_id`,`kategori_id`,  `baslik`, `yazi`, `tarih`, `icerik`,`blogResmi`) VALUES ($userID,$kategoriID,'$baslik','$yazi',CURRENT_DATE,'$icerik',?)");
            $run = $add->execute([$blog_new_name]);
        }
    } else {
        $queryKayit = "INSERT INTO `blog`( `user_id`,`kategori_id`,  `baslik`, `yazi`, `tarih`, `icerik`) VALUES ($userID,$kategoriID,'$baslik','$yazi',CURRENT_DATE,'$icerik')";
        $fetchQueryKayit = $conn->query($queryKayit);
        if (!$fetchQueryKayit) {
            echo "<script>alert('Kayıt Başarısız');</script>";
        } else {
            echo "<script>alert('Kayıt Başarılı');</script>";
            header("Location:blog.php");
        }
    }
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
    <link rel="stylesheet" href="../css/blogYaz.css" type="text/css">
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

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="yeniKayit">
                    <fieldset>
                        <legend>Blog Ekle</legend>
                        <label>Başlık : </label> <br>
                        <textarea class="form-control" name="basligim" style="height: 50px"></textarea><br>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                            <select class="form-select" name="kategori">
                                <option selected>Choose...</option>
                                <option value="1">Gündem</option>
                                <option value="2">Teknoloji</option>
                                <option value="3">Film</option>
                                <option value="4">Kitap</option>
                                <option value="5">Doğa</option>
                            </select>
                        </div>
                        <label>Blog Resmi : </label> <br>
                        <input type="file" class="form-control" name="blogResmi">
                        <label>İçerik : </label> <br>
                        <textarea class="form-control" name="icerik" style="height: 100px"></textarea>
                        <label>Blog : </label> <br>
                        <textarea class="form-control" name="blogum" style="height: 100px"></textarea><br>
                        <input type="submit" class="btn btn-success">
                        <input type="reset" class="btn btn-danger"><br>
                    </fieldset>
                </form>


            </article>

        </section>

        <aside>
            <img src="../images/blogİmage2.jpg">
        </aside>




    </div>

    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>


    <script src="../js/profile.js" type="text/javascript"></script>



</body>

</html>