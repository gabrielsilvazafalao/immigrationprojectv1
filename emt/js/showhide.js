function alunosh() {
    var x = document.getElementById("alunotoggle");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("proftoggle").style.display = "none";
        document.getElementById("alltoggle").style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function profsh() {
    var x = document.getElementById("proftoggle");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("alunotoggle").style.display = "none";
        document.getElementById("alltoggle").style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function allsh() {
    var x = document.getElementById("alltoggle");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("alunotoggle").style.display = "none";
        document.getElementById("proftoggle").style.display = "none";
    } else {
        x.style.display = "none";
    }
}

/* ----------------------------------------------- REGISTRO */


function formalunosh() {
    var x = document.getElementById("toggleformaluno");
    if (x.style.display === "none") {
        x.style.display = "block"; 
        document.getElementById("TituloChange1").style.display = "none";
        document.getElementById("TituloChange2").style.display = "inline-block";
        document.getElementById("TituloChange3").style.display = "inline-block";
        document.getElementById("toggleformall").style.display = "none";
        document.getElementById("toggleformprof").style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function formprofsh() {
    var x = document.getElementById("toggleformprof");
    if (x.style.display === "none") {
        x.style.display = "block"; 
        document.getElementById("TituloChange1").style.display = "inline-block";
        document.getElementById("TituloChange2").style.display = "none";
        document.getElementById("TituloChange3").style.display = "inline-block";
        document.getElementById("toggleformaluno").style.display = "none";
        document.getElementById("toggleformall").style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function formallsh() {
    var x = document.getElementById("toggleformall");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("TituloChange1").style.display = "inline-block";
        document.getElementById("TituloChange2").style.display = "inline-block";
        document.getElementById("TituloChange3").style.display = "none";
        document.getElementById("toggleformaluno").style.display = "none";
        document.getElementById("toggleformprof").style.display = "none";
    } else {
        x.style.display = "none";
    }
}