<?php
// Estruturas de controle em PHP

// Condicional if
$idade = 14; // Idade do aluno

if ($idade >= 18) { // Se a idade do aluno for maior ou igual a 18 anos
    echo "Você já pode tirar a carteira de motorista."; // Exibe uma mensagem para o aluno
}
// Resultado:
// (nenhuma saída, pois a condição não foi atendida)

// Condicional if...else
$notaFinal = 8.5; // Nota final do aluno
$mediaAprovacao = 7.0; // Média para aprovação

if ($notaFinal >= $mediaAprovacao) { // Se a nota final for maior ou igual à média de aprovação
    echo "Parabéns! Você foi aprovado(a)."; // Exibe uma mensagem de aprovação
} else { // Senão (se a nota final for menor que a média de aprovação)
    echo "Infelizmente, você não atingiu a média para aprovação."; // Exibe uma mensagem de reprovação
}
// Resultado:
// Parabéns! Você foi aprovado(a).

// Condicional if...elseif...else
$notaFinal = 5.0; // Nota final do aluno
$mediaAprovacao = 7.0; // Média para aprovação
$mediaRecuperacao = 5.0; // Média para recuperação

if ($notaFinal >= $mediaAprovacao) { // Se a nota final for maior ou igual à média de aprovação
    echo "Parabéns! Você foi aprovado(a)."; // Exibe uma mensagem de aprovação
} elseif ($notaFinal >= $mediaRecuperacao) { // Senão, se a nota final for maior ou igual à média de recuperação
    echo "Você está em recuperação."; // Exibe uma mensagem de recuperação
} else { // Senão (se a nota final for menor que a média de recuperação)
    echo "Infelizmente, você foi reprovado(a)."; // Exibe uma mensagem de reprovação
}
// Resultado:
// Você está em recuperação.

// Condicional switch...case
$diaSemana = "terça"; // Dia da semana

switch ($diaSemana) { // Verifica o valor da variável $diaSemana e executa o bloco de código correspondente
    case "segunda":
        echo "Hoje tem aula de Matemática e Português.";
        break;
    case "terça":
        echo "Hoje tem aula de Ciências e História.";
        break;
    case "quarta":
        echo "Hoje tem aula de Educação Física e Artes.";
        break;
    // ...
    default: // Caso nenhum dos casos anteriores seja verdadeiro
        echo "Hoje não tem aula.";
}
// Resultado:
// Hoje tem aula de Ciências e História.

// Laço de repetição foreach
$materiais = ["Caderno", "Lápis", "Borracha", "Régua", "Mochila"]; // Lista de materiais escolares

foreach ($materiais as $material) {
    echo "Você precisa de um(a) $material.\n"; // Exibe uma mensagem para cada item da lista de materiais
    // O valor de cada item é armazenado na variável $material durante a execução do laço de repetição
    // O laço de repetição termina quando todos os itens da lista de materiais forem percorridos e processados
    // \n é um caractere de escape que representa uma quebra de linha (newline) no texto.
}
// Resultado:
// Você precisa de um(a) Caderno.
// Você precisa de um(a) Lápis.
// Você precisa de um(a) Borracha.
// Você precisa de um(a) Régua.
// Você precisa de um(a) Mochila.

// Laço de repetição for
$minutosRecreio = 15; // Minutos para o recreio

for ($i = $minutosRecreio; $i > 0; $i--) { // Inicialização; Condição; Incremento ou decremento do contador
    echo "Faltam $i minutos para o recreio!\n"; // Exibe a mensagem com o tempo restante
}
echo "Recreio!";
// Resultado:
// Faltam 15 minutos para o recreio!
// ... (14, 13, 12, ..., 1)
// Faltam 1 minutos para o recreio!
// Recreio!

// Laço de repetição while
$duracaoAula = 60; // Duração da aula em minutos

while ($duracaoAula > 0) { // Enquanto a duração da aula for maior que zero
    echo "Faltam $duracaoAula minutos para o fim da aula!\n"; // Exibe a mensagem com o tempo restante
    $duracaoAula--; // Decrementa o contador de minutos restantes
}
echo "Fim da aula!";
// Resultado:
// Faltam 60 minutos para o fim da aula!
// ... (59, 58, 57, ..., 1)
// Faltam 1 minutos para o fim da aula!
// Fim da aula!

// Laço de repetição do...while
$duracaoIntervalo = 30; // Duração do intervalo em minutos

do {
    echo "Faltam $duracaoIntervalo minutos para o fim do intervalo!\n"; // Exibe a mensagem com o tempo restante
    $duracaoIntervalo--; // Decrementa o contador de minutos restantes
} while ($duracaoIntervalo > 0); // Enquanto a duração do intervalo for maior que zero
echo "Fim do intervalo!";
// Resultado:
// Faltam 30 minutos para o fim do intervalo!
// ... (29, 28, 27, ..., 1)
// Faltam 1 minutos para o fim do intervalo!
// Fim do intervalo!
