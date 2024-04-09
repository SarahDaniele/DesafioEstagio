<?php

$string = "Sarah";

function inverterString($str) {
    $invertedString = "";
    
   
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $invertedString .= $str[$i];
    }
    
    return $invertedString; 
}

echo "String original: " . $string . PHP_EOL;
echo "String invertida: " . inverterString($string);
