<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="contra" id="contra"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

<?php

    /*if(isset($_POST["enviando"])){

        //Variables
        $contra=$_POST["contra"];
        $nombre=$_POST["nombre_usuario"];


        //Operador ternario

        $resultado= $nombre=="juan" && $contra=="1234" ? "Puedes ingresar" : "No puedes ingresar";

        echo $resultado;
    }*/

    if(isset($_POST["enviando"])){
        $nombre=$_POST["nombre_usuario"];
        $contraseña=$_POST["contra"];

        $resultado= $nombre=="Felipe" && $contraseña=="12345" ? "adelante" : "no entras";

        echo $resultado;
    }

?>
</body>
</html>