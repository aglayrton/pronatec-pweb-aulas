<?php
// Upcast de int para float
$inteiro = 10;
$float = $inteiro + 0.5; // O resultado é um float: 10.5

// Downcast de float para int
$float = 10.75;
$inteiro = (int) $float; // O resultado é um inteiro: 10

// Outro exemplo de downcast, usando a função intval()
$inteiro = intval($float); // O resultado também é um inteiro: 10

// PHP também realiza conversão automática em operações matemáticas
$soma = 3 + "15 dias"; // O resultado é um inteiro: 18
$subtracao = "10.5" - 0.5; // O resultado é um float: 10.0

echo gettype($float); // Mostra "double", que é o nome do tipo float em PHP
echo gettype($inteiro); // Mostra "integer"
?>