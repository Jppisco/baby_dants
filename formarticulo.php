<!DOCTYPE html>
<html>

<head>
    <title>Formulario Articulo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include 'navbar.php';
    include 'conexion2.php';
    ?>

    <div class="container">

        <p></p>

        <h1>Registro de Articulo</h1>

        <p></p>

        <form action="img/guardarimg.php" method="POST" enctype="multipart/form-data">
            <p>
                <label for="categoria">Categoria</label>

                <select id="categoria" class="form-control" name="categoria">
                    <option value="">Seleccione categoria</option>
                    <?php
                    $query_cate = mysqli_query($connection, "SELECT * FROM categoria");
                    while ($cate = mysqli_fetch_assoc($query_cate)) { ?>
                        <option value="<?php echo $cate['Id_Categoria'] ?>"><?php echo $cate['Nombre'] ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>Articulo: <input class="form-control" type="text" name="Articulo" size="10"></p>
            <p>Precio Entrada: <input class="form-control" type="number" name="Precio_Entrada" size="10"></p>
            <p>Precio Salida: <input class="form-control" type="text" name="Precio_Salida"> </p>
            <p>
                <label for="proveedor">Proveedor</label>

                <select id="proveedor" class="form-control" name="proveedor">
                    <option value="">Seleccione Proveedor</option>
                    <?php
                    $query_prove = mysqli_query($connection, "SELECT * FROM proveedor");
                    while ($prove = mysqli_fetch_assoc($query_prove)) { ?>
                        <option value="<?php echo $prove['Id_Proveedor'] ?>"><?php echo $prove['Empresa'] ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>Stock: <input class="form-control" type="numbers" name="Stock" size="10"> </p>
            <p>Descripcion: <input class="form-control" type="text" name="Descripcion" size="10"> </p>
            <p>Imagen: <input class="form-control" type="file" name="Imagen" size="10"> </p>



            <input type="submit" name="x" value="Registrar">
            <br>
        </form>
    </div>


</body>

</html>