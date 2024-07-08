<?php
// Arrays no PHP

// Array indexado ou sequencial - cada elemento é acessado por um índice numérico começando em 0 (zero)
$alunos = array("João", "Maria", "José", "Ana", "Pedro"); // Lista de alunos

// Exibe o conteúdo do array
echo $alunos[0]; // Resultado: João
echo $alunos[1]; // Resultado: Maria
echo $alunos[2]; // Resultado: José
echo $alunos[3]; // Resultado: Ana
echo $alunos[4]; // Resultado: Pedro

// Array associativo - cada elemento é acessado por uma chave (não necessariamente numérica)
$aluno = array(
    "nome" => "João", // Chave "nome" com valor "João"
    "idade" => 16, // Chave "idade" com valor 16
    "nota" => 8.5 // Chave "nota" com valor 8.5
);

// Exibe o conteúdo do array
echo $aluno["nome"]; // Resultado: João
echo $aluno["idade"]; // Resultado: 16
echo $aluno["nota"]; // Resultado: 8.5

// Array multidimensional - array que contém um ou mais arrays como elementos (arrays dentro de arrays)
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matriz[1][2]; // Resultado: 6

$alunos = array(
    array("nome" => "João", "idade" => 16, "nota" => 8.5), // Primeiro aluno
    array("nome" => "Maria", "idade" => 17, "nota" => 9.0), // Segundo aluno
    array("nome" => "José", "idade" => 18, "nota" => 7.5) // Terceiro aluno
);

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . ", Nota: " . $aluno["nota"] . "\n";
}
/*
    Resultado:
    Nome: João, Nota: 8.5
    Nome: Maria, Nota: 9.0
    Nome: José, Nota: 7.5
*/

// Funções para manipulação de arrays
$alunos = array("João", "Maria", "José", "Ana", "Pedro"); // Lista de alunos

// Conta o número de elementos do array
echo count($alunos); // Resultado: 5

// Adiciona um elemento no final do array
array_push($alunos, "Mariana");

// Remove o último elemento do array
array_pop($alunos);

// Adiciona um elemento no início do array
array_unshift($alunos, "Carlos");

// Remove o primeiro elemento do array
array_shift($alunos);

// Ordena os elementos do array em ordem alfabética
sort($alunos);

// Inverte a ordem dos elementos do array
array_reverse($alunos);

// Verifica se um elemento existe no array
if (in_array("Maria", $alunos)) {
    echo "Maria está na lista de alunos.";
} else {
    echo "Maria não está na lista de alunos.";
}

// Remove um elemento do array pelo seu valor
unset($alunos[1]);

// Remove um elemento do array pela sua chave
unset($alunos["Maria"]);

// Exibe o conteúdo do array
print_r($alunos);

// Exibe o conteúdo do array de forma legível
var_dump($alunos);

// Exemplo de uso de arrays em um laço de repetição
foreach ($alunos as $aluno) {
    echo "Aluno: $aluno\n";
}

// Criando arrays de diferentes formas
// Usando a sintaxe de array curto (a partir do PHP 5.4)
$alunos = ["João", "Maria", "José", "Ana", "Pedro"];

// Usando a função array()
$alunos = array("João", "Maria", "José", "Ana", "Pedro");

// Criando um array associativo (chave => valor)
$aluno = ["nome" => "João", "idade" => 16, "cidade" => "Fortaleza"];

// Acessando e modificando elementos de um array
$alunos = ["João", "Maria", "José", "Ana", "Pedro"];
echo $alunos[0]; // Resultado: João
$alunos[1] = "Mariana"; // Altera o valor do segundo elemento
echo $alunos[1]; // Resultado: Mariana