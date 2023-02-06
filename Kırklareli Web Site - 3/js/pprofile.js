function menuClick() {
    var acilirMenu = document.getElementById("acilirMenu");
    var close = document.getElementById("menu-close-btn");
    var menubtn = document.getElementById("menu-btn");
    acilirMenu.style.display = "inline-block";
    close.style.display = "inline-block";
    menubtn.style.display = "none";

}

function menuClose() {
    var acilirMenu = document.getElementById("acilirMenu");
    var close = document.getElementById("menu-close-btn");
    var menubtn = document.getElementById("menu-btn");
    acilirMenu.style.display = "none";
    close.style.display = "none";
    menubtn.style.display = "inline";

}

function yorumlar(){
    var yorumlarArticle = document.getElementById("yorumlarArticle");
    var blogArticle = document.getElementById("blogArticle");
    yorumlarArticle.style.display = "inline";
    blogArticle.style.display = "none";
}

function bloglar(){
    var yorumlarArticle = document.getElementById("yorumlarArticle");
    var blogArticle = document.getElementById("blogArticle");
    yorumlarArticle.style.display = "none";
    blogArticle.style.display = "inline";
}
