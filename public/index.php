<?php
ob_start();
include 'ctrl.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "">
<html xmlns="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="pt-BR" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="robots" content="ALL" />
    <meta name="keywords" content="<?=$meta->tags?>" />
    <meta name="description" content="<?=$meta->descricao?>" />
    <meta name="resource-types" content="document" />
    <meta name="revisit-after" content="1 day" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="author" content="Net Suprema - Sistema Sig Imobiliario" />
    <meta name="language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="B_guV8qZoXDEKCun2DftzQEB5Uh85EblTVArYIw_Id8" />
	
	<!--  css tema -->
    <link rel="shortcut icon" href="<?= URL ?>img/barreto-icon.ico" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?= URL ?>css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?= URL ?>css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= URL ?>css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= URL ?>css/responsive.css">

    <link href="<?= URL ?>fontawesome/css/all.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= URL ?>font/flaticon.css">
    <!-- slide -->
    <link rel="stylesheet" href="<?= URL ?>assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= URL ?>js/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?= URL ?>js/slider/css/preview.css" type="text/css" media="screen" />    
    <link rel="stylesheet" href="<?= URL ?>js/slider/css/style.css" type="text/css" media="screen" />

	<!-- Plugin compartilhar whatsapp -->
    <link rel="stylesheet" href="<?= URL ?>plugin/whatsapp-chat-support.css">   	
	<script src="<?= URL ?>plugin/whatsapp-chat-support.js"></script>   






	<!-- padrão -->	     
	<link href="<?= URL ?>css/all.css" rel="Stylesheet" />		
	
    <?php ob_end_flush(); flush();?>
    <script>
        var pathSite = '<?= URL ?>';
	</script>
	
    <link rel="canonical" href="<?=isset($_SERVER['SCRIPT_URI'])?>" />
    
    <title><?=$titPag?></title>
</head>
<body>
	<div class="body-wrapper">
		
	    
		<!-- INCIO INTERNAS -->
		<?php
			//include("$abrePag");
			include "../App/Views/head.php";
            $rotas = new Rota();
            include "../App/Views/footer.php";
		?>
		<!--/FIM INTERNAS  --> 

	</div>

	<!-- comprar -->
	<div class="csm-trigger"><img src="img/comparar.png" alt=""></div>
	<!--/fim comprar -->
    
	<!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
	<!--/fim preloader area start -->

	<!-- whatsapp -->        
	<div class="whatsapp_chat_support wcs_fixed_right" id="example_5">
        <div class="wcs_button_label">
            Como podemos te ajudar?
        </div>	
        <div class="wcs_button wcs_button_circle" data-number="556239547400">
            <span class="fab fa-whatsapp" style="font-size: 28px; margin-top: 10px;"></span>
        </div>	
    </div>		
	<!--/fim whatsapp -->        

	<!-- TODOS JS Plugins -->
	<script src="<?= URL ?>js/plugins.js"></script>

	<script defer src="<?= URL ?>fontawesome/js/all.js"></script>

	<!-- Banner -->
	<script src="<?= URL ?>js/slider/js/jquery.nivo.slider.js"></script>        
	<script src="<?= URL ?>js/slider/home.js"></script>    
	<!-- Plugin compartilhar whatsapp -->
	<script src="<?= URL ?>plugin/components/moment/moment.min.js"></script>
	<script src="<?= URL ?>plugin/components/moment/moment-timezone-with-data-10-year-range.min.js"></script>
	<script src="<?= URL ?>plugin/whatsapp-chat-support.js"></script>  

	<!-- Main JS -->
	<script src="<?= URL ?>js/main.js"></script>

	<script>
		$('#example_1').whatsappChatSupport();

		$('#example_2').whatsappChatSupport();

		$('#example_3').whatsappChatSupport({
			defaultMsg : '',
		});

		$('#example_4').whatsappChatSupport({
			defaultMsg : '',
		});

		$('#example_5').whatsappChatSupport();

		$('#example_6').whatsappChatSupport();

		$('#example_7').whatsappChatSupport();

		$('#example_8').whatsappChatSupport();

		$('#example_9').whatsappChatSupport();

		$('#example_10').whatsappChatSupport();

		$('#example_11').whatsappChatSupport();
		
		$('#example_12').whatsappChatSupport();

		$('#example_13').whatsappChatSupport();
	</script>
	<!--/fim TODOS JS Plugins -->	



</body>
</html>