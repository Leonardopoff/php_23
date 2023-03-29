<?php

/* 
const cpf='123456789101112';

$idade = ''; // "" ou '' é uma string


// comentario


 code here...
 verificar se o cpf ta no serasa



$idade = 'asahshash';

if (cpf == '123456789101112') {
    echo 'São iguais' ;

} else {
    echo "não sao iguais";
} 
*/

//$numero = '50' ; //testar 50 - 300000
//$nume_par = '';
//$numero_impar = '';



// echo "O numero é :" .$numero; // verificar se o numero informado é par

// $resultado = 10 / 2 ; // quociente  = 5

//$resto = $numero % 2; // resto da divisão = 0


$par = '';
$impar = '';




 for ($numero= 50; $numero <= 100; $numero++) 
 {
    $resto = $numero % 2;
 
     if ($resto == 0){
      $par .=$numero . ",";
     } else {
        $impar .=$numero . ",";
     }

 }
 
 echo  "<br> Os numeros pares, são: " .$par ;
 echo "<br> Os numeros imapres, são: " .$impar;