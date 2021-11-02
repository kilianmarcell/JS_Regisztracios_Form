function katt(e) {

    let nevSzinEllenor = document.getElementById("nevHossz").style.color;
    let nevTartalomEllenor = document.getElementById("nevHossz").innerHTML;

    let jelszoEllenor = document.getElementById("jelszoHossz").style.color;
    let jelszoMegintEllenor = document.getElementById("jelszoEllenorzes").innerHTML;
    
    if (nevSzinEllenor != "black" || nevTartalomEllenor == "" || nevTartalomEllenor == "0/20" || jelszoEllenor != "black" || jelszoMegintEllenor != "") {
        e.preventDefault();
    }

}

function nevMegvaltozott(e) {

    let hossz = document.getElementById("nevMezo").value.length;

    if (hossz > 20) {
        document.getElementById("nevHossz").style.color = "red";
    } else {
        document.getElementById("nevHossz").style.color = "black";
    }

    document.getElementById("nevHossz").innerHTML = hossz + "/20";
    
}

function jelszoMegvaltozott(e) {

    let hossz = document.getElementById("jelszoMezo").value.length;

    if (hossz < 8) {
        document.getElementById("jelszoHossz").style.color = "red";
    } else {
        document.getElementById("jelszoHossz").style.color = "black";
    }

    document.getElementById("jelszoHossz").innerHTML = hossz + "/8";

    //jelszoEllenorzes();

}

function jelszoEllenorzes(e) {

    let jelszo = document.getElementById("jelszoMezo").value;
    let jelszoIsmet = document.getElementById("jelszoMegintMezo").value;

    if (jelszo != jelszoIsmet) {
        document.getElementById("jelszoEllenorzes").innerHTML = "A jelszavak nem egyeznek meg!";
    } else {
        document.getElementById("jelszoEllenorzes").innerHTML = "";
    }

}

function init() {

    document.getElementById("gomb").addEventListener("click", katt);

    document.getElementById("nevMezo").addEventListener("input", nevMegvaltozott);
    document.getElementById("jelszoMezo").addEventListener("input", jelszoMegvaltozott);

    document.getElementById("jelszoMegintMezo").addEventListener("change", jelszoEllenorzes);
    
}

document.addEventListener("DOMContentLoaded", init);