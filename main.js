function katt() {

}

function megvaltozott(e) {
    let hossz = document.getElementById("nevMezo").value.length;
    if (hossz > 20) {
        document.getElementById("nevHossz").style.color = "red";
    } else {
        document.getElementById("nevHossz").style.color = "black";
    }
    document.getElementById("nevHossz").innerHTML = hossz + "/20";
}

function init() {
    document.getElementById("gomb").addEventListener("click", katt);
    document.getElementById("nevMezo").addEventListener("input", megvaltozott);
}

document.addEventListener("DOMContentLoaded", init);