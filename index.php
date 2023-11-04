<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '\app\controllers\indexController.php');
//Recupero de la BD todos los empleos a través del controlador
$creatures = indexAction();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Pokemon</title>
        <!-- Bootstrap Core CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img class="img-fluid" style="width: 10rem; height: 4rem;" src="./assets/img/small-logo.png" alt="" ></a>
        </nav>
        <!-- Page Content -->
        <div class="container">
            <!-- Heading Row -->
            <div class="row">
                <div class="col-md-8">
                    <img class="img-fluid rounded" src="./assets/img/main-img.jpg" alt="">
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <h1>¡Crea tu equipo Pokemon!</h1>
                    <p class="lead">Aquí puedes diseñar tu equipo pokemon como quieras.</p>
                    <p class="lead">
                       <a  class="nav-link " href="app/views/creature/insert.php">Agregar un pokemon</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Content Row -->
        <?php
        for ($i = 0; $i < sizeof($creatures); $i+=3) {
            ?>
            <div class="card-group"> 
           <!--  <div class="row">  -->
            <?php
            for ($j = $i; $j < ($i + 3); $j++) {
                if (isset($creatures[$j])) {

                    echo $creatures[$j]->privateCreature2HTML();
                }
            }
            ?>
            </div> 
            <!-- /.row -->
                <?php
            }
            ?>
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; J. P. 2023</p>
            </div>
        </div>
    </footer>
    <!-- Java Script Boostrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
</body>
</html>
