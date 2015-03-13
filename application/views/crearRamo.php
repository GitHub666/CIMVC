
    <div class="container">

      <form class="form-signin" role="form" action="<? echo base_url(); ?>index.php/welcome/insertaR" method="post">
        <h2 class="form-signin-heading">Crear Ramo</h2>
        <input type="text" class="form-control" name="ramo_nom" placeholder="Nombre Ramo" required autofocus>
        <input type="name" class="form-control" name="ramo_year" placeholder="Año Ramo" required>
        <input type="name" class="form-control" name="ramo_cupo" placeholder="Cupo Ramo" required>
        <select name="selAreas" class="form-control">
        <?php
        foreach ($arrAreas as $i => $area)
           echo '<OPTION value="',$i,'">',$area,'</OPTION>';
        ?>
        </select>
        <select name="selDoc" class="form-control">
        <?php
        foreach ($arrDoc as $i => $doc)
           echo '<OPTION value="',$i,'">',$doc,'</OPTION>';
        ?>
        </select>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Crear</button>
      </form>
    </div> <!-- /container -->
