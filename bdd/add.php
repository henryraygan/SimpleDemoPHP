<?php 
    $career = $_POST[career];

    include "./pdo.php";

    print_r($ide);
    
    $sql = $conexion->prepare('INSERT INTO CareerTableDemo(career) VALUES(:career)');

    $sql->bindParam(':career', $career);
    $sql->execute();

    header('Location: http://localhost/DemoPHP/');
?>