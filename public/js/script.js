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

function inputSquare() {
    var rng = document.getElementById('range-square');
    var p = document.getElementById('range-min-square');
    p.innerHTML = rng.value;
}

function inputPrice() {
    var rng = document.getElementById('range-price');
    var p = document.getElementById('range-min-price');
    p.innerHTML = rng.value;
}

function searchFunc() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("search-list");
    li = document.getElementsByClassName("search-li");

    for (let item of li) {
        a = item.getElementsByClassName("li-a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    }
}

let slideIndex = 1;

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("Slides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (let slide of slides) {
        slide.style.display = "none";
    }
    for (let dot of dots) {
        dot.className = dot.className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}


burger.addEventListener('click', openNav);

