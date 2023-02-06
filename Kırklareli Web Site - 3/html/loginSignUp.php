<?php


include "../php/connection.php"

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
    <link rel="stylesheet" href="../css/lloginSignUp.css" type="text/css">
    <title>Login | Sign Up</title>
</head>

<body>

    <nav class="container-fluid bg-basic">
        <header id="logo">LOGO<i class="fab fa-innosoft"></i> Blog </header>

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

    <div id="anaSekme">
        <section>
            <article class="container-fluid kutu" id="secim">

                <h1>Login | Sign Up <i class="fas fa-sign-in-alt"></i></h1>
                <p>Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Excepturi eaque sed
                    quas veritatis vitae, in non dolore
                    voluptatibus saepe suscipit nemo reiciendis
                    commodi unde repudiandae nobis eum magnam,
                    sapiente maxime at earum nisi quae odit cum.
                    Praesentium temporibus omnis ab numquam dicta
                    voluptas repudiandae, dolor veritatis, repellat
                    optio aliquam necessitatibus. Expedita saepe repudiandae
                    magnam facilis impedit blanditiis corporis explicabo beatae
                    velit reprehenderit, soluta perspiciatis ab recusandae mollitia
                    alias, natus quaerat veniam, deserunt eius adipisci maiores aperiam
                    eveniet. Perferendis, aliquid cumque.</p>

                <button type="button" class="btn btn-basic" id="sign-up-btn" onclick="signup();">Sign Up</button>
                <button type="button" class="btn btn-basic" id="login-btn" onclick="login();">Login</button>

            </article>



            <article class="container-fluid kutu" id="Login">
                <form action="../php/login.php" method="post">
                    <fieldset>
                        <legend>Login</legend>
                        <label>Kullanıcı Adı : </label> <br>
                        <input type="text" placeholder="Kullanıcı Adınız" name="username"><br>
                        <label>Parola : </label><br>
                        <input type="password" placeholder="Parolanız" name="userpassword"> <br>
                        <button type="reset" class="btn btn-basic">Reset</button>
                        <button type="submit" class="btn btn-basic" name="login" value="login">Submit</button>
                    </fieldset>
                </form>
            </article>

            <article class="container-fluid kutu" id="Sign-Up">
                <form action="../php/signup.php" method="post">
                    <fieldset>
                        <legend>Sign Up</legend>
                        <label>Ad : </label> <br>
                        <input type="text" name="name" placeholder="Ad"><br>
                        <label>Soyad : </label> <br>
                        <input type="text" name="surname" placeholder="Soyad"><br>
                        <label>Kullanıcı Adı : </label> <br>
                        <input type="text" name="username" placeholder="Kullanıcı Adı"><br>
                        <label>E-mail : </label> <br>
                        <input type="text" name="email" placeholder="E-mail"><br>
                        <label>Phone Number : </label> <br>
                        <input type="text" name="phonenumber" placeholder="XXX-XXX-XXXX"><br>
                        <label>Parola : </label> <br>
                        <input type="password" name="password" placeholder="Parola"><br>
                        <label>Parola Tekrar : </label> <br>
                        <input type="password" name="passwordCheck" placeholder="Parola Tekrar"><br>
                        <input type="checkbox"> <a href="#">Müşteri Sözleşmesini</a> Okudum Kabul Ediyorum.<br><br>
                        <button type="reset" class="btn btn-basic">Reset</button>
                        <button type="submit" class="btn btn-basic" name="signup" value="Submit"> Submit</button>
                    </fieldset>
                </form>
            </article>
        </section>
    </div>

    <footer>
        <p>Tüm Hakları Saklıdır &copy; LOGO <i class="fab fa-innosoft"></i></p>
    </footer>








    <script src="../js/loginSignUp.js" type="text/javascript"></script>
</body>

</html>