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
    mnu = document.querySelector('.rodape');
    mnu.style.width = '50px';
    mnu.style.height = '50px';
    fas = document.querySelectorAll('.menu');
    fas[0].getElementsByTagName('i')[0].style.fontSize = '0pt';
    fas[1].getElementsByTagName('i')[0].style.fontSize = '0pt';
    fas[2].getElementsByTagName('i')[0].style.fontSize = '0pt';
    fas[3].getElementsByTagName('i')[0].style.fontSize = '0pt';
    fas[4].getElementsByTagName('i')[0].style.fontSize = '0pt';
}
// fim do script do menu