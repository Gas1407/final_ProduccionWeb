<?php require_once('header.php'); ?>
<?php require_once "config/conexion.php"; ?>
<br><br>
<html lang="en">

<body>

    <main class="container-fluid m-auto">
        <?php
        if (isset($_POST)) {
            if (!empty($_POST)) {
                $nombre = $_POST['nombre'];
                $telefono = $_POST['telefono'];
                $email = $_POST['email'];
                $comentario = $_POST['comentario'];
                $consulta = "INSERT INTO voluntariado(nombre, telefono, email, comentario) VALUES ('$nombre','$telefono','$email','$comentario')";
                $resultado = mysqli_query($conexion, $consulta);
            }
        }

        ?>
        <div class="container text-center">
            <h1 class="fs-1">¿Te interesa ser voluntario o ayudar a la fundacion?</h1>
            <h2 class="fs-1">¡Dejanos tus datos y nos comunicamos con vos a la brevedad!</h2>
        </div>

        <div class="container-fluid mt-5 mb-5 text-center">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/_7adZhy9L4I" title="Sumate a la Red de Voluntariado Joven de Cáritas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="container text-center pb-5">
            <h2> ¿COMO PUEDO AYUDAR?</h2>
        </div>

        <div class="container col align-self-start">
            <div class="card text-center col-5">
                <div class="card-header text-white" style="background-color: #00BFFF"></div>
                <div class="card-body">
                    <h5 class="card-title">DONACION DE ROPA</h5>
                    <p class="card-text">
                        ¿Me pondría yo la ropa que estoy separando para dar? Si la respuesta es no, tampoco sirve para donar.<br>
                        Doná ropa lista para usar: limpia, completa, que no le falten botones o cierres.<br>
                        Si vas a donar en ocasión de una emergencia, por favor entregala en bolsas o cajas, clasificada para hombre, mujer o niño.<br>
                    </p>
                </div>
            </div>
        </div>

        <br><br>

        <div class="container col align-self-center">
            <div class="card text-center col-5">
                <div class="card-header text-white" style="background-color: #00CED1"></div>
                <div class="card-body">
                    <h5 class="card-title">DONACION DE ALIMENTOS</h5>
                    <p class="card-text">Controlar la fecha de vencimiento y que los envases estén sellados herméticamente de fábrica.</p>
                </div>
            </div>
        </div>

        <br><br>

        <div class="container ">
            <div class="card text-center">
                <div class="card-header text-white" style="background-color: #CD5C5C"></div>
                <div class="card-body">
                    <h5 class="card-title">DONACION DE MEDICAMENTOS</h5>
                    <p class="card-text">Controlar la fecha de vencimiento del medicamento antes de ser donado.</p>
                </div>
            </div>
        </div>

        <br><br>




        <div class="container p-auto mb-4 border border-black" style="width: 60%; background-color: rgba(179, 161, 161, 0.9);border-radius: 20px;  ">
            <h3>Contactanos:</h3>

            <form action="" method="POST" autocomplete="off" class="mb-3">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="name" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="" require>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                    <input type="number" name="telefono" class="form-control" id="exampleFormControlInput1" placeholder="" require>
                </div>

                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                    <input type="name" name="direccion" class="form-control" id="exampleFormControlInput1" placeholder="" require>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="" require>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Nacionalidad</label>
                    <input type="name" name="nacionalidad" class="form-control" id="exampleFormControlInput1" placeholder="" require>
                </div>

                <div class="mb-2">
                    <select class="form-select mb-1" aria-label="Default select example" name="Motivo">
                        <option selected>Motivo</option>
                        <option value="1">Voluntariado</option>
                        <option value="2">Donacion</option>
                        <option value="3">Consultas</option>
                    </select>
                </div>
                <div class="mb-1">
                    <select class="form-select mt-1" aria-label="Default select example" name="¿Cómo nos conociste?">
                        <option selected>¿Cómo nos conociste?</option>
                        <option value="1">Redes sociales</option>
                        <option value="2">Google</option>
                        <option value="3">Conocido</option>
                        <option value="3">Otro</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlTextarea1" class="form-label">Dejanos un mensaje</label>
                    <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div>
                    <input class="bg-primary" type="submit" name="enviar" style="border-radius: 6px;" value="Enviar consulta">
                </div>
            </form>
        </div>


    </main>
</body>
<br><br>

<?php require_once('footer.php'); ?>

</html>