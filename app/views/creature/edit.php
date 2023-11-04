<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '\..\..\..\persistence\DAO\CreatureDAO.php');
require_once(dirname(__FILE__) . '\..\..\models\Creature.php');
//Compruebo que me llega por GET el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->selectById($id);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Artean</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img class="img-fluid" style="width: 10rem; height: 4rem;" src="../../../assets/img/small-logo.png" alt="" ></a>
        </nav>
        <!-- Page Content -->
        <div class="container">
            <form class="form-horizontal" method="post" action="../../controllers/creature/editController.php">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Pokemon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Pokemon" value="<?php echo $creature->getName(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Descripción</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Descripción" value="<?php echo $creature->getDescription(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="avatar" name="avatar" placeholder="Foto" value="<?php echo $creature->getAvatar(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="attackPower" class="col-sm-2 control-label">Ataque</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="attackPower" name="attackPower" placeholder="Ataque" value="<?php echo $creature->getAttackPower(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lifeLevel" class="col-sm-2 control-label">Vida</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lifeLevel" name="lifeLevel" placeholder="Vida" value="<?php echo $creature->getLifeLevel(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="weapon" class="col-sm-2 control-label">Tipo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="weapon" name="weapon" placeholder="Tipo" value="<?php echo $creature->getWeapon(); ?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $creature->getIdCreature(); ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Editar</button>
                    </div>
                </div>
            </form>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; J. P. 2023</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
        <!-- Java Script Boostrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </body>

</html>


