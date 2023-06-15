<?php require_once('header.php');?>

<?php require_once('config/conexion.php');?>
<br><br>
<div class="container-fluid" style="background-image: url(img/1.png);background-size:cover; height: 85vh;">

    <div class="container mb-4">
        <div class="d-flex justify-content-center align-items-center" style="height: 10rem;">
            <div class="container text-center">
                <h2 class="fs-6">Bienvenido al panel de Administracion</h2>
            </div>
        </div>
        <br>
        <div class="container-fluid m-auto p-3 mb-6"
            style="width: 70%; background-color: rgba(179, 161, 161, 0.9);border-radius: 20px;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label style="font-weight: bolder;" for="email">Usuario:</label>
                    <input type="text" class="form-control" placeholder="Ingrese su usuario" name="email" id="email"
                        maxlength="40" minlength="4" required>
                </div>
                <br>
                <div class="form-group">
                    <label style="font-weight: bolder; " for="contraseña">Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Ingrese contraseña" name="contraseña"
                        id="contraseña" maxlength="40" minlength="4" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary border-radius: 20px; ">Ingresar</button>
        </div>
    </div>
</div>
<br><br>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['contraseña'])) {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];

        $query = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) == 1) {
           // Credenciales válidas, el inicio de sesión es exitoso
           // Redirecciona al panel de administración u otra página deseada
            header("Location: panelAdmin/adminProyecto.php");
           exit;
        } else {
            // Credenciales inválidas, muestra un mensaje de error o realiza alguna acción adecuada
           echo "Credenciales inválidas. Por favor, intenta de nuevo.";
        }
    }    
}
?>

<?php require_once('footer.php');?>
