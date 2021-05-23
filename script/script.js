let modalR = document.getElementById("id01");
let modalL = document.getElementById("id02");
let burger = document.getElementById("burger");
let nav = document.getElementById("nav");

window.onclick = function(event) {
    if(event.target == modalR || event.target == modalL) {
        modalR.style.display = "none";
        modalL.style.display = "none";
    }
}

function modalWindow(modal) {
    document.getElementById(modal).style.display = "block";
}

function openNav() {
    nav.className += " responsive";
}
  
function closeNav() {
    nav.className = nav.className.replace(" responsive", "");
}

burger.addEventListener('click', openNav);
