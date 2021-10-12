

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Admin</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?=URL?>dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Raynder Cardoso</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?=URL?>dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Raynder Cardoso - Web Developer
                  <small>Programador desde  2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=URL?>dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Raynder Cardoso</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-users"></i> <span>Empresas</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Empresas
        <small>Gerenciamento de Empresas do sistema</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Empresas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-8">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Empresas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <!-- <th style="width: 10px">Foto</th> -->
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                if(is_array($dados['empresas']) || is_object($dados['empresas'])){

                    if(!isset($dados['empresas']['id'])){
                      foreach($dados['empresas'] as $empresa){
                        ?>
                        <tr>
                          <!-- <td><img src="<?=URL?>dist/img/user1-128x128.jpg" alt="User Image" class="img-circle img-sm"></td> -->
                          <td><?=$empresa['nome']?></td>
                          <td><?=explode(",",$empresa['categoria'])[0]?></td>
                          <td><?=$empresa['criado_em']?></td>
                          <td>
                            <button type="button" class="btn btn-primary btn-xs btn-flat">Editar</button>
                            <button type="button" onclick="excluir_empresa('<?=$empresa['id']?>','<?=$empresa['nome']?>')" class="btn btn-danger btn-xs btn-flat">Excluir</button>
                          </td>
                        </tr>
    
                        <?
                      }
                    }
                    else{
                      ?>
                      <tr>
                      <td>
                        <img src="<?=URL?>dist/img/user1-128x128.jpg" alt="User Image" class="img-circle img-sm">
                      </td>
                      <td><?=$dados['empresas']['nome']?></td>
                      <td><?=explode(",",$dados['empresas']['categoria'])[0]?></td>
                      <td><?=$dados['empresas']['criado_em']?></td>
                      <td>
                        <button type="button" class="btn btn-primary btn-xs btn-flat">Editar</button>
                        <button type="button" onclick="excluir_empresa('<?=$dados['empresas']['id']?>','<?=$dados['empresas']['nome']?>')" class="btn btn-danger btn-xs btn-flat">Excluir</button>
                      </td>
                    </tr>
                    <?
                    }
                }
                ?>

                  <!-- 

                  <tr>
                    <td>
                      <img src="<?=URL?>dist/img/user1-128x128.jpg" alt="User Image" class="img-circle img-sm">
                    </td>
                    <td>Fulano</td>
                    <td>fulano@gmail.com.br</td>
                    <td>Sim</td>
                    <td>02/04/2018</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-xs btn-flat">Editar</button>
                      <button type="button" class="btn btn-danger btn-xs btn-flat">Excluir</button>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <img src="<?=URL?>dist/img/user1-128x128.jpg" alt="User Image" class="img-circle img-sm">
                    </td>
                    <td>Fulano</td>
                    <td>fulano@gmail.com.br</td>
                    <td>Sim</td>
                    <td>02/04/2018</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-xs btn-flat">Editar</button>
                      <button type="button" class="btn btn-danger btn-xs btn-flat">Excluir</button>
                    </td>
                  </tr> -->
                  
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <div class="col-md-4">

          <div class="row">
          
            <!-- ./col -->
            <div class="col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>0</h3>
          
                  <p>Novas Empresas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>0</h3>
          
                  <p>Administradores</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Novo Cadastro</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="form-user-create">

              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome Fantasia</label>
                  <input type="text" class="form-control" id="nome" placeholder="Digite o nome do estabelecimento" name="nome">
                </div>
                <div class="form-group">
                  <label for="">Horario de Funcionamento</label><br>
                  <input type="time" id="hr_inicio" name="hr_inicio" min="00:00" max="23:59" required> as
                  <input type="time" id="hr_fim" name="hr_fim" min="00:00" max="23:59" required>
                </div>
                

                <div class="">
                  <br />
                  <p>Coloque aqui sua logo</p>
                  <br />
                  <div class="row">
                      <!-- <div class="col-md-4">&nbsp;</div> -->
                      <div class="col-md-8">
                          <div align="center" class="image_area">
                              <form method="post">
                                  <label for="upload_image">
                                      <img src="<?=URL?>img/user.jpg" id="uploaded_image" class="img-responsive img-circle" />
                                      <div class="overlay">
                                          <div class="text">Clique na imagem</div>
                                      </div>
                                      <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                                  </label>
                              </form>
                          </div>
                      </div>
                  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Crop Image Before Upload</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="img-container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img src="" id="sample_image" />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="preview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="crop" class="btn btn-primary">Crop</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
              

                <div class="checkbox">
                  <style>
                    .checkbox label{
                      width: 100%;
                    }
                  </style>
                  <label>
                    <input type="checkbox" name="pizzaria"> Pizzaria
                  </label>
                  <label>
                    <input type="checkbox" name="restaurante"> Restaurante
                  </label>
                  <label>
                    <input type="checkbox" name="acai"> Açai
                  </label>
                  <label>
                    <input type="checkbox" name="hamburgeria"> Hamburgueria
                  </label>
                  <label>
                    <input type="checkbox" name="sorveteria"> Sorveteria
                  </label>
                </div>
              </div>
              <!-- /.box-body -->          
              <div class="box-footer">
                <button onclick="cadastrar_empresa()" type="button" class="btn btn-success">Salvar</button>
              </div>
            </form>
          </div>

        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <a target="_blank" href="https://www.Admin.com.br">Admin</a>
    </div>
    <!-- Default to the left -->
    Painel desenvolvido por Arkadian.Si.
  </footer>

</div>

<script>
  
</script>




</body>
</html>