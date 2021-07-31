<?php
    class Pagina {
        private $cores = ['success', 'warning', 'danger', 'info', 'cyan'];
        private $tamanhos = ['col-md-6 col-lg-2 col-xlg-3', 'col-md-6 col-lg-4 col-xlg-3'];

        public function iniciarPainel(){
            ?>
                <div class="preloader">
                    <div class="lds-ripple">
                        <div class="lds-pos"></div>
                        <div class="lds-pos"></div>
                    </div>
                </div>

                <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
                    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <?php
        }

        public function finalizarPainel(){
            ?></div><?php
        }

        public function tituloPag($titulo, $ancoraId = null, $ancoraNome = null){
            ?>
            <div class='page-breadcrumb'>
                <div class='row'>
                    <div class='col-12 d-flex no-block align-items-center'>
                        <h4 class='page-title'><?=$titulo?></h4>
                        <div class='ms-auto text-end'>
                            <nav aria-label='breadcrumb'>
                                <ol class='breadcrumb'>
                                    <li class='breadcrumb-item'><a href='#<?=$ancoraId?>'><?=$ancoraNome?></a></li>
                                    <!-- <li class='breadcrumb-item active' aria-current='page'>Library</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        public function iniciar($id = '', $classes = ''){
            ?>
            <div class='container-fluid <?=$classes?>' id='<?=$id?>'>
            <?php
        }

        public function finalizar(){
            ?>
            </div>
            <?php
        }

        public function iniciar_linha($id = '', $classes = ''){
            ?>
            <div class='row' id='<?=$id?>' class='<?=$classes?>'>
            <?php
        }

        public function finalizar_linha(){
            ?>
            </div>
            <?php
        }

        public function botao($frase = '', $cor = null, $tamanho = null, $classeIcon = '', $classes = '', $letraBranca = false){
            ?>
            <!-- Column -->
            <div class='<?=$this->tamanhos[$tamanho]?>'>
                <div class='card card-hover'>
                    <div class='box bg-<?=$this->cores[$cor]?> text-center'>
                        <h1 class='font-light text<?=$letraBranca ? '-white' : ''?>'><i class='<?=$classeIcon?>'></i></h1>
                        <h6 class='text-white'><?=$frase?></h6>
                    </div>
                </div>
            </div>
            <?php
        }

        /*<?=$tamanho?>*/
        public function botaoInfo($valor = '', $texto = '', $tamanho = '', $classes = ''){
            ?>
            <div class='col-<?=$tamanho?> mt-3 <?=$classes?>'>
                <div class='bg-dark p-10 text-white text-center'>
                    <i class='fa fa-globe mb-1 font-16'></i>
                    <h5 class='mb-0 mt-1'><?=$valor?></h5>
                    <small class='font-light'><?=$texto?></small>
                </div>
            </div>
            <?php
        }

        public function iniciarCartao($tamanho, $titulo = null, $subtitulo = null){
            if(isset($titulo)){  
            ?>
            <div>
                <h4 class='card-title'><?=$titulo?></h4>
                <h5 class='card-subtitle'><?=$subtitulo?></h5>

            </div>
            <?php
            }
            ?>
            <div class='col-md-<?=$tamanho?>'>
                <div class='card'>
                    <div class='card-body'>
            <?php
        }
        
        public function finalizarCartao(){
            ?>
                    </div>
                </div>
            </div>
            <?php
        }

        public function rodape($frase = '', $link = null, $textoLink = ''){
            ?>
                <footer class='footer text-center'>
                <?=$frase?>
                <a href='<?=$link?>'><?=$textoLink?></a>.
                </footer>
            <?php
        }

        public function iniciarCabecalho($titulo = null, $img = null){
            ?>
            <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                
                    <a class="navbar-brand" href="<?=$path['site']?>">
                        <?php
                        if(isset($img)){
                            ?>
                            <img src="<?=$img?>" alt="" class="light-logo" />
                            <?php
                        }
                        
                        if(isset($titulo)){
                            ?>
                            <span class="logo-text">
                                <span class="titulo"> <?=$titulo?></span>
                            </span>
                            <?php
                        }
                        ?>
                    </a>

                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <?php
        }

        public function finalizarCabecalho(){
            ?>      
                    </div>
                </nav>
            </header>
            <?php
        }

        public function iniciarNavTopo($lado){
            if($lado == 'direito'){
                ?>
                <ul class="navbar-nav float-start me-auto">
                <?php
            }
            else{
                ?>
                <ul class="navbar-nav float-end">
                <?php
            }
        }

        public function finalizararNavTop(){
            ?>
                </ul>
            <?php
        }
        // OBJETOS QUE VÃO DENTRO DO NAV
            public function botaoAbriMenuLateral(){
                ?>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"data-sidebartype="mini-sidebar">
                    <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li>
                <?php
            }

            public function barraDePesquisa($menu = null, $opcoes = array()){
                if(isset($menu)){
                ?>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        <span class='d-none d-md-block'><?=$menu?> <i class='fa fa-angle-down'></i></span>
                        <span class='d-block d-md-none'><i class='fa fa-plus'></i></span>
                    </a>
                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <?php
                        foreach($opcoes as $nome => $link){
                        ?>
                        <li><a class='dropdown-item' href='<?=$link?>'><?=$nome?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
                <!-- Buscar -->
                
                <li class='nav-item search-box'> <a class='nav-link waves-effect waves-dark'
                        href='javascript:void(0)'><i class='ti-search'></i></a>
                    <form class='app-search position-absolute'>
                        <input type='text' class='form-control' placeholder='Search &amp; enter'> <a
                            class='srh-btn'><i class='ti-close'></i></a>
                    </form>
                </li>
                <?php
            }

            public function blocoMensagens($mensagens = array()){
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="font-24 mdi mdi-comment-processing"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                        <ul class="list-style-none">
                            <li>
                                <div class="">
                                    <?php
                                    foreach($mensagens as $mensagem){
                                    ?>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-success btn-circle"><i
                                                    class="ti-calendar"></i></span>
                                            <div class="ms-2">
                                                <h5 class="mb-0"><?=$mensagem->titulo?></h5>
                                                <span class="mail-desc"><?=$mensagem->mensagem?></span>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </li>
                <?php
            }

            public function blocoPerfil(){
                ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?=$path['site']?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                        Perfil</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                        Resultados</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                        Mensagens</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)"><i
                            class="ti-settings me-1 ms-1"></i> Configurações</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0)"><i
                            class="fa fa-power-off me-1 ms-1"></i> Sair</a>
                    <div class="dropdown-divider"></div>
                    <div class="ps-4 p-10"><a href="javascript:void(0)"
                            class="btn btn-sm btn-success btn-rounded text-white">Ver Perfil</a></div>
                </ul>
                </li>
                <?php
            }

            public function blocoNotificacoes($notificacoes = array()){
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell font-24"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach($notificacoes as $notificacao){
                        ?>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
        //FIM DOS OBJETOS DO NAV

        public function iniciarMenu(){
            ?>
            <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
            <?php
        }

        public function finalizarMenu(){
            ?>
                </ul>
                    </nav>
                </div>
            </aside>
            <?php
        }

        public function menuItem($nome = "Menu item", $href = ""){
            ?>
            <li class="sidebar-item" id="menu_<?=$nome?>">
                <a class="sidebar-link waves-effect  sidebar-link" href="<?=$href?>" aria-expanded="false">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span class="hide-menu"><?=ucFirst($nome)?></span>
                </a>
            </li>
            <script>
                document.getElementById("menu_<?=$nome?>").removeAttribute('.selected');
            </script>
            <?php
        }

        public function menuItemExpansivo($nome = "Menu Item Expandivo", $icone = "", $subItens = array()){
            ?>
            <!-- ESTA CLASS -->
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="<?=$icone?>"></i>
                    <span class="hide-menu"><?=$nome?> </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <?php
                    foreach($subItens as $item){
                    ?>
                    <li class="sidebar-item">
                        <a href="<?=$item->href?>" class="sidebar-link">
                            <i class="mdi mdi-note-outline"></i>
                            <span class="hide-menu"><?=$item->nome?></span>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <?php
        }

        public function tabelaSimples($titulo, $colunas = array(), $linhas = array(), $ajuda = "Recebe um titulo, uma lista com os nomes das colunas e um array de array das linhas para listar na tabela"){
            
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0"><?=strtoUpper($titulo)?></h5>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <?php
                                for($i = 0; $i < 2; $i++){
                                    ?>
                                    <th scope="col"><?= $colunas[$i] != "" ? ucFirst($colunas[$i]) : ""?></th>
                                    <?php
                                }
                            ?>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                foreach($linhas as $linha){
                                    $lista = "'";
                                    foreach($linha as $key => $valor){
                                        if($key != "id" && $key != "id_usuario"){
                                            $lista .= $key.",".$valor.":";
                                        }
                                    }
                                    rtrim($lista, ",");
                                    $lista .= "'";
                                    $this->iniciarPopUpSolicitar($linha['id']);
                                    for($i = 0; $i<count($colunas); $i++){
                                        $this->inserirBotaoSolicitar($colunas[$i], $linha['id']);
                                    }
                                    $this->finalizarPopUpSolicitar();
                                    ?>
                                     <tr>
                                    <?php
                                    for($i = 0; $i<2; $i++){
                                    ?>
                                    <td><?= $linha[$colunas[$i]] != "" ? ucFirst($linha[$colunas[$i]]) : ""?></td>
                                    <?php
                                    }
                                    ?>
                                    <td><button type="button" data-toggle="modal" data-target="#solicitacoes<?=$linha['id']?>"><i class="fas fa-cog"></i></button></td>
                                    <td><button type="button" id="vizualizarRegistro" onclick="vizualizarRegistro(<?=$linha['id']?>,<?=$lista?>)"><i class="fas fa-eye"></i></button></td>
                                    <td><button type="button" id="excluirRegistro" onclick="excluirRegistro(<?=$linha['id']?>)"><i class="fas fa-trash"></i></button></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                    </tbody>
                </table>
            </div>
            <?php
        }

        public function iniciarPopUpSolicitar($id, $titulo = "O que deseja solicitar?", $descrição = "Recebe um titulo e uma lista de opções que poderão ser solicitadas atraves da função solicitar em javascript"){
            ?>
            <div class="modal fade" id="solicitacoes<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="solicitacoes<?=$id?>"           aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="solicitacoes<?=$id?>"><?=$titulo?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
        }
        
        public function inserirBotaoSolicitar($nome, $id){
            ?>
            <button type="button" onclick="solicitar<?=$nome?>(<?=$id?>)" class="btn-solicitar btn btn-primary btn-lg"><?=$nome?></button>
            <?php
        }

        public function finalizarPopUpSolicitar(){
            ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Finalizar</button>
                </div>
                </div>
            </div>
            </div>
        <?php
        }
    }