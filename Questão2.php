<?php

function verifyNumberInFibonacci(int $num): string
{
    $fibonacci = getFibonacci($num);

    return in_array($num, $fibonacci) 
        ? "O número $num pertence à sequência de Fibonacci."
        :"O número $num não pertence à sequência de Fibonacci."
    ;
}

function getFibonacci(int $num): array
{
    $fibonacci = array(0, 1);
    while ($fibonacci[count($fibonacci) - 1] <= $num) {
        $next = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
        $fibonacci[] = $next;
    }

    return $fibonacci;
}

echo verifyNumberInFibonacci(22);
