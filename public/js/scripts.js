function vizualizarRegistro(id, dados) {
    html = ""
    cont = 0
    registro = "'registro" + id + "'"

    dados = dados.split(":")
    html += "<div class='modal fade' id='registro" + id + "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'           aria-hidden='true'> <div class='modal-dialog' role='document'> <div class='modal-content'> <div class='modal-header'> <h5 class='modal-title' id='exampleModalLabel'>Registro " + id + "</h5>  <button onclick='fechar(registro" + id + ")' class='close' data-dismiss='modal' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> <div class='modal-body'>"

    //COLOQUE AQUI O CONTEUDO DO MODAL
    html += " <div class='card'> <div class='card-body'> <h5 class='card-title mb-0'><?=strtoUpper($titulo)?></h5> </div> <table class='table'> <thead>"

    for (cont = 0; cont < dados.length; cont++) {
        if (dados[cont].split(",")[0] != null && dados[cont].split(",")[1] != null) {
            html += "<tr> <th scope='col'>" + dados[cont].split(",")[0] + "</th> <th scope='col'>" + dados[cont].split(",")[1] + "</th> </tr>"
        }
    }

    html += "</thead> </table></div>";
    //FIM DO CONTEUDO

    html += '</div> <div class="modal-footer"> <button type="button" onclick="document.getElementById(' + registro + ').click()" class="btn btn-secondary" ">Finalizar</button> </div> </div> </div> </div>'

    $("#modalView").html(html)

    $("#registro" + id).modal("show")
}