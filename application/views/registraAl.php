  
    <div class="container">
      
      <form class="form-signin" role="form" action="http://localhost/Codeigniter/index.php/welcome/insertarA" method="post">
        <h2 class="form-signin-heading">Registro Alumno</h2>
        <input type="text" class="form-control" name="al_rt" placeholder="Rut" required autofocus>
        <input type="text" class="form-control" name="al_dv" placeholder="DV" required>
        <input type="name" class="form-control" name="al_nom" placeholder="Nombre" required>
        <input type="name" class="form-control" name="al_lastn" placeholder="Apellido" required>
        <select name="selAreas" class="form-control">
        <?php
        foreach ($arrAreas as $i => $area)
           echo '<OPTION value="',$i,'">',$area,'</OPTION>';
        ?>
        </select>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
      </form>
    </div> <!-- /container -->
