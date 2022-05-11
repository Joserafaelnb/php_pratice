



<?php
 
 const parada =  100;

$numero_impar = 0;
 
 for( $cont =0 ; $cont <= parada; $cont++){

    NumeroPar($numero_impar++);

 }

function NumeroPar($numero_impar){
    if($numero_impar%2 == 1 ){
        echo("$numero_impar \n");
     
         }
}


