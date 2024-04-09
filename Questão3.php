<?php

//TODO: A
function proximoElementoA($sequencia) {
    $ultimoElemento = end($sequencia);
    return $ultimoElemento + 2;
}

$sequenciaA = array(1, 3, 5, 7);
echo "A sequência parece seguir números ímpares em ordem crescente, dessa forma, o próximo elemento da sequência a) é: " . proximoElementoA($sequenciaA) . PHP_EOL;

//TODO: B

function proximoElementoB($sequencia) {
    $ultimoElemento = end($sequencia);
    return $ultimoElemento * 2;
}

$sequenciaB = array(2, 4, 8, 16, 32, 64);
echo "A sequência parece ser formada pela multiplicação por 2 de cada número anterior, dessa forma, o próximo elemento da sequência b) é: " . proximoElementoB($sequenciaB) . PHP_EOL;

//TODO: C

function proximoElementoC($sequencia) {
    $ultimoElemento = end($sequencia);
    return $ultimoElemento + (count($sequencia) - 1) * 2 + 1;
}

$sequenciaC = array(0, 1, 4, 9, 16, 25, 36);
echo "A sequência parece ser formada pelos quadrados dos números naturais em ordem crescente, dessa forma, o próximo elemento da sequência c) é: " . proximoElementoC($sequenciaC) . PHP_EOL;


//TODO: D

$sequencia = [4, 16, 36, 64];

function proximoElemento() {
    global $sequencia; 
    $ultimoElemento = end($sequencia); 
    $proximoElemento = pow(sqrt($ultimoElemento) + 2, 2); 
    return $proximoElemento;
}


echo "A sequência parece ser formada pelos quadrados dos números pares em ordem crescente, dessa forma, o próximo elemento na sequência d) é: " . proximoElemento() . PHP_EOL;

//TODO: E
function proximoElementoE($sequencia) {
    $penultimoElemento = $sequencia[count($sequencia) - 2];
    $ultimoElemento = end($sequencia);
    return $penultimoElemento + $ultimoElemento;
}

$sequenciaE = array(1, 1, 2, 3, 5, 8);
echo "A sequência parece ser formada pela soma dos dois números anteriores da sequência de Fibonacci, dessa forma, o próximo elemento da sequência e) é: " . proximoElementoE($sequenciaE) . PHP_EOL;

//TODO: F
echo "O padrão dessa alternativa não parece ser calculavel, e sim uma logica que segue cada numero começado com a letra D, dessa forma, o próximo número da sequência f) é: 200(duzentos)". PHP_EOL;
