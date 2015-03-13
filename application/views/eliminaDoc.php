<div class="container">
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Rut Docente</th>
          <th>DV Docente</th>
          <th>Nombre Docente</th>
          <th>Apellido Docente</th>
          <th>Area Docente</th>
          <th>Operacion</th>
        </tr>
      </thead>
      <tbody>        
        <?
        foreach ($arrDocente as $docente){
         echo '<tr>';
         echo '<td>',$docente->doc_id,'</td>';
         echo '<td>',$docente->doc_rt,'</td>';
         echo '<td>',$docente->doc_dv,'</td>';
         echo '<td>',$docente->doc_nom,'</td>';
         echo '<td>',$docente->doc_lastn,'</td>';
         echo '<td>',$docente->area_nom,'</td>';
         echo '<td>'?><a href="<? echo base_url(); ?>index.php/welcome/eliminarDoc/<? echo $docente->doc_id; ?>" ><button type="button" class="btn btn-danger">Eliminar</button></a><?'</td>';
         echo '</tr>';}
        ?>
      </tbody>
    </table>
    </div>