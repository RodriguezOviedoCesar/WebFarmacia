<?php

class Select
{
    public string $data;
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function Select1(string $data, $datos, $parametros)
    {
        require_once '../modelo/conexion.php';
        // foreach($dato as $dat){
        //     echo $dat."<br>";
        // }
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="../otros/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="../otros/iconos/css/all.css">
        </head>

        <body>
            <table class="table">

                <tr class="table-dark">
                    <?php
                    foreach ($parametros as $parametro) {
                        for ($i = 0; $i <= 0; $i++) {
                            echo "<th>";
                            echo $parametro;
                            echo "</th>";
                        }
                    }

                    ?>
                </tr>
                <?php

                try {
                    $sql = "SELECT * FROM $data ";
                    $result = $mysqli->query($sql);
                    // $id = $result->fetch_assoc();            
                    // $fila = $result->fetch_assoc();
                    // echo "</div>";
                    // for($i =0; $i<$result->fetch_assoc();$i++){ Esto lo podemos tomar en cuenta para la operación
                    //     echo $i;
                    // }
                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($id = $result->fetch_assoc()) {
                ?>
                                <tr>
                                    <?php
                                    foreach ($datos as $dat) {

                                        echo "<td>";
                                        echo $id[$dat];
                                        echo "</td>";
                                    }
                                    ?>
                                    <td style="border: none;">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <a href="">
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
            </table>
            <?php


                            }
                        }
                    }
                } catch (Exception $errors) {
                    echo "Excepcion número " . $errors;
                }
            }
        }

            ?>
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
        </body>

        <head>
            <script type="text/javascript" src="../otros/bootstrap/jquery-3.5.1.min.js"></script>
            <script type="text/javascript" src="../otros/bootstrap/js/bootstrap.min.js"></script>
        </head>

        </html>
