<?php

$nome = "   João Silva   ";
$nome_limpo = trim($nome); // Remove espaços em branco
$nome_maiusculo = strtoupper($nome_limpo); // Converte para maiúsculas
echo $nome_maiusculo; // Resultado: JOÃO SILVA

$data_atual = date("d/m/Y H:i:s"); // Formata a data e hora atuais
echo $data_atual; // Resultado: 05/07/2024 20:30:45