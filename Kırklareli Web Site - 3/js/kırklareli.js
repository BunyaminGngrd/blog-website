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
function responsiveMenuOpen(){
    var menuArticle = document.getElementById("menuArticle");
    var MenuOpen = document.getElementById("responsive-menu-btnOpen");
    var MenuClose = document.getElementById("responsive-menu-btnClose");
    var fakeImage=document.getElementById("fakeImage");
    menuArticle.style.display="inline"
    MenuOpen.style.display="none";
    MenuClose.style.display="inline";
    fakeImage.style.display="none";
}

function responsiveMenuClose(){
    var menuArticle = document.getElementById("menuArticle");
    var MenuOpen = document.getElementById("responsive-menu-btnOpen");
    var MenuClose = document.getElementById("responsive-menu-btnClose");
    var fakeImage=document.getElementById("fakeImage");
    menuArticle.style.display="none";
    MenuClose.style.display="none";
    MenuOpen.style.display="inline";
    fakeImage.style.display="inline-block";

}
