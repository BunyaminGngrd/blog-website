
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ff16f2cb3f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/contact.css" type="text/css">
    <title>LOGO Contact Us</title>
</head>

<body>
    <nav class="container-fluid bg-basic">
        <header id="logo">LOGO<i class="fab fa-innosoft"></i> </header>

        <ul id="menu">
            <li><a href="../html/kırklareli.php">Kırklareli</a></li>
            <li><a href="../html/universite.php">Kırklareli University</a></li>
            <li><a href="../html/blog.php">Blog</a></li>
            <li><a href="../html/contact.php"><i class="fas fa-headset"></i> Contact Us</a></li>
            <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
        </ul>

        <button type="button" class="btn" id="menu-btn" onclick="menuClick();"><i class="fas fa-bars"></i></button>
        <button type="button" class="btn" id="menu-close-btn" onclick="menuClose();"><i
                class="fas fa-times"></i></button>
    </nav>

    <ul id="acilirMenu" class="container-fluid">
        <li class="secenek"><a href="../html/kırklareli.php">Kırklareli</a></li>
        <li class="secenek"><a href="../html/universite.php">Kırklareli University</a></li>
        <li class="secenek"><a href="../html/blog.php">Blog</a></li>
        <li class="secenek"><a href="../html/contact.php"><i class="fas fa-headset"></i> Contact Us</a></li>
        <li class="secenek"><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
    </ul>

    <div class="container-fluid" id="anaSekme">
        <h1><i class="fas fa-headset"></i> Contact Us</h1>

        <div id="yazi">
            <p><span class="kalin">Adres : </span> Kırklareli / Merkez</p>
            <p><span class="kalin">İletişim :</span> 0(212)1243434</p>

            <p>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Porro earum molestiae 
                rem obcaecati quia culpa labore sed provident 
                eveniet, aliquam deleniti cumque delectus asperiores 
                laborum ipsa? Veritatis et odio nihil amet facere provident 
                molestias at suscipit voluptatum sunt aspernatur ipsam nisi 
                natus maiores, distinctio aperiam dignissimos, placeat 
                laboriosam excepturi. Neque.</p>
        </div>
      



        <iframe id="konum"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47636.315587867815!2d27.182860363112784!3d41.73627473361763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a7536dd7f878bd%3A0x2c4e9cd3b6d583a6!2zS8SxcmtsYXJlbGksIEvEsXJrbGFyZWxpIE1lcmtlei9LxLFya2xhcmVsaQ!5e0!3m2!1str!2str!4v1640428095514!5m2!1str!2str"
            width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>

    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>

    <script src="../js/contact.js" type="text/javascript"></script>
</body>

</html>

