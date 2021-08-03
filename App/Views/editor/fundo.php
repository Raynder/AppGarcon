<div class="conteudo">

    <div class="bloco col-md-6">
        <p>Tipo do fundo: &nbsp;
            <select name="tipo" id="tipo" onchange="div_alter(this.value)">
                <option value=""></option>
                <option value="imagem">Imagem</option>
                <option value="solido">Cor solida</option>
                <option value="degrade">Degrade</option>
                <option value="espiral">Espiral</option>
            </select>
        </p>
        <hr>

        <div class="hidden" style="display: none;" id="imagem">
            <?php echo form_open_multipart("ajax/upload/id/formImage"); ?>
                <input type="file" name="userfile" class="form-control">
            </form>

            <div class="texto">
                <p>Imagem Enviada</p>
                <img src="" id="imagemEnviada" alt="">        
            </div>
            <div class="enviar">
                <button type="submit">Enviar </button>
            </div>
            <div class="imagemCortada">Imagem Cortada
                <button>Salvar</button>
            </div>
        </div>
        <div class="hidden" style="display: none;" id="solido">
            <p>solido</p>
        </div>
        <div class="hidden" style="display: none;" id="degrade">
            <p>degrade</p>
        </div>
        <div class="hidden" style="display: none;" id="espiral">
            <p>espiral</p>
        </div>

    </div>
    <label for="favcolor">Cor:</label>
    <input type="color" id="favcolor" name="favcolor" value="#ff0000">
</div>

<style>
    .bloco{
        height: 80vh;
        border: solid 5px #ddd;
        border-radius: 10px;
        padding: 20px;
        margin: 0 15px;
    }
</style>

<script>

    function div_alter(valor){
        hiddens = document.querySelectorAll('.hidden')
        for(i = 0; i < hiddens.length; i++){
            hiddens[i].style.display = 'none'
        }
        document.getElementById(valor).style.display = 'block'
    }

    $("formImage").ajaxForm({
        dataType: 'json',
        success: function(responseText, statusText){
            $("imagemEnviada").attr("src", responseText.path);
        }
    })
</script>


<?php

?>