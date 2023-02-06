<?php include "php/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ff16f2cb3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sstyle.css" type="text/css">
    <title>LOGO Home</title>
</head>

<body>
    <nav class="container-fluid bg-basic">
        <header id="logo">LOGO<i class="fab fa-innosoft"></i> </header>

        <ul id="menu">
            <li><a href="html/kırklareli.php">Kırklareli</a></li>
            <li><a href="html/universite.php">Kırklareli University</a></li>
            <li><a href="html/blog.php">Blog</a></li>
            <li><a href="html/contact.php"><i class="fas fa-headset"></i> Contact Us</a></li>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        </ul>

        <button type="button" class="btn" id="menu-btn" onclick="menuClick();"><i class="fas fa-bars"></i></button>
        <button type="button" class="btn" id="menu-close-btn" onclick="menuClose();"><i class="fas fa-times"></i></button>
    </nav>

    <ul id="acilirMenu" class="container-fluid">
        <li class="secenek"><a href="html/kırklareli.php">Kırklareli</a></li>
        <li class="secenek"><a href="html/universite.php">Kırklareli University</a></li>
        <li class="secenek"><a href="html/blog.php">Blog</a></li>
        <li class="secenek"><a href="html/contact.php"><i class="fas fa-headset"></i> Contact Us</a></li>
        <li class="secenek"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
    </ul>

    <div id="anaSekme" class="container-fluid">

        <section>
            <h2 id="anasekmeH2">
                <i class="fas fa-newspaper"></i>
                Son Dakika Gelişmeleri
                <button type="button" id="responsive-menu-btnOpen" class="btn btn-basic" onclick="responsiveMenuOpen();">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <button type="button" id="responsive-menu-btnClose" class="btn btn-basic" onclick="responsiveMenuClose();">
                    <i class="fas fa-times"></i>
                </button>
            </h2>

        
            <!--Responsive Aside Start-->

            <article id="menuArticle">
                <h3>Popüler Bloglar</h3>
                <?php
                $sorguBloglar = "SELECT blog_id,name,surname,baslik,kategori_adi,yazi,icerik,tarih FROM users AS u INNER JOIN blog AS b ON u.user_id=b.user_id
                INNER JOIN kategoriler AS k ON b.kategori_id=k.kategori_id ";
                $fetchQueryBlog = $conn->query($sorguBloglar);
                if ($fetchQueryBlog->num_rows > 0) {
                    while ($rows = mysqli_fetch_assoc($fetchQueryBlog)) {
                        echo "<article class='icYanciArticle'>
                        <button type='button' class='btn btn-basic container-fluid'name='" . $rows["blog_id"] . "'><h4>" . $rows["baslik"] .
                            "</h4>" . "<br><p>" . $rows["icerik"] . "</p></button></article>";
                    }
                }
                ?>
            </article>

            <!--Responsive Aside Finish-->

            <?php
            $sorguHaberler = "SELECT haber_id,haber_baslik,haber_icerik,haber_tarih,kategori_adi,haber FROM haberler AS h INNER JOIN kategoriler AS k ON h.kat_id=k.kategori_id";
            $fetchQueryHaberler = $conn->query($sorguHaberler);
            if ($fetchQueryHaberler->num_rows > 0) {
                while ($rows = mysqli_fetch_assoc($fetchQueryHaberler)) {
                    echo "<article class='articleBox'><h2>" . $rows["haber_baslik"] .
                        "</h2><p>Haber Tarihi:" . $rows["haber_tarih"] . "<br>Kategori:" . $rows["kategori_adi"] . "<br>" . $rows["haber"]
                        . "</p><a href='html/haberDevami.php?id=" . $rows["haber_id"] . "'><input type='submit' class='btn btn-basic yaziDevam' name='#' value='Haberin Devamı.'></a></article>";
                }
            }
            ?>
        </section>



        <aside>
            <h3>Popüler Bloglar</h3>
            <?php
            $sorguBloglar = "SELECT blog_id,name,surname,baslik,kategori_adi,yazi,icerik,tarih FROM users AS u INNER JOIN blog AS b ON u.user_id=b.user_id
                INNER JOIN kategoriler AS k ON b.kategori_id=k.kategori_id ";
            $fetchQueryBlog = $conn->query($sorguBloglar);
            if ($fetchQueryBlog->num_rows > 0) {
                while ($rows = mysqli_fetch_assoc($fetchQueryBlog)) {
                    echo "<article class='yanciArticle'>
                        <button type='button' class='btn btn-basic container-fluid' name='" . $rows["blog_id"] . "'><h4>" . $rows["baslik"] .
                        "</h4>" . "<br><p>" . $rows["icerik"] . "</p></button></article>";
                }
            }
            ?>

        </aside>

    </div>

    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>
       
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>