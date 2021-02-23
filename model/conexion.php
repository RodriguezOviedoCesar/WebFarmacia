<?php

$mysqli = new mysqli('localhost','root','','farmacia');

    try{
        return $mysqli;
    }catch(Exception $e){
        echo "Excepcion capturada ". $e->getMessage() ."\n";
    }
?>  