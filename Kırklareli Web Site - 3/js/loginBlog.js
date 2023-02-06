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
function filtre(){
    var kategoriler = document.getElementById("kategoriler");
    var filtreButton =document.getElementById("filtreButton");
    var filtreButtonClose =document.getElementById("filtreButtonClose");
    kategoriler.style.display="inline-block";
    filtreButton.style.display="none";
    filtreButtonClose.style.display="inline";
}
function filtreClose(){
    var kategoriler = document.getElementById("kategoriler");
    var filtreButton =document.getElementById("filtreButton");
    var filtreButtonClose =document.getElementById("filtreButtonClose");

    kategoriler.style.display="none";
    filtreButton.style.display="inline";
    filtreButtonClose.style.display="none";
}

