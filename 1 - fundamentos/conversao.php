<?php
// Inicialmente, temos uma string e um número
$stringNumero = "10";
$numero = 5;


// Se adicionarmos a string ao número, o PHP converte a string em número automaticamente
$resultado = $stringNumero + $numero; // Resultado é 15


// O PHP também pode converter números em strings automaticamente
$stringResultado = $numero . " é um número"; // Resultado é "5 é um número"


// Vamos verificar os tipos das variáveis após as operações
echo gettype($resultado); // Mostra "integer"
echo gettype($stringResultado); // Mostra "string"

?>