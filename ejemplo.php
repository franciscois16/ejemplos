<!-- nombre de base de dato bd_mibase
usuario user_mibase
contra la de siempre
-->
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


?>

<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>php</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
                </nav>
            </div> 
            <div class="col-md-12 mt-5">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="imagenes/imagen.webp" class="d-block w-100" alt="narnia">
                        </div>
                        <div class="carousel-item">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/a2.datacaciques.com/16/09/13/892vwd1vz25ch13k/a9f677a055826ac5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/a2.datacaciques.com/16/09/13/892vwd1vz25ch13k/a9f677a055826ac5.jpg" class="d-block w-100" alt="...">
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
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <img src="https://th.bing.com/th/id/OIP.AwLkttol1X9VgKZ1PF0omgHaHR?w=204&h=200&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <img src="https://3fc4ed44-3fbc-419a-97a1-a29742511391.selcdn.net/coub_storage/coub/simple/cw_image/da1c9916a8e/08100decf52965e3792c3/med_1692122425_00017.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <img src="https://th.bing.com/th/id/OIP.AwLkttol1X9VgKZ1PF0omgHaHR?w=204&h=200&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    imagen1
                    <image src="https://th.bing.com/th/id/OIP.-8lpcyfngaybcadlJ-E8_QHaHa?pid=ImgDet&rs=1">
                </div>
                <div class="col-md-4">
                    imagen2
                    <image src="https://th.bing.com/th/id/OIP.-8lpcyfngaybcadlJ-E8_QHaHa?pid=ImgDet&rs=1">
                </div>
                <div class="col-md-4">
                    imagen3
                    <image src="https://th.bing.com/th/id/OIP.-8lpcyfngaybcadlJ-E8_QHaHa?pid=ImgDet&rs=1">
                </div>

            </div>
        </div>
        
        
        
        
        
    </body>
    <footer>
        footer
    </footer>

</html>