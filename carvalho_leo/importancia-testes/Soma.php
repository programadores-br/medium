<?php

//cria a classe e o método
class Calculadora {
    public $valor;
    
    public function quadrado($valor) {
        return $valor * $valor;
    }
}

//cria um novo objeto Calculadora, chama a função de imprimir na tela e nela chama o método 
$calcula = new Calculadora;
echo $calcula->quadrado(4);
