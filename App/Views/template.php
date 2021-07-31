<?php
    $pagina = new Pagina();

    $pagina->iniciarPainel();

    //MENU LATERAL
    $pagina->iniciarMenu();

    // $telas = $objTelas->listar();

    // foreach($telas as $tela){
    //     $pagina->menuItem($tela['nome'], '?url=telas/'.$tela['nome']);
    // }

    $pagina->finalizarMenu();
    //FIM MENU

    $pagina->iniciarCabecalho($site['cabecalho']);
    $pagina->finalizarCabecalho();

    $pagina->finalizarPainel();
    ?>