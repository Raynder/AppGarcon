// Inicia carrousel dos tipos
$(document).ready(function() {
    $("#autoWidth").lightSlider({
        autoWidth: true,
        loop: true,
        onSliderLoad: function() {
            $('autoWidth').removeClass('cS-hidden');
        }
    });
});
// Fim do script


// Iniciar carrosel de destaques
$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000
    });
});
// FIm do script

// script de abrir e fechar menu
function mnu() {
    menu = document.querySelector('.rodape');
    if (menu.style.width == '50px') {
        menu.style.width = '150px';
        menu.style.height = '150px';
        menu.style.webkitTransform = "translate(-30%, 30%)";
        fas = document.querySelectorAll('.menu');
        fas[0].getElementsByTagName('i')[0].style.fontSize = '21pt';
        fas[1].getElementsByTagName('i')[0].style.fontSize = '17pt';
        fas[2].getElementsByTagName('i')[0].style.fontSize = '21pt';
        fas[3].getElementsByTagName('i')[0].style.fontSize = '20pt';
        fas[4].getElementsByTagName('i')[0].style.fontSize = '21pt';
        fas[5].getElementsByTagName('i')[0].style.fontSize = '22pt';
        fas[5].getElementsByTagName('i')[0].style.webkitTransform = "scaleY(-1) rotate(-45deg)";
    } else {
        menu.style.width = '50px';
        menu.style.height = '50px';
        menu.style.webkitTransform = "translate(-20%, 20%)";
        fas = document.querySelectorAll('.menu');
        fas[0].getElementsByTagName('i')[0].style.fontSize = '0pt';
        fas[1].getElementsByTagName('i')[0].style.fontSize = '0pt';
        fas[2].getElementsByTagName('i')[0].style.fontSize = '0pt';
        fas[3].getElementsByTagName('i')[0].style.fontSize = '0pt';
        fas[4].getElementsByTagName('i')[0].style.fontSize = '0pt';
        fas[5].getElementsByTagName('i')[0].style.fontSize = '16pt';
        fas[5].getElementsByTagName('i')[0].style.webkitTransform = "scaleY(1) rotate(45deg)";

    }
}
// fim do script do menu