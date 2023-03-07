<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Eliminar articulo</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include "../../conexion.php";
    $Id_Articulo = $_REQUEST['Id_Articulo'];

    $del = $pdo->query("Delete FROM articulo WHERE Id_Articulo=" . $Id_Articulo);
    if ($del) {
        header('location:../../listadoarticulo.php');
    } else {
        echo "<script>alert('Error al borrar.'); 
        window.location.href='../../listadoarticulo.php';
        </script>";
    }

    ?>



</body>

</html>