<?php
class Bicicleta{
    public $marca;
    public $modelo;
    public $cor;
    public $velocidade;
    public $marchas;
    public $marchaAtual;
    public $roda;

    public function Acelerar($valor){
        $this->velocidade += $valor;
    }

    public function Frear($valor){
        $this->velocidade -= $valor;
    }

    public function TrocarMarcha($marcha){
        $this->marchaAtual = $marcha;
    }
}
$objBicicleta = new Bicicleta();
$objBicicleta->marca = "Aspen";
$objBicicleta->modelo = "Caloi Aspen Aro 29";
$objBicicleta->cor = "Azul";
$objBicicleta->velocidade = 15;
$objBicicleta->marchas = 24;
$objBicicleta->marchaAtual = 5;
$objBicicleta->roda = 29;
$objBicicleta->Acelerar(20);
$objBicicleta->Acelerar(10);
$objBicicleta->Frear(5);
$objBicicleta->TrocarMarcha(4);
echo '<pre>Velocidade Final:'.$objBicicleta->velocidade.'km/h; Marcha Atual:'.$objBicicleta->marchaAtual;
?>