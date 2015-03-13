
   <div class="container">

      <form class="form-signin" role="form" action="http://localhost/Codeigniter/index.php/welcome/insertarD" method="post">
        <h2 class="form-signin-heading">Registro Docente</h2>
        <input type="text" class="form-control" name="doc_rt" placeholder="Rut" required autofocus>
        <input type="text" class="form-control" name="doc_dv" placeholder="DV" required>
        <input type="name" class="form-control" name="doc_nom" placeholder="Nombre" required>
        <input type="name" class="form-control" name="doc_lastn" placeholder="Apellido" required>
        <select name="selAreas" class="form-control">
        <?php
        foreach ($arrAreas as $i => $area)
           echo '<OPTION value="',$i,'">',$area,'</OPTION>';
        ?>
        </select>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
      </form>
    </div> <!-- /container -->