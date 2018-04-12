<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo - PHP y SQL</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/master.css">
    <link rel="shortcut icon" href="./assets/favicon.png" />
</head>
<body>
    
    <div class="container">

        <div class="jumbotron">
            <h1>Demo PHP - SQL</h1>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" colspan="3">Carreras del Tecnológico de Cancún</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include "./partials/table.php" ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="./bdd/add.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="career" class="form-control" placeholder="Añadir nueva" aria-label="Añadir nueva" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="submit">
                                    <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src="./assets/main.js"></script>


</body>
</html>