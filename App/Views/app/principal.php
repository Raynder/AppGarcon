<?php

?>

<div class="container-fluid">
        <!-- Top da pagina -->
        <div class="row busca">
            <div class="col-12">
                <div id="input-container">
                    <img src="<?=URL?>img/pesquisa.png" alt="#">
                    <input type="text" name="busca" class="busca" placeholder="Procurar estabelecimento">
                </div>
            </div>
        </div>
        <!-- Fim do top da pagina -->

        <!-- Inicio dos recentes -->
        <div class="row">
            <div class="recentes">
                <p style="text-align: center;">Recentes</p>
                <div class="recente">
                    <img class="imagem-recente" src="<?=URL?>img/pizzaria.png">
                </div>
                <div class="recente">
                    <img class="imagem-recente" src="<?=URL?>img/pizzaria.png">
                </div>
                <div class="recente">
                    <img class="imagem-recente" src="<?=URL?>img/pizzaria.png">
                </div>
                <div class="recente">
                    <img class="imagem-recente" src="<?=URL?>img/pizzaria.png">
                </div>
            </div>
        </div>
        <!-- Fim dos recentes -->

        <!-- Topicos de seleção -->
        <div class="row">
            <div class="topicos">

                <ul id="autoWidth" class="cs-hidden">
                    <li class="item-a">
                        <div class="topico">
                            <div class="imagem-topico">
                                <img src="<?=URL?>img/HAMBURGUER.png" alt="">
                            </div>
                            <div class="nome-topico">
                                <p>Hamburger</p>
                            </div>
                        </div>
                    </li>



                    <li class="item-b">
                        <div class="topico">
                            <div class="imagem-topico">
                                <img src="<?=URL?>img/PIZZA.png" alt="">
                            </div>
                            <div class="nome-topico">
                                <p>Pizzaria</p>
                            </div>
                        </div>
                    </li>



                    <li class="item-c">
                        <div class="topico">
                            <div class="imagem-topico">
                                <img src="<?=URL?>img/SORVETE.png" alt="">
                            </div>
                            <div class="nome-topico">
                                <p>Sorvete</p>
                            </div>
                        </div>
                    </li>



                    <li class="item-d">
                        <div class="topico">
                            <div class="imagem-topico">
                                <img src="<?=URL?>img/SORVETE.png" alt="">
                            </div>
                            <div class="nome-topico">
                                <p>Açai</p>
                            </div>
                        </div>
                    </li>



                    <li class="item-e">
                        <div class="topico">
                            <div class="imagem-topico">
                                <img src="<?=URL?>img/PRATO.png" alt="">
                            </div>
                            <div class="nome-topico">
                                <p>Restaurantes</p>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
        <!-- Fim dos topicos de seleção -->

        <!-- Destaques -->
        <div class="row">

            <div class="owl-carousel owl-theme">

                <div class="destaques item">
                    <a href="">
                        <div class="destaque">
                            <img src="<?=URL?>img/entrega.png" alt="#">
                        </div>
                    </a>
                </div>

                <div class="destaques item">
                    <a href="">
                        <div class="destaque">
                            <img src="<?=URL?>img/entrega.png" alt="#">
                        </div>
                    </a>
                </div>

                <div class="destaques item">
                    <a href="">
                        <div class="destaque">
                            <img src="<?=URL?>img/entrega.png" alt="#">
                        </div>
                    </a>
                </div>

                <div class="destaques item">
                    <a href="">
                        <div class="destaque">
                            <img src="<?=URL?>img/entrega.png" alt="#">
                        </div>
                    </a>
                </div>

                <div class="destaques item">
                    <a href="">
                        <div class="destaque">
                            <img src="<?=URL?>img/entrega.png" alt="#">
                        </div>
                    </a>
                </div>

                <div class="destaques item">
                    <a href="">
                        <div class="destaque">
                            <img src="<?=URL?>img/entrega.png" alt="#">
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <!-- Fim dos destaques -->

        <!-- Estabelecimentos -->
        <div class="row">
            <p style="text-align: center;">Estabelecimentos</p>

            <?php
            if(is_array($dados['empresas']) || is_object($dados['empresas'])){
                foreach($dados['empresas'] as $empresa) {
                    ?>
                    <div class="estabelecimento col-4 col-sm-4 col-md-4">
                        <a href=" ">
                            <div class="image-estabelecimento">
                                <img class="logo" src="<?=URL?>img/logos/logo_<?=$empresa['nome']?>.png " alt="# ">
                                <img class="fundo" src="<?=URL?>img/fundo-estabelecimento.jpg " alt="# ">
                            </div>
                            <div class="info-estabelecimento">
                                <p class="nta-estabelecimento">4,3</p>
                                <?php
                                    $agora = date('H:i');
                                    if($agora > $empresa['hr_inicio'] && $agora < $empresa['hr_fim']){
                                        echo('<p class="estado stts-estabelecimento">aberto</p><p class="esthorario stts-estabelecimento"  style="display:none">aberto</p><p class="horario stts-estabelecimento" style="display:none">'.$empresa["hr_inicio"].' - '.$empresa["hr_fim"].'</p>');
                                    }
                                    else{
                                        echo('<p class="estado stts-estabelecimento">fechado</p><p class="esthorario stts-estabelecimento"  style="display:none">fechado</p><p class="horario stts-estabelecimento" style="display:none">'.$empresa["hr_inicio"].' - '.$empresa["hr_fim"].'</p>');
                                    }
                                 ?>
                                <p class="nm-estabelecimento"><?=$empresa['nome']?></p>
                            </div>
                            <div class="acoes">
                                <a class="fav">
                                    <i class="fa fa-heart favoritar" aria-hidden="true "></i>
                                </a>
                            </div>
                        </a>
                    </div>
    
                    <?php
                }
            }
            ?>
        </div>
        <!-- Fim dos estabelecimentos -->

        <div class="espaco-rodape">
        </div>

        <div class="row rodape ">
            <div class="menus col-10" onclick="mnu()">
                <div class="menu ">
                    <i class="fa fa-home " aria-hidden="true "></i>
                </div>
                <div class="menu ">
                    <i class="fa fa-heart " aria-hidden="true "></i>
                </div>
                <div class="menu ">
                    <i class="fa fa-cart-arrow-down " aria-hidden="true "></i>
                </div>
                <div class="menu ">
                    <i class="fa fa-user-o " aria-hidden="true "></i>
                </div>
                <div class="menu ">
                    <i class="fa fa-bars " aria-hidden="true "></i>
                </div>
                <div class="menu seta">
                    <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </div>
                
            </div>
        </div>
        <script>
            setInterval(function(){
                changeStatus()
            },5000);
        </script>

        <style>
            .estado{
                transition: .5s;
            }
        </style>
        
    </div>