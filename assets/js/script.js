// Bouton retour en haut

mybutton = document.getElementById("myBtn");
window.addEventListener("scroll", function () {
    if (document.documentElement.scrollTop > 200) {
        mybutton.style.bottom = "40px";
    } else {
        mybutton.style.bottom = "-100px";
    }
});

function topFunction() {
    $("html").animate({ scrollTop: "0" }, "600");
}


// Menu mobile

let burger = document.getElementById('burger-mobile');
burger.addEventListener('click', () => {

    let menu_mobile = document.getElementById('content-menu');
    menu_mobile.classList.toggle('transi-mobile-menu');

    let burger_open = document.getElementById('burger-open');
    let burger_close = document.getElementById('burger-close');
    burger_open.classList.toggle('display-none');
    burger_close.classList.toggle('display-block');

});
