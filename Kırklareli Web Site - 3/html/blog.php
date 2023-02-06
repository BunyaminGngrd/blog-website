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
    <link rel="stylesheet" href="../css/bbblog.css" type="text/css">
    <title>LOGO Blog</title>
</head>

<body>
    <nav class="container-fluid bg-basic">
        <header id="logo">LOGO<i class="fab fa-innosoft"></i> Blog <span id="login"><a href="../html/loginSignUp.php">Login & Sign Up <i class="fas fa-sign-in-alt"></i></a></span></header>

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

        <section id="section">


            <article class="container-fluid" id="baslikArticle">
                <h2>Popüler Bloglar</h2>
            </article>


            <form action="loginSignUp.php" method="post">
                <?php
                $sorguBloglar = "SELECT blog_id,name,surname,baslik,kategori_adi,yazi,icerik,tarih,blogResmi FROM users AS u INNER JOIN blog AS b ON u.user_id=b.user_id
            INNER JOIN kategoriler AS k ON b.kategori_id=k.kategori_id ";
                $fetchQueryBlog = $conn->query($sorguBloglar);
                if ($fetchQueryBlog->num_rows > 0) {
                    while ($rows = mysqli_fetch_assoc($fetchQueryBlog)) {
                        echo "<article class='container-fluid blogArticle'>" . "<h3>" .
                            $rows["baslik"] . "</h3>" . "<img src='../LoginTabs/photos/$rows[blogResmi]' class='fakeImage'>" . "<br><h5>Yazar: " . $rows["name"] . " " . $rows["surname"] . "</h5><br>" .
                            "<h6>Kategori: " . $rows["kategori_adi"] . " Tarih:" . $rows["tarih"] . "</h5><br><p>" . $rows["yazi"] .
                            "</p><input type='submit' class='btn btn-basic yaziDevam' name='" . $rows["blog_id"] . "' value='Yazının devamı.'></article>";
                    }
                }
                ?>
            </form>

        </section>

        <aside id="aside">
            <h3>Bunlara'da göz atın.</h3>
            <form action="loginSignUp.php" method="post">
                <?php
                $sorguBloglar = "SELECT blog_id,name,surname,baslik,kategori_adi,yazi,icerik,tarih FROM users AS u INNER JOIN blog AS b ON u.user_id=b.user_id
            INNER JOIN kategoriler AS k ON b.kategori_id=k.kategori_id ";
                $fetchQueryBlog = $conn->query($sorguBloglar);
                if ($fetchQueryBlog->num_rows > 0) {
                    while ($rows = mysqli_fetch_assoc($fetchQueryBlog)) {
                        echo "<article class='container-fluid yanciArticle'><h5>" . $rows["baslik"] . "</h5><p>" . $rows["icerik"] . "</p><input type='submit' class='btn btn-basic yaziDevam' name='" . $rows["blog_id"] . "' value='Yazının devamı.'>
                    </article>";
                    }
                }
                ?>
            </form>

        </aside>

    </div>

    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>


    <script src="../js/blog.js" type="text/javascript"></script>
</body>

</html>