<?php include "../php/connection.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ff16f2cb3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/hhaberDevami.css" type="text/css">
    <title>LOGO Blog</title>
</head>

<body>
    <nav class="container-fluid bg-basic">
        <header id="logo">LOGO<i class="fab fa-innosoft"></i> Blog</header>

        <ul id="menu">
            <li><a href="../html/kırklareli.php">Kırklareli</a></li>
            <li><a href="../html/universite.php">Kırklareli University</a></li>
            <li><a href="../html/blog.php">Blog</a></li>
            <li><a href="../html/contact.php"><i class="fas fa-headset"></i> Contact Us</a></li>
            <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
        </ul>

        <button type="button" class="btn" id="menu-btn" onclick="menuClick();"><i class="fas fa-bars"></i></button>
        <button type="button" class="btn" id="menu-close-btn" onclick="menuClose();"><i class="fas fa-times"></i></button>
    </nav>

    <ul id="acilirMenu" class="container-fluid">
        <li class="secenek"><a href="../html/kırklareli.php">Kırklareli</a></li>
        <li class="secenek"><a href="../html/universite.php">Kırklareli University</a></li>
        <li class="secenek"><a href="../html/blog.php">Blog</a></li>
        <li class="secenek"><a href="../html/contact.php"><i class="fas fa-headset"></i> Contact Us</a></li>
        <li class="secenek"><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
    </ul>

    <div id="anaSekme" class="container-fluid">
        <div class="container-box">


            <section id="section">

                <?php

                $sorguHaberler = "SELECT haber_id,haber_baslik,haber_icerik,haber_tarih,kategori_adi,haber FROM haberler AS h INNER JOIN kategoriler AS k ON h.kat_id=k.kategori_id WHERE haber_id=" . $_GET["id"];
                $fetchQueryHaberler = $conn->query($sorguHaberler);
                if ($fetchQueryHaberler->num_rows > 0) {
                    while ($rows = mysqli_fetch_assoc($fetchQueryHaberler)) {
                        echo "<article class='articleBox'><h2>" . $rows["haber_baslik"] .
                            "</h2><p>Haber Tarihi:" . $rows["haber_tarih"] . "<br>Kategori:" . $rows["kategori_adi"] . "<br>" . $rows["haber"]
                            . "</p></article>";
                    }
                }

                ?>


            </section>
        </div>
        <script src="../js/loginBlog.js" type="text/javascript"></script>

        <footer>
            <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
        </footer>
</body>

</html>