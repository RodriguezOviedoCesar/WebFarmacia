<?php

require '../modelo/conexion.php';

$errors = array();

$sql = "SELECT * FROM doctor";

$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../otros/imagenes/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../otros/iconos/css/all.css">
    <link rel="stylesheet" href="../otros/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href="../otros/css/doctores.css">
</head>

<body >
    <div id="contenedor">
        <div id="contenedordoctor">
            <div id="img">
                <img src="../otros/imagenes/logo.png" alt="logo" title="logo">
            </div>
            <table id="tabledoctor" class="table table-xl" style="size: 4;">
                <tr class="table-dark">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>ESPECIALIDAD</th>
                    <th>COLEGIADO</th>
                    <th>CARGO</th>
                </tr>

                <?php

                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($doctores = $result->fetch_assoc()) {
                ?>

                            <tr style="overflow-y:scroll;">
                                <td><?php echo $doctores['iddoctor'] ?></td>
                                <td><?php echo $doctores['Nombre'] ?></td>
                                <td><?php echo $doctores['Especialidad'] ?></td>
                                <td>CMP: <?php echo $doctores['ncolegiado'] ?></td>
                                <td><?php echo $doctores['Cargo'] ?></td>
                                <td style="border: none;">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        <a href="../controlador/borrar.php?iddoctor=<?php 
                                            echo $doctores ['iddoctor']
                                        ?>">
                                            <button class="btn btn-danger me-md-2" type="button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                                <td style="border:none">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                        <a href="">
                                            <button class="btn btn-warning me-md-2" type="button">
                                                <i class="fas fa-user-edit"></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                <?php
                        }
                    } else {
                        $errors[] = "No hay registros pendientes";
                    }
                } else {
                    $errors[] = "Lo sentimos intentalo mas tarde";
                }


                if (count($errors) > 0) {
                    echo "<div class  = 'errores'>";
                    foreach ($error as $errors) {
                        echo "El error es " . $error . " nro de error " . $errors;
                    }
                    echo "</div>";
                }
                ?>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-right: 150px;">
                <a href="">
                    <button class="btn btn-success me-md-2" type="button">
                        <span>Agregar
                            <i class="fas fa-user-plus"></i>
                        </span>
                    </button>
                </a>
                <a href="../index.php">
                    <button class="btn btn-primary" type="button">
                        <span>Regresar
                            <i class="fas fa-arrow-circle-left"></i>
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>

<head>
    <script type="text/javascript" src="../otros/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../otros/bootstrap/js/bootstrap.min.js"></script>
</head>

</html>