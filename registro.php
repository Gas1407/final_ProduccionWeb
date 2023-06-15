<?php require_once('header.php');?>
<?php require_once "config/conexion.php"; ?>

<?php 
if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $consulta = "INSERT INTO usuarios(nombre, apellido, email, contraseña) VALUES ('$nombre','$apellido', '$email','$contraseña')";
        $resultado = mysqli_query($conexion, $consulta);
    }
}
?>

<div class="container-fluid m-auto p-4 mb-5" style="width: 70%; background-color: rgba(179, 161, 161, 0.9);border-radius: 20px;">
<form action="" method="POST">
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="campoNombre" name="nombre" >
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="campoApellido" name="apellido">
  </div>    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="campoEmail" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="inputPassword5" class="form-label">Contraseña</label>
    <input type="password" id="campoContraseña" class="form-control" aria-describedby="passwordHelpBlock" name="contraseña">
    <div id="passwordHelpBlock" class="form-text">
    Tu contraseña debe tener entre 8 y 20 carácteres, debe contener numeros y letras, y no puede contener espacios, caracteres especiales o emojis.
    </div>
  </div>
  <input type="submit" class="boton" name="registro" value="Registrar">
</form>
</div>


<?php require_once('footer.php');?>