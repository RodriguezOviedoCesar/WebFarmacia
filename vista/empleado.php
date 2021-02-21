<?php

require_once '../controlador/select.php';

$doctor = new Select('empleado');
$datos = array('idempleado','idtipoestado', 'idcargoempleado','dni','nombres','direccion','telefono');
$parametros = array('ID','Estado','Cargo','DNI','Nombre', 'Direccion', 'Telefono');
$doctor->Select1('empleado',$datos , $parametros);

?>
