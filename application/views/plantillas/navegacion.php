<body>
<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> -->
            <a class="navbar-brand" href="principal">Panel Administrador</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alumno <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="registrarAlumno">Registrar Alumno</a></li>
                  <li><a href="eliminarAlumno">Eliminar Alumno</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Docente <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="registrarDocente">Registrar Docentes</a></li>
                  <li><a href="eliminarDocente">Eliminar Docente</a></li>
                </ul>
              </li>

              <li><a href="crearRamo">Crear Ramo</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<? echo base_url(); ?>index.php/welcome/logout/">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>