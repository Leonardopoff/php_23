<?php
/* $par = '';
$impar = '';




 for ($numero= 50; $numero <= 100; $numero++) 
 {
    $resto = $numero % 2;
 
     if ($resto == 0){
      $par .=$numero . ", ";
     } else {
        $impar .=$numero . ", ";
     }

 }
 
 echo  "<br> Os numeros pares, são: " .$par ;
 echo "<br> Os numeros imapres, são: " .$impar;





 


  $numero = 1078;
  $divisores = 0;
  
  for($conta=2; $conta<$numero; $conta++)
   if($numero % $conta == 0){
    echo "Multiplo de $conta<br />";
    $divisores++;
   }
  
  if($divisores)  echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
  else    echo "É primo!";
  
 
*/



/*
$primos= '';
$nprimos= '';
for($i = 1; $i <= 100; $i++)
{
    // variavel que armazena o número de divisores de um número
    $divisores = 0;
     
    // recupera o nº atual no loop e, a partir dele, o decrementa até chegar a 1 
    for($j = $i; $j >= 1; $j--)
    {
        // se o número do 1º loop for divisível por algum número anterior a ele, ou seja, resto 0 
        // incrementa o número de divisores
        if (($i % $j) == 0) {
            $divisores++;
        }
    }
     
    // se o número do loop principal tiver exatamente 2 divisores
    // (lembre-se, nº primos tem somente 2 divisores: 1 e ele próprio), exibe o nº primo
    if ($divisores == 2)
    {
        
        $primos .=$i . ", ";
    }else 
    {
        
        $nprimos .=$i . ", ";
    }
}
    echo '<br>Os numeros primos, são: ' .$primos ;
    echo '<br>';
    echo '<br>Os numeros que NÂO SÂO PRIMOS, são: ' .$nprimos ;
*/

//$pedra = 1;
//$papel =  2;
//$tesoura = 3;

// primos divididos por eles mesmo.

/*
$contprimos = 0;
$primosEncontrados = '';

    for ($numero = 22; $numero <= 57 ; $numero++) 
    {
        echo $numero . "<br>";

        $contDivisores = 0;

        for ($primo =1 ; $primo <= $numero; $primo++){
            $resto = ($numero % $primo);
            
            if ($resto== 0) {
                $contDivisores ++;
            }
        }

        if ($contDivisores == 2){
            $primosEncontrados .=  $numero . ", ";
            $contprimos++;

        }
        if ($contprimos == 3){
            break;
        } 
    }
     echo "Os numeros primos encontrdos são : " .$primosEncontrados;

     */ 


     /*
     $numero = 6; # capturou numero passado via POST
$divisores = array();
$soma = 0;

for ($i=1; $i < $numero; $i++) {
  if($numero % $i == 0){
    $soma += $i;
    array_push($divisores, $i);
  }

}

echo "Numero: $numero, Soma dos divisores: $soma <br>";

if($soma == $numero)
  echo "O número é perfeito";
else
  echo "O número não é perfeito.\nDivisores: " . implode(", ", $divisores);

*/



$perfeitosMax = 4;
$contPerfeitos = 0;
$numerosPerfeitos = "";


for  ($numero = 1; $numero <= 30; $numero++){ 

    $somaDivisores = 0;

   for ($divisor = 1; $divisor <= $numero; $divisor++)
    { 
        $resto= $numero % $divisor;

        if ( $resto == 0 ) {
            $somaDivisores += $divisor;
        }
    }

    if ($somaDivisores == $numero){
        $numerosPerfeitos .= $numero . ",";
        $contPerfeitos ++;

    }

      
    if ($contPerfeitos == $perfeitosMax) {
        break;
     }
}


echo "Os numeros perfeitos de 1-500 são: " .$numerosPerfeitos;