<?php session_start();
include "../php/connection.php";   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ff16f2cb3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/yyyourProfile.css" type="text/css">
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


            <article class="container-fluid" id="baslikArticle">
                <?php
                header("Refresh: 60;");
                $sorguBloglar = "SELECT name,surname,user_name,hakkinda,profile_image,background_image FROM users WHERE user_id =" . $_SESSION['userID'];
                $fetchQueryBlog = $conn->query($sorguBloglar);
                if ($fetchQueryBlog->num_rows > 0) {
                    while ($rows = mysqli_fetch_assoc($fetchQueryBlog)) {
                        echo "<img src='pphotos/$rows[background_image]' class='fakeImage'>";
                        echo "<div id='pro'><img src='pphotos/$rows[profile_image]' class='profilResmi'>" . "<h2>" . $rows["name"] . " " . $rows["surname"] . "</h2></div><br><h5>@" . $_SESSION['username'] . "</h5><br><p>" . $rows["hakkinda"] . "</p>";
                    }
                }
                ?>

                <div class="list-group">
                    <a href="profilDuzenle.php" class="list-group-item list-group-item-action">Profili Düzenle</a>
                    <a href="blogYaz.php" class="list-group-item list-group-item-action">New Blog</a>
                </div>

            </article>

            <nav class="nav nav-pills nav-fill">
                <a class="nav-link" href="#bloglar" id="bloglar" onclick="bloglar();">Bloglar</a>
                <a class="nav-link" href="#yorumlar" id="yorumlar" onclick="yorumlar();">Yorumlar</a>
                <a class="nav-link" href="#begeniler" id="begeniler">Begeniler</a>
            </nav>

            <article class="container-fluid" id="blogArticle">
                
                <?php
                $sorguBloglar = "SELECT blog_id,name,surname,baslik,kategori_adi,yazi,icerik,tarih,blogResmi FROM users AS u INNER JOIN blog AS b ON u.user_id=b.user_id
            INNER JOIN kategoriler AS k ON b.kategori_id=k.kategori_id WHERE b.user_id =" . $_SESSION['userID']." ORDER BY tarih DESC";
                $fetchQueryBlog = $conn->query($sorguBloglar);
                if ($fetchQueryBlog->num_rows > 0) {
                    while ($rows = mysqli_fetch_assoc($fetchQueryBlog)) {
                        echo "<article class='container-fluid blogArticle'>" . "<h3>" .
                            $rows["baslik"] . "</h3>" . "<img src='pphotos/$rows[blogResmi]' class='fakeImage'>" . "<br><h5>Yazar: " . $rows["name"] . " " . $rows["surname"] . "</h5><br>" .
                            "<h6>Kategori: " . $rows["kategori_adi"] . " Tarih:" . $rows["tarih"] . "</h5><br><p>" . $rows["yazi"] .
                            "</p><a href='../html/yaziDevam.php?id=" . $rows["blog_id"] . "'><input type='submit' class='btn btn-basic yaziDevam' name='#' value='Yazının devamı.'></a></article>";
                    }
                }
                ?>
                
            </article>

            <article class="container-fluid" id="yorumlarArticle">
                <?php
                 $sorguYorum = "SELECT yorum,name,surname,y.tarih FROM yorumlar AS y 
                 INNER JOIN users AS u ON y.kullanici_id=u.user_id INNER JOIN blog AS b ON b.blog_id=y.blog_id WHERE u.user_id=" . $_SESSION['userID'];
                 $fetchQueryYorum = $conn->query($sorguYorum);
                 if ($fetchQueryYorum->num_rows > 0){
                    while ($rows = mysqli_fetch_assoc($fetchQueryYorum)) {
                        echo "<div class='card'><div class='card-body'> Kullanıcı: " . $rows["name"] . " " . $rows["surname"] . "<br>" . $rows["yorum"] . "<br>Tarih: " . $rows["tarih"] . "</div></div>";
                    }
                 }
                ?>
            </article>
            <article class="container-fluid" id="begenilerArticle"></article>


        </section>



        <aside id="aside">
            <h3>Bunlara'da göz atın.</h3>
            
            <?php
            $sorguBloglar = "SELECT blog_id,name,surname,baslik,kategori_adi,yazi,icerik,tarih FROM users AS u INNER JOIN blog AS b ON u.user_id=b.user_id
            INNER JOIN kategoriler AS k ON b.kategori_id=k.kategori_id ORDER BY tarih DESC";
            $fetchQueryBlog = $conn->query($sorguBloglar);
            if ($fetchQueryBlog->num_rows > 0) {
                while ($rows = mysqli_fetch_assoc($fetchQueryBlog)) {
                    echo "<article class='container-fluid yanciArticle'><h5>" . $rows["baslik"] . "</h5><p>" . $rows["icerik"] . "</p><a href='../html/yaziDevam.php?id=" . $rows["blog_id"] . "'><input type='submit' class='btn btn-basic yaziDevam' name='#' value='Yazının devamı.'></a>
                    </article>";
                }
            }
            ?>
            
        </aside>

    </div>

    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>


    <script src="../js/pprofile.js" type="text/javascript"></script>



</body>

</html>