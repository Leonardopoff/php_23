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



 /* $perfeitosMax = 4;
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


echo "Os numeros perfeitos de 1-500 são: " .$numerosPerfeitos; */

// 1h = 60m
// 1h = 3600s

$horaInicial = "16:00:00";
$horaFinal = "17:30:00";

const SEGUNDOS_DIA = 86400;


// $horaInicial = "16:00:00";
// $horaFinal = "17:30:00";


$horaInicial = "23:20:00";
$horaFinal = "00:55:00";


$arrTempoInicial = explode(":", $horaInicial);

$horaIni = $arrTempoInicial[0]; // 16
$minIni = $arrTempoInicial[1]; // 00
$horaIni = $arrTempoInicial[0]; // 23
$minIni = $arrTempoInicial[1]; // 20
$segIni = $arrTempoInicial[2]; // 00


$horaEmSegundos = ($horaIni * 3600); // efetuar calculo que transforma hora em segundos
$minutosEmSegundos = ($minIni * 60); // efetuar calculo que transforma minutos em segundos

$tempoIniEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segIni; // tudo na mesma medida.
// 57600 segundos




$arrTempoFinal = explode(":", $horaFinal);

$horaFin = $arrTempoFinal[0]; // 17
$minFin = $arrTempoFinal[1]; // 30
$horaFin = $arrTempoFinal[0]; // 00
$minFin = $arrTempoFinal[1]; // 50
$segFin = $arrTempoFinal[2]; // 00



$horaEmSegundos = ($horaFin * 3600); // 61200   
$minutosEmSegundos = ($minFin * 60); // 1800
$horaEmSegundos = ($horaFin * 3600); // 00
$minutosEmSegundos = ($minFin * 60); // 3000





$tempoFinEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segFin;
// 63000
// 3000




function calcularTempoEmSegundos ($horaEmSegundos + $minutosEmSegundos + $segFin){

    $tempoEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segFin;

    return $tempoEmSegundos;
}


$tempoFinEmSegundos = somarOTempoEmSegundos ($horaEmSegundos + $minutosEmSegundos + $segFin);
$tempoFinEmSegundos = somarOTempoEmSegundos ($horaEmSegundos + $minutosEmSegundos + $segFin);



//  
// aqui a gente assume que comecou e terminou no mesmo dia.
$tempoDeJogo = $tempoFinEmSegundos - $tempoIniEmSegundos;
// 5400



$tempoMaximo = $tempoFinEmSegundos + $tempoIniEmSegundos; // 87000
$terminouNoOutroDia = $tempoMaximo > SEGUNDOS_DIA; // 86400 = segundos no dia


if ($terminouNoOutroDia) {
    $diff = $tempoMaximo - SEGUNDOS_DIA; // 600 diff a mais no dia, pós meia noite.
    $posMeiaNoite = $tempoFinEmSegundos - $diff; // 2400
    $tempoDeJogo = $posMeiaNoite + $tempoFinEmSegundos; // 2400 + 3000 = 5400. 5400/60 = 90.
}


$tempoDeJogoMin = $tempoDeJogo /60; // 90 MINUTOS
echo "O tempo do jogo é de: {$tempoDeJogoMin} minutos.<br>";





//Seguns, minutos e horas
$Seg


function 