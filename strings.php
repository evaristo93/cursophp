<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$variable1="oso";
$variable2="CASA";


$resultado=strcasecmp ($variable1,$variable2); //devuelve 1 si no son iguales, devuelve 0 si son iguales
    if($resultado){
        echo "no coinciden";
    }else{
        echo "coinciden";
    }

?>
    
</body>
</html>