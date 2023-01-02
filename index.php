<?php
function romano2int($romano) {
  $romano = strtoupper($romano);
  $n = 0;
  $numeros = [
    'I' => 1,
    'v' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
  ];

$letras = strlen($romano);

for($i=0;$i<$letras;$i++) {
      $atual = $romano[$i];
      //Para PH 7.4+
      $prox = $romano[$i+1] ?? false;
      
    if($prox && $numeros[$atual] < $numeros[$prox]) {
      $n  -= $numeros[$atual];
    } else {
      $n += $numeros[$atual];
    }
  }

  return $n
}

$q = 'X';
echo  $q.' = 'romano2int('$q');