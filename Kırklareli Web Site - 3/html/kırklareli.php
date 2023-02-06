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
    <link rel="stylesheet" href="../css/kkirklareli.css" type="text/css">
    <title>Kırklareli</title>
</head>

<body>
    <nav class="container-fluid bg-basic">
        <header id="logo">LOGO<i class="fab fa-innosoft"></i></header>

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

    <div id="anaSekmeKirklareli">

        <section>
            <article class="articleBoxKirklareli">
                <h2>
                    Kırklareli
                    <button type="button" id="responsive-menu-btnOpen" class="btn btn-basic"
                        onclick="responsiveMenuOpen();">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <button type="button" id="responsive-menu-btnClose" class="btn btn-basic"
                        onclick="responsiveMenuClose();">
                        <i class="fas fa-times"></i>
                    </button>
                </h2>

                <article id="menuArticle">
                    <h3>This is Kırklareli</h3>
                    <article class="icYanciArticle">
                        <button type="button" class="btn btn-basic container-fluid">
                            <h6>Kırklareli Dogal Yerler</h6>
                            <p>Kırklarelinin doga harikaları ile tanışın.</p>
                        </button>
                    </article>
                    <article class="icYanciArticle">
                        <button type="button" class="btn btn-basic container-fluid">
                            <h6>Kırklareli Tarihi ve Tarihi Yerleri</h6>
                            <p>Kırklarelinin tarihi ile tanışın.</p>
                        </button>
                    </article>
                    <article class="icYanciArticle">
                        <button type="button" class="btn btn-basic container-fluid">
                            <h6>Kırklareli Şehir'i Genel Bilgileri</h6>
                            <p>Kırklareli genel bilgileri.</p>
                        </button>
                    </article>
                    <article class="icYanciArticle">
                        <button type="button" class="btn btn-basic container-fluid">
                            <h6>Kırklareli Konum Bilgileri</h6>
                            <p>Kırklarelinin konumu.</p>
                        </button>
                    </article>
                    <article class="icYanciArticle">
                        <button type="button" class="btn btn-basic container-fluid">
                            <h6>Kırklareli İş İlanları</h6>
                            <p>Kırklareli iş ilanları.</p>
                        </button>
                    </article>
                </article>

                <div  id="fakeImage">
                    <p>Fake Image</p>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Incidunt molestiae deleniti facere sequi, nobis animi eos?
                    Laudantium neque distinctio provident exercitationem quisquam
                    consequuntur optio aspernatur harum vitae iste itaque repudiandae
                    sit inventore omnis hic, nisi numquam dolore cupiditate accusamus?
                    Illo totam in, reiciendis ut soluta amet! Magni illum assumenda aspernatur
                    provident odio, error minima. Exercitationem dolor ex natus, reiciendis
                    doloremque id eos rem itaque architecto eius, aperiam tempore deserunt
                    nostrum magnam facere incidunt. Saepe ut laudantium, laborum ipsam fuga,
                    explicabo quaerat ea voluptatem veritatis voluptates reiciendis minus.
                    Debitis, repudiandae molestiae nesciunt
                    reprehenderit porro nobis sequi ipsa aut officia nam eaque!</p>

            </article>
        </section>

        

        <aside>
            <h3>This is Kırklareli</h3>
            <article class="kirklareliArticle">
                <button type="button" class="btn btn-basic container-fluid">
                    <h6>Kırklareli Dogal Yerler</h6>
                    <p>Kırklarelinin doga harikaları ile tanışın.</p>
                </button>
            </article>
            <article class="kirklareliArticle">
                <button type="button" class="btn btn-basic container-fluid">
                    <h6>Kırklareli Tarihi ve Tarihi Yerleri</h6>
                    <p>Kırklarelinin tarihi ile tanışın.</p>
                </button>
            </article>
            <article class="kirklareliArticle">
                <button type="button" class="btn btn-basic container-fluid">
                    <h6>Kırklareli Şehir'i Genel Bilgileri</h6>
                    <p>Kırklareli genel bilgileri.</p>
                </button>
            </article>
            <article class="kirklareliArticle">
                <button type="button" class="btn btn-basic container-fluid">
                    <h6>Kırklareli Konum Bilgileri</h6>
                    <p>Kırklarelinin konumu.</p>
                </button>
            </article>
            <article class="kirklareliArticle">
                <button type="button" class="btn btn-basic container-fluid">
                    <h6>Kırklareli İş İlanları</h6>
                    <p>Kırklareli iş ilanları.</p>
                </button>
            </article>

        </aside>

    </div>
    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>




    <script src="../js/kırklareli.js" type="text/javascript"></script>
</body>

</html>