<DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="content-type" content="text/html;charset=utf-8" >
            <title></title>
        </head>
        <body>
            <?php
                //Funció per a fer una suma
            ?>
            <?php
            function sumar($num1, $num2){
                $resultat_suma = $num1+ $num2;
                return $resultat_suma;
            }
            sumar($num1, $num2);
            ?>
            
            <?php
            function restar($num1, $num2){
                $resultat_resta = $num1- $num2;
                return $resultat_resta;
            }
            restar ($num1, $num2);
            ?>
        </body>
    </html>

