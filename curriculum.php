<?php
$servidor = "localhost";
$database = "bd_mibase";
$user = "user_mibase";
$pass = "colocolo73";
$conn = mysqli_connect($servidor,$user,$pass,$database);
if(!$conn){
    die("ha ocurrido un error:".mysqli_connect_error());
}
echo "tenemos coneccion";

$query = "SELECT * from usuarios";
$result = mysqli_query($conn,$query);

if($result){
    echo "<table border = '1'>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>rut</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellido'] . "</td>";
        echo "<td>" . $row['rut'] . "</td>";
        echo "</tr>";
        
    }
    echo "</table>";
}
else{
    echo "error en la consulta". mysqli_error($conn);
}

    $sql ="SELECT * FROM usuarios WHERE id_usuario = 1";
    $result = mysqli_query($conn,$sql);

    if($result){
        $row = mysqli_fetch_assoc($result);
        $nombreusuario = $row['nombre'];
        $apellidousuario = $row['apellido'];
    }
    else{
        $nombreusuario = "nombre no encontrado";
        $apellidousuario = "apellido no encontrado";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Curriculum - Francisco Miranda</title>
    
    <!-- Enlaces a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="fondocolor">
    <div class="container mt-5">
    <h1><?php echo $nombreusuario ." ". $apellidousuario ?></h1>
        <div class="row">
            <div class="col-md-12">
                <!-- Carrusel de Imágenes -->
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-12">
                <!-- Tarjetas de Experiencia -->
                <h1>especialidades</h1>
                <div class="row">
                    <!-- Tarjeta 1 -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="imagenes/istockphoto-1147195672-612x612.jpg" class="card-img-top" alt="Imagen 4">
                            <div class="card-body">
                                <h5 class="card-title">Programador backend</h5>
                                <p class="card-text">Especializado en desarrollo backend, con experiencia en la creación de sólidas bases de datos y servidores. Apasionado por la eficiencia y el rendimiento del software..</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="imagenes/OIP.jpg" class="card-img-top" alt="Imagen 5">
                            <div class="card-body">
                                <h5 class="card-title">Programador frontend</h5>
                                <p class="card-text">Experto en desarrollo frontend, centrado en la creación de interfaces de usuario atractivas y funcionales. Comprometido con la experiencia del usuario y el diseño responsivo."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="imagenes/R.jpg" class="card-img-top" alt="Imagen 6">
                            <div class="card-body">
                                <h5 class="card-title">Analista de datos</h5>
                                <p class="card-text">Analista de datos con habilidades en el procesamiento y análisis de datos. Apasionado por descubrir ideas valiosas a partir de datos y tomar decisiones informadas..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <!-- Fila para los acordeones -->
                <div class="row">
                    <!-- Acordeón 1 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Experiencia laboral
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                <div class="card-body">
                                        Apple
                                        <br>Samsung
                                        <br>Microsoft
                                        <br>Alphabet (Google)
                                        <br>Intel
                                        <br>IBM
                                        <br>Facebook
                                        <br>Tencent Holdings
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Acordeón 2 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Datos Personales
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                <div class="card-body">
                                    Correo: fmirchav@umag.cl
                                    <br>dirreccion: Calle inexistente 555
                                    <br>fono:+56955555555
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Acordeón 3 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Proyectos
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                <div class="card-body">
                                    Sistema de Gestión de Contenido
                                    <br>Aplicación Web de Comercio Electrónico
                                    <br>Sistema de Análisis de Datos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<footer>
    footer
</footer>
</html>
