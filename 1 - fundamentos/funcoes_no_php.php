<?php
// Funções no PHP

// Funções são blocos de código que podem ser executados em qualquer parte do código
// Elas podem receber parâmetros e retornar valores

// Função sem parâmetros
function exibir_mensagem() {
    echo "Olá, mundo!";
}

exibir_mensagem(); // Resultado: Olá, mundo!

// Função com parâmetros
function exibir_nome($nome) {
    echo "Olá, $nome!";
}

exibir_nome("João"); // Resultado: Olá, João!

// Função com retorno
function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(2, 3);
echo $resultado; // Resultado: 5

// Função com valor padrão
function exibir_numero($numero = 0) {
    echo $numero;
}

exibir_numero(); // Resultado: 0

// Funções nativas do PHP
// https://www.php.net/manual/pt_BR/funcref.php

// Função para formatar datas

date_default_timezone_set("America/Fortaleza"); // Define o fuso horário

$data_atual = date("d/m/Y H:i:s"); // Formata a data e hora atuais
echo $data_atual; // Resultado: 05/07/2024 20:30:45

$tempo = time(); // Retorna o timestamp atual
echo $tempo; // Resultado: 1734503445

$tempo = strtotime("2024-07-05 20:30:45"); // Converte uma string em timestamp
echo $tempo; // Resultado: 1734503445

// Função para remover espaços em branco
$frase = "   Olá, mundo!   ";
$frase_sem_espacos = trim($frase); // Remove espaços em branco no início e no final
echo $frase_sem_espacos; // Resultado: Olá, mundo!

// Função para contar caracteres
$frase = "Olá, mundo!";
$numero_caracteres = strlen($frase); // Conta o número de caracteres
echo $numero_caracteres; // Resultado: 11

// Função para substituir texto
$frase = "Olá, mundo!";
$frase_substituida = str_replace("mundo", "João", $frase); // Substitui "mundo" por "João"
echo $frase_substituida; // Resultado: Olá, João!

// Função para buscar texto
$frase = "Olá, mundo!";
$posicao = strpos($frase, "mundo"); // Busca a posição da palavra "mundo"
echo $posicao; // Resultado: 5

// Função para converter para maiúsculas
$nome = "João Silva";
$nome_maiusculo = strtoupper($nome); // Converte para maiúsculas
echo $nome_maiusculo; // Resultado: JOÃO SILVA

// Função para converter para minúsculas
$nome = "João Silva";
$nome_minusculo = strtolower($nome); // Converte para minúsculas
echo $nome_minusculo; // Resultado: joão silva

// Função para pegar uma substring
$frase = "Olá, mundo!";
$substring = substr($frase, 5, 5); // Pega a substring a partir da posição 5 com 5 caracteres
echo $substring; // Resultado: mundo

// Explode e implode
$nomes = "João, Maria, Pedro";
$array_nomes = explode(", ", $nomes); // Converte a string em um array
print_r($array_nomes); // Resultado: Array ( [0] => João [1] => Maria [2] => Pedro )

$nomes = implode(", ", $array_nomes); // Converte o array em uma string
echo $nomes; // Resultado: João, Maria, Pedro

// Função para formatar números
$numero_negativo = -1234.56;

$numero_absoluto = abs($numero_negativo); // Retorna o valor absoluto
echo $numero_absoluto; // Resultado: 1234.56

// Função para arredondar números
$numero_decimal = 1234.56;

$numero_arredondado = round($numero_decimal); // Arredonda para o número inteiro mais próximo
echo $numero_arredondado; // Resultado: 1235

$numero_arredondado = round($numero_decimal, 1); // Arredonda para uma casa decimal
echo $numero_arredondado; // Resultado: 1234.6

$numero_arredondado = ceil($numero_decimal); // Arredonda para cima
echo $numero_arredondado; // Resultado: 1235

$numero_arredondado = floor($numero_decimal); // Arredonda para baixo
echo $numero_arredondado; // Resultado: 1234

// Função para gerar números aleatórios
$numero_aleatorio = rand(1, 10); // Gera um número aleatório entre 1 e 10
echo $numero_aleatorio; // Resultado: 5

// Função para retornar o maior valor
$maior_numero = max(1, 2, 3, 4, 5); // Retorna o maior valor
echo $maior_numero; // Resultado: 5

// Função para retornar o menor valor
$menor_numero = min(1, 2, 3, 4, 5); // Retorna o menor valor
echo $menor_numero; // Resultado: 1

// Função para calcular a potência
$potencia = pow(2, 3); // Calcula a potência de 2 elevado a 3
echo $potencia; // Resultado: 8

