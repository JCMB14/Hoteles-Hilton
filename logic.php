
<?php
require 'factory.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = isset($_POST['costo']) ? intval($_POST['costo']) : 0;
    
    $hotel = factory::hotel($valor);

    $formulario = $hotel->mostrarFormulario();

    echo $formulario;
}

?>