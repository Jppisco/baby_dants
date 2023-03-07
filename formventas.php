<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'conexion2.php';

    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h4 class="text-center">Datos del Cliente</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <form method="POST">
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">

                                    <label for="cliente">Clientes</label>
                                    <select id="cliente" class="form-control" name="cliente">
                                        <option data value="">Seleccione Cliente</option>
                                        <?php
                                        $query_clien = mysqli_query($connection, "SELECT * FROM cliente");
                                        while ($clien = mysqli_fetch_assoc($query_clien)) {


                                        ?>

                                        <option data-id="<?php echo $clien['Id_Cliente'] ?>"
                                            value="<?php echo $clien['Id_Cliente'] ?>">
                                            <?php echo $clien['Nombres'] ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input id="telefono" class="form-control" name='telefono' disabled required></input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input id="direccion" class="form-control" name='direccion' disabled required></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">

                                    <label for="articulo_select">Articulo</label>
                                    <select id="articulo_select" class="form-control" name="articulo">
                                        <option data value="">Seleccione Articulo</option>
                                        <?php
                                        $query_product = mysqli_query($connection, "SELECT * FROM articulo");
                                        while ($product = mysqli_fetch_assoc($query_product)) {


                                        ?>

                                        <option data-id="<?php echo $product['Id_Articulo'] ?>"
                                            value="<?php echo $product['Id_Articulo'] ?>">
                                            <?php echo $product['Articulo'] ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="categoria_producto">Categoria</label>
                                    <input id="categoria_producto" class="form-control" name='categoria_producto' disabled required></input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="precio_entrada">precio_entrada</label>
                                    <input id="precio_entrada" class="form-control" name='precio_entrada' disabled required></input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="precio_salida">precio_salida</label>
                                    <input id="precio_salida" class="form-control" name='precio_salida' disabled required></input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="proveedor">proveedor</label>
                                    <input id="proveedor" class="form-control" name='proveedor' disabled required></input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="stock_articulo">stock_articulo</label>
                                    <input id="stock_articulo" class="form-control" name='stock_articulo' disabled required></input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="descripcion">descripcion</label>
                                    <input id="descripcion" class="form-control" name='descripcion' disabled required></input>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>

            <input type="submit" name="x" value="Registrar">
            </form>
        </div>
    </div>

    <?php



            if (isset($_POST['x'])) {


                echo $Id_Cliente = $_POST['cliente'];
                echo $Telefono = $_POST['telefono'];
                echo $Direccion = $_POST['direccion'];





                // $query_insert = mysqli_query($connection, "INSERT INTO detalle_venta values ('', '$Id_Cliente', '$Telefono', '$Direccion', '$Producto', '$Precio  ', '$Cantidad', '$Total')");
                // if ($query_insert) {
                //     echo "<script>alert('Se almaceno correctamente');
                //     window.location.href='formventas.php';</script>";
                // } else {
                //     echo "<script>alert('No se almaceno correctamente');
                //     window.location.href='formventas.php';</script>";
                // }
            }
            ?>
    <script src="./seleccionardatos.js">
    


    </script>
</body>

</html>