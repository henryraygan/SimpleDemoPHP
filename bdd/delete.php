<?php 
    $ide = $_POST[id_career];

    include "./pdo.php";

    print_r($ide);
    
    $sql = $conexion->prepare('DELETE FROM CareerTableDemo WHERE id_career = :id');

    $sql->execute(
        array(':id' => $ide)
    );

    header('Location: http://localhost/DemoPHP/');
?>