<?php include('../templates/header.php'); ?>
<?php include('../secciones/cursos.php'); ?>


<div class="row">
        
        <div class="col-12">
          <br>
          <div class="row">
            
   

<div class="col-md-5">

<form action="" method="post">
   <div class="card">
         <div class="card-header">
            Cursos
         </div>
      <div class="card-body">

         <div class="mb-3">
            <label for="" class="form-label">ID</label>
            <input type="text"
               class="form-control" 
               name="" 
               id="" 
               aria-describedby="helpId" 
               placeholder="ID">
          </div>

         <div class="mb-3">

            <label for="nombre_curso" class="form-label">Nombre del curso</label>
            <input type="text"
               class="form-control" 
               name="nombre-curso" id="nombre-curso" 
               aria-describedby="helpId" 
               placeholder="Nombre del curso">
        
         </div>

      <div class="btn-group" role="group" aria-label="">
         <button type="submit" name="accion" value='agregar' class="btn btn-success">Agregar</button>
         <button type="submit" name="accion" value='editar' class="btn btn-warning">Editar</button>
         <button type="submit" name="accion" value='borrar' class="btn btn-danger">Borrar</button>
      </div>

     </div>
   </div>
</form>

</div>
 
      

<div class="col-7">

      <table class="table">
         <thead>
            <tr>
               <th>ID</th>
               <th>NOMBRE DEL CURSO</th>
               <th>ACCIONES</th>
            </tr>
         </thead>
         <tbody>

         <!-- Colocar el contenido de listaCursos en HTML mediante una tabla y un foreach -->
         <?php foreach($listaCursos as $curso){ ?>
            <tr>
               <td><?php echo $curso['id']; ?></td>
               <td><?php echo $curso['nombre_curso']; ?> 
            </td>
               <td>Seleccionar</td>
            </tr>
         <?php }?>
            
         </tbody>
      </table>
      

</div>

</div>
</div>





<?php include('../templates/footer.php');?>