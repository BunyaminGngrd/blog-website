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
function login(){
    var signup = document.getElementById("Sign-Up");
    var login = document.getElementById("Login");
    
    if(signup.style.display=="none"){
        login.style.display="inline";
    }
    else{
        signup.style.display="none";
        login.style.display="inline";
    }
    
}
function signup(){
    var signup = document.getElementById("Sign-Up");
    var login = document.getElementById("Login");
    if(login.style.display=="none"){
        signup.style.display="inline";
    }
    else{
        login.style.display="none";
        signup.style.display="inline";
    }
}