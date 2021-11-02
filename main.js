function katt() {

}

function megvaltozott(e) {
    let hossz = document.getElementById("nevMezo").value.length;
    document.getElementById("nevHossz").innerHTML = hossz + "/20";
}

function init() {
    document.getElementById("gomb").addEventListener("click", katt);
    document.getElementById("nevMezo").addEventListener("input", megvaltozott);
}

document.addEventListener("DOMContentLoaded", init);