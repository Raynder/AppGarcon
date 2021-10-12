<style>
  /* The container */

  /* Create a custom checkbox */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
  }


  /* When the checkbox is checked, add a blue background */
  input:checked ~ .checkmark {
    background-color: #2196F3;
  }

  /* Create the checkmark/indicator (hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the checkmark when checked */
  input:checked ~ .checkmark:after {
    display: block;
  }

  /* Style the checkmark/indicator */
  .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  label.inputMark {
    background-color: grey;
    padding: 5px;
    border-radius: 20px;
    color: white;
    transition: 1s;
  }
  .inputMark input[type="checkbox"] {
    width: 0;
  }
</style>

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
        Empresa
        <small>Minhas informações</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i> Empresa</a></li>
        <li class="active">Empresa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-8">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Informações</h3>
            </div>
          </div>

        </div>
        <div class="col-md-12">

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Alterar Dados</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="form-user-create">

              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome Fantasia</label>
                  <input required type="text" class="form-control" id="nome" placeholder="Digite o nome do estabelecimento" name="nome">
                </div>
                <div class="form-group">
                  <label for="">Horario de Funcionamento</label><br>
                  <input type="time" id="hr_inicio" name="hr_inicio" min="00:00" max="23:59" required> as
                  <input type="time" id="hr_fim" name="hr_fim" min="00:00" max="23:59" required>
                </div>
                <div class="form-group">
                  <label for="">Dias de Funcionamento</label><br>
                    <label id="domingo" class="inputMark">Domingo
                      <input name="dias" value="domingo" type="checkbox">
                      
                    </label>
                    <label id="segunda" class="inputMark">Segunda
                      <input name="dias" value="segunda" type="checkbox">
                      
                    </label>
                    <label id="terca" class="inputMark">Terça
                      <input name="dias" value="terca" type="checkbox">
                      
                    </label>
                    <label id="quarta" class="inputMark">Quarta
                      <input name="dias" value="quarta" type="checkbox">
                      
                    </label>
                    <label id="quinta" class="inputMark">Quinta
                      <input name="dias" value="quinta" type="checkbox">
                      
                    </label>
                    <label id="sexta" class="inputMark">Sexta
                      <input name="dias" value="sexta" type="checkbox">
                      
                    </label>
                    <label id="sabado" class="inputMark">Sabado
                      <input name="dias" value="sabado" type="checkbox">
                      
                    </label>
                </div>
                <div class="form-group">
                  <label for="distancia">Distancia maxima em KM</label>
                  <input type="text" class="form-control" id="distancia" placeholder="Digite o limite em Km da distancia que fara entregas" name="distancia">
                </div>
                <div class="form-group">
                  <label for="entrega">Entrega</label>
                  <input required type="text" class="form-control" id="entrega" placeholder="Digite o valor da entrega" name="entrega">
                </div>

                
                			
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