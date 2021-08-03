<div class="cabecalho">
	<div class="nomeEmpresa">
	<span style="font-size:30px;cursor:pointer;color:white;" id="openbtn" onclick="openNav()">&#9776;</span>
		<a href="">&nbsp;&nbsp;<?=strtoupper(EMPRESA) ?></a>
	</div>
	<div onmouseout="closeUser()" onmouseover="openUser()" class="user">

	<svg class="icon-user" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
		<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
	</svg>

	<div id="menu-user" class="menu-user"  onmouseover="openUser()">
		<a class="" href="<?= URL ?>servicoes">Perfil</a>
		<a class="" href="<?= URL ?>clientes">Notificações</a>
		<a class="" href="<?= URL ?>contatos/amigos">Sair</a>
	</div>
</div>
<div id="mySidenav" class="sidenav">
	<div class="menu">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<i class="bi bi-forward"></i><a class="option" href="<?= URL ?>editor/fundo">Fundo</a>
		<i class="bi bi-forward"></i><a class="option" href="<?= URL ?>servicoes">Services</a>
		<i class="bi bi-forward"></i><a class="option" href="<?= URL ?>clientes">Clients</a>
		<i class="bi bi-forward"></i><a class="option" href="<?= URL ?>contatos/amigos">Contact</a>
	</div>
</div>



<?php

