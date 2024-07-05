<?php
// Tipo bool
$verdadeiro = true;
$falso = false;

// Tipo int
$numeroInteiro = 42;

// Tipo float
$numeroDecimal = 3.14;

// Tipo string
$texto = "Olá, mundo!";

// Tipo array
$arrayNumeros = array(1, 2, 3);
$arrayAssociativo = array("chave1" => "valor1", "chave2" => "valor2");

// Tipo object
class Carro {
    public $marca;
    public $modelo;
    
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
}
$objetoCarro = new Carro("Toyota", "Corolla");

// Tipo resource (exemplo com arquivo)
$arquivo = fopen("arquivo.txt", "r");

// Tipo NULL
$variavelNula = NULL;


?>