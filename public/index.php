<?php
include 'ctrl.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "">
<html xmlns="">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
	<style>
		a, h1, h2, p{
			font-family: 'PT Serif', serif;
		}

		svg{
			color: #f1f1f1;
		}
        .cabecalho {
			background-image: url("img/fundo.jfif");
            position: fixed;
            width: 100%;
            background-color: #212529;
            height: 70px;
        }
		
		.nomeEmpresa a{
			z-index: 1;
		}

        a.option {
            border: 4px solid;
            border-radius: 5px;
            margin: 7px 10px;
        }
		.sidenav {
			background-image: url("img/fundo.jfif");
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 10px;
			left: 0;
			background-color: #212529;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover {
			color: #f1f1f1;
			padding: 10px 10px 10px 21px;
			text-decoration: none;
			font-size: 30px;
		}
		
		.sidenav .closebtn {
			position: absolute;
			top: -15px;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}
		.conteudo {
			left: 0;
			position: relative;
			top: 27px;
			padding: 10px;
			transition: 0.5s;
		}

        @media (min-width: 880px){
            .closebtn{
                visibility: hidden;
            }
			.nomeEmpresa a{
				z-index: 2;
			}
            .sidenav {
                width: 250px;
            }
			.conteudo {
				left: 250px;
			}
        }

		@media screen and (max-height: 450px) {
			.sidenav {
				padding-top: 15px;
			}

			.sidenav a {
				font-size: 18px;
			}
		}

		.nomeEmpresa a {
			position: relative;
			color: #818181;
			font-size: 31pt;
			text-decoration: none;
			-webkit-text-stroke-width: 1px;
			-webkit-text-stroke-color: white;
		}
		.menu {
			margin-top: 20px;
		}

		.icon-user{
			position: absolute;
			right: 0;
			top: 0;
			width: 50px;
			margin: 10px;
		}
		.menu-user {
			position: absolute;
			top: 70px;
			height: 250px;
			right: 0;
			width: 0;
			transition: 0.5s;
			transition-delay: .3s;
		}

		.menu-user:hover{
			width: 200px;
		}

		.menu-user a {
			color: #fff;
			background-color: #0f0f0fc9;
			display: inherit;
			padding: 5px;
			font-size: 16pt;
			border: 4px solid #151515;
			border-radius: 5px;
			margin: 7px 10px;
		}
	</style>
</head>

<body>
	<div class="body-wrapper">
		
	    
		<!-- INCIO PAGINAS -->
		<?php
			include "../App/Views/head.php";
            $rotas = new Rota();
            include "../App/Views/footer.php";
		?>
		<!--/FIM PAGINAS  --> 



        <script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}

		function openUser(){
			document.getElementById('menu-user').style.width = "170px"
		}
		function closeUser(){
			document.getElementById('menu-user').style.width = "0"
		}
		</script>
	</div>

</body>
</html>