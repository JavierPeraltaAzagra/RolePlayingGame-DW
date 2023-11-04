<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');
require_once(dirname(__FILE__) . '/../../app/models/validations/ValidationsRules.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Llamo a la función en cuanto se redirige el action a esta página mediante metodo POST
   createAction();
}
// Función encargada de crear nuevas ofertas
function createAction() {
    // Obtención de los valores del formulario y validación
    $company = ValidationsRules::test_input($_POST["company"]);
    $position = ValidationsRules::test_input($_POST["position"]);
    $function = ValidationsRules::test_input($_POST["function"]);
    // Creación de objeto auxiliar   
    $offer = new Creature();
    $offer->setName($company);
    $offer->setDescription($position);
    $offer->setAvatar($function);
    //Creamos un objeto OfferDAO para hacer las llamadas a la BD
    $offerDAO = new CreatureDAO();
    $offerDAO->insert($offer);
 
    header('Location: ../../../index.php');
}
?>

