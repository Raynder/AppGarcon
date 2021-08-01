<?php
    $pagina = new Pagina();

    $pagina->iniciarPainel();

    //MENU LATERAL
    $pagina->iniciarMenu();
    

    $pagina->finalizarMenu();
    //FIM MENU

    $pagina->iniciarCabecalho($site['cabecalho']);
    $pagina->finalizarCabecalho();

    $pagina->finalizarPainel();
    ?>