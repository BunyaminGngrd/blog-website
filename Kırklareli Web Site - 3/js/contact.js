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