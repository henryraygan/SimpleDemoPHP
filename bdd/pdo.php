<?php 

    include "environment.php";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$table;charset=utf8", $usr, $pwd);
        
        if($conexion) {
            $status = '<div class="alert alert-success" role="alert">
            This connection is a success!
          </div>';
        } else {
            $status;
        }
        
    } catch(PDOException $e) {

        echo 
        '
        <div class="alert alert-warning" role="alert">
            Error: ' . $e -> getMessage() . '
        </div>
        ';

        
    }

?>