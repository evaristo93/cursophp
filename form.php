<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>&nbsp;</p>
<form name="form1" method="POST" action="calculadora.php">
    <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1" >
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Módulo</option>
        </select>
    </p>
    <p>
        <input type="submit" name="button" value="Enviar" onclick="prueba">
    </p>
</form>
<!--form name="form1" method="post" action="calculadora.php">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form-->
<p>&nbsp;</p>


<?php
    if(isset($_POST["button"])){
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];

        if(strcasecmp("Suma",$operacion)){
            echo "El resultado es: " . ($numero1+$numero2);
        }

        if(strcasecmp("Resta",$operacion)){
            echo "El resultado es: " . ($numero1*$numero2);
        }
    }
?>

</body>
</html>