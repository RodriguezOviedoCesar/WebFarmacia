<?php


require_once '../model/select.php';

$producto = new Select('producto');
$datos = array('idproducto','nomprod', 'fechahoravenc','stock','presentacion','concentracion',
'formafarmaceutica','registrosanitario','precionuit');
$parametros = array('ID','Nombre','Vence','Stock','Presentación', 'Concentración', 'Comprimido','Registro',
'Precio');
$producto->Select1('producto',$datos , $parametros);


?>