///Variables

var formulario_login= document.querySelector(".formulario_login");
var formulario_register= document.querySelector(".formulario_register");
var contenedor_login_register= document.querySelector(".contenedor_login_register");
var cajalogin= document.querySelector(".cajalogin");
var cajaregistro= document.querySelector(".cajaregistro");

document.getElementById("btn_register").addEventListener("click", register);
document.getElementById("btn_login").addEventListener("click", login);
window.addEventListener("resize", widthp);


function widthp(){
    if(window.innerWidth > 850)
    {
        cajalogin.style.display= "block";
        cajaregistro.style.display= "block";
    }
    else{
        cajaregistro.style.display= "block";
        cajaregistro.style.opacity= "1";
        cajalogin.style.display= "none";
        formulario_login.style.display= "block";
        formulario_register.style.display= "none";
        contenedor_login_register.style.left= "0px"
    }
}



function register(){

    if (window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left= "410px";
        formulario_login.style.display= "none";
        cajaregistro.style.opacity= "0";
        cajalogin.style.opacity= "1";
    }
    else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left= "0px";
        formulario_login.style.display= "none";
        cajaregistro.style.display= "none"
        cajalogin.style.display= "block";
        cajalogin.style.opacity= "1";
    }
}

function login(){
    
    if (window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left= "10px";
        formulario_login.style.display= "block";
        cajaregistro.style.opacity= "1";
        cajalogin.style.opacity= "0";
    }
    else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left= "0px";
        formulario_login.style.display= "block";
        cajaregistro.style.display= "block";
        cajalogin.style.display= "none";
        cajaregistro.style.opacity= "1";
    }
}

widthp();