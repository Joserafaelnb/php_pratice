
<?php

const parada =  100;

$numero_impar = 0;

$listaNumeros = array();


for( $cont =0 ; $cont <= parada; $cont++){

  if(NumeroImpar($numero_impar)){
      $listaNumeros[] = $numero_impar;

  }
        $numero_impar++;
}



foreach ($listaNumeros as $list){
    echo "$list \n";
}


function NumeroImpar($numero_impar){


    return ($numero_impar%2 == 1) ? true : false;


}




