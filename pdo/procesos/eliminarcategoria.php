<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Eliminar categoria</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include "../../conexion.php";
    $Id_Categoria = $_REQUEST['Id_Categoria'];

    $dele = $pdo->query("Delete FROM categoria WHERE Id_Categoria=" . $Id_Categoria);
    if ($dele) {
        header('location:../../listadoadministrador.php');
    } else {
        echo "error";
    }

    ?>



</body>

</html>