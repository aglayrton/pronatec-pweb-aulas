<?php
// Operadores com PHP
// https://www.php.net/manual/pt_BR/language.operators.php

// Aritméticos
// https://www.php.net/manual/pt_BR/language.operators.arithmetic.php

// Adição
echo 1 + 1; // Resultado: 2

// Subtração
echo 2 - 1; // Resultado: 1

// Multiplicação
echo 2 * 2; // Resultado: 4

// Divisão
echo 4 / 2; // Resultado: 2

// Módulo (resto da divisão)
echo 4 % 2; // Resultado: 0

// Exponenciação
echo 2 ** 3; // Resultado: 8

// Atribuição
// https://www.php.net/manual/pt_BR/language.operators.assignment.php

$variavel = 1;
$variavel += 1;
echo $variavel; // Resultado: 2

$variavel -= 1;
echo $variavel; // Resultado: 1

$variavel *= 2;
echo $variavel; // Resultado: 2

$variavel /= 2;
echo $variavel; // Resultado: 1

$variavel %= 1;
echo $variavel; // Resultado: 0

$variavel **= 2;
echo $variavel; // Resultado: 0

$variavel .= "1";
echo $variavel; // Resultado: "01"

// Comparação
// https://www.php.net/manual/pt_BR/language.operators.comparison.php

// Igual
echo 1 == 1; // Resultado: true
echo 1 == "1"; // Resultado: true

// Idêntico
echo 1 === 1; // Resultado: true
echo 1 === "1"; // Resultado: false

// Diferente
echo 1 != 2; // Resultado: true

// Não idêntico
echo 1 !== 2; // Resultado: true

// Maior que
echo 1 > 2; // Resultado: false

// Menor que
echo 1 < 2; // Resultado: true

// Maior ou igual que
echo 1 >= 2; // Resultado: true

// Menor ou igual que
echo 1 <= 2; // Resultado: true

// Nave espacial (spaceship) - Retorna -1, 0 ou 1 se o valor da esquerda for respectivamente menor, igual ou maior que o valor da direita
echo 1 <=> 2; // Resultado: -1

// Lógicos
// https://www.php.net/manual/pt_BR/language.operators.logical.php

// E (and) - Retorna true se ambos os operandos forem verdadeiros
echo true && true; // Resultado: true

// OU (or) - Retorna true se um dos operandos for verdadeiro
echo true || false; // Resultado: true

// Negação (not) - Retorna true se o operando for falso
echo !false; // Resultado: true

// XOR - Retorna true se um ou outro operando for verdadeiro, mas não ambos
echo true xor false; // Resultado: true
