<?php

class Select{
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
        
        try{
            $sql = "SELECT * FROM $data ";
            $result = $mysqli->query($sql);
            // $id = $result->fetch_assoc();            
            // $fila = $result->fetch_assoc();
            // echo "</div>";
            // for($i =0; $i<$result->fetch_assoc();$i++){ Esto lo podemos tomar en cuenta para la operación
            //     echo $i;
            // }
            if($result){
                if($result->num_rows>0){
                    while($id = $result->fetch_assoc()){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../otros/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <tr class="table-dark">
            <?php
                 foreach($parametros as $parametro){
                    for($i = 0; $i<= $result->fetch_assoc();$i++){
                        echo "<th>";
                        echo $parametro;
                        echo "</th>";
                    }
                }
            
            ?>
        </tr>
            <?php
             for($i = 0; $i <= $result->fetch_assoc(); $i++){
                 echo"<tr>";
                 foreach($datos as $dat){
                         echo "<td>";
                         echo $id[$dat];
                         echo "</td>";
                 }
                 echo"</tr>";
             }
            ?>
    </table>
</body>
<head>
    <script type="text/javascript" src="../otros/bootstrap/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../otros/bootstrap/js/bootstrap.min.js"></script>
</head>
</html>


<?php
                            
                        
                    }

                }
            }
        }catch(Exception $errors){
            echo "Excepcion número ".$errors;
        }
    }

}




?>