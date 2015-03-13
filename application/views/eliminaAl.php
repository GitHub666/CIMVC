<div class="container">
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Rut Alumno</th>
          <th>DV Alumno</th>
          <th>Nombre Alumno</th>
          <th>Apellido Alumno</th>
          <th>Area Alumno</th>
          <th>Operacion</th>
        </tr>
      </thead>
      <tbody>        
        <?
        foreach ($arrAlumno as $alumno){        
         echo '<tr>';
         echo '<td>',$alumno->al_id,'</td>';
         echo '<td>',$alumno->al_rt,'</td>';
         echo '<td>',$alumno->al_dv,'</td>';
         echo '<td>',$alumno->al_nom,'</td>';
         echo '<td>',$alumno->al_lastn,'</td>';
         echo '<td>',$alumno->area_nom,'</td>';
         echo '<td>'?> <a href="<? echo base_url(); ?>index.php/welcome/eliminarAl/<? echo $alumno->al_id; ?>"><button type="button" class="btn btn-danger">Eliminar</button></a> <?'</td>';
         echo '</tr>';}
        ?>
      </tbody>
    </table>
    </div>