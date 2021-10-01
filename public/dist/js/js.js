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

// Script de crop
$(document).ready(function() {

    var $modal = $('#modal');

    var image = document.getElementById('sample_image');

    var cropper;

    $('#upload_image').change(function(event) {
        var files = event.target.files;

        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };

        if (files && files.length > 0) {
            reader = new FileReader();
            reader.onload = function(event) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 1,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $('#crop').click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $.ajax({
                    url: 'public/uploadImage.php',
                    method: 'POST',
                    data: { image: base64data },
                    success: function(data) {
                        $modal.modal('hide');
                        $('#uploaded_image').attr('src', data);
                    }
                });
            };
        });
    });

});
//Fim do script de crop

function cadastrar_empresa() {
    categoria = ''

    nome = document.getElementById('nome').value
    hr_inicio = document.getElementById('hr_inicio').value
    hr_fim = document.getElementById('hr_fim').value
    image = document.getElementById('uploaded_image').src

    checks = document.querySelectorAll('input[type="checkbox"]')
    for (i = 0; i < length(checks); i++) {
        if (checks[i].checked) categoria += checks[i].name + ','
    }

    $.ajax({
            url: "painel/cadastrar",
            type: 'post',
            data: { nome: nome, hr_inicio: hr_inicio, hr_fim: hr_fim, image: image, categoria: categoria },
            // beforeSend: function() {
            //     alert('enviando....')
            // }
        })
        .done(function(msg) {
            alert(msg.split('resp:')[1].split('"')[0])
        })
        .fail(function(jqXHR, textStatus, msg) {
            alert(msg.split('resp:')[1].split('"')[0]);
        });

}

function consultar(cnpj) {
    $.ajax({
            url: "http://casadapizzacardoso.epizy.com/painel/api.php",
            type: 'post',
            data: { cnpj: cnpj },
            // beforeSend : function(){
            //     $("#resultado").html("ENVIANDO...");
            // }
        })
        .done(function(msg) {
            $("#resultado").html(msg);
        })
        .fail(function(jqXHR, textStatus, msg) {
            alert(msg);
        });
}