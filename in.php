<?php 
include("include/conecta.php");
//registro de usuario
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>
    
   <?php  
   error_reporting();
   $consulta = "SELECT * FROM usuarios";
   $resultado =$mysqli->query($consulta);
   $fila =$resultado->fetch_array();
   ?> 

   <table class="table table-striped">
   	  <thead>
   	  	<th>Nombre</th>
   	  	<th>Apellido Paterno</th>
   	  	<th>Apellido Materno</th>
   	  	<th>Telefono</th>
   	  	<th>Usuario</th>
        <th>Nivel</th>
   	  </thead>
   
    
    <tbody>
    	<?php while ($row = $resultado->fetch_assoc()) {?>
  <tr>
   <td><?php echo $row['NOMBRE']; ?></td>
   <td><?php echo $row['Apellido_p']; ?></td>
   <td><?php echo $row['Apellido_m']; ?></td>
   <td><?php echo $row['Telefono']; ?></td>
   <td><?php echo $row['Usuario']; ?></td>
   <td><?php echo $row['Nivel']; ?></td>
  </tr>
  <?php } ?>
  </tbody>
   </table>


   <h5>Formulario de registro</h5>
   <form>
      <fieldset>

       
  <div class="form-row">
    <div class="form-group col-md-4">

      <input type="text" name="nombre" class="form-control"  placeholder="Nombre" id="Nombre">
    </div>
    <div class="form-group col-md-4">
 
      <input type="text" name="Apellido_pa" class="form-control" placeholder="Apellido Paterno" id="Apellido_p">
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-4">
  
      <input type="text" name="Apellido_ma" class="form-control" placeholder="Apellido Materno" id="Apellido_m">
        </div>
<div class="form-group col-md-4">
      
      <select id="Nivel" class="form-control">
        <option selected>Nivel</option>
        <option>Alumno</option>
        <option>Profesor</option>
        <option>Tutor</option>
        <option>Administrador</option>
        <option>Sistemas</option>
        <option>Profesor</option>
      </select>
  </div>
</div>

    <div class="form-row">
    <div class="form-group col-md-4">
      
      <input type="email" class="form-control" placeholder="Email" id="Email">
    </div>
    <div class="form-group col-md-4">
      
      
      <input type="password" class="form-control" placeholder="Password" id="inputPassword4">
    </div>
  </div>
  


  


        <input type="reset" value="Borrar" class="btn btn-danger">
        <input type="submit" value="Cargar" class="btn btn-success">
      
      </fieldset>
   


</body>
	