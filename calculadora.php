<?php

    if (isset ($_POST["button"])){

        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];

        calcular($operacion);

    }

    function calcular($calcular){
        

        if(!strcmp("Suma",$calcular)){

            global $numero1;
            global $numero2;

            echo "el resultado es: " . ($numero1+$numero2);
        }

        if(!strcmp("Resta",$calcular)){

            global $numero1;
            global $numero2;

            echo "el resultado es: " . ($numero1-$numero2);
        }

        if(!strcmp("Multiplicación",$calcular)){

            global $numero1;
            global $numero2;

            echo "el resultado es: " . ($numero1*$numero2);
        }

        if(!strcmp("División",$calcular)){

            global $numero1;
            global $numero2;

            echo "el resultado es: " . ($numero1/$numero2);
        }
        
        if(!strcmp("Módulo",$calcular)){

            global $numero1;
            global $numero2;
            
            echo "el resultado es: " . ($numero1%$numero2);
        }

    }

?>
