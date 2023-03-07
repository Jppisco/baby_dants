<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Eliminar administrador</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include "../../conexion.php";
    $Id_Administrador = $_REQUEST['Id_Administrador'];

    $del = $pdo->query("Delete FROM administrador WHERE Id_Administrador=" . $Id_Administrador);
    if ($del) {
        header('location:../../listadoadministrador.php');
    }

    ?>



</body>

</html>