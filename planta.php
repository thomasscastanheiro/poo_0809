<?php
class Planta{
    public $nome;
    public $especie;
    public $cor;
    public $altura;
    public $idade;
    public $folhas;
    public $agua;

    public function Crescer($centimetros){
        $this->altura += $centimetros;
    }

    public function Regar($quantidade){
        $this->agua += $quantidade;
    }

    public function CriarFolhas($quantidade){
        $this->folhas += $quantidade;
    }
}
$objPlanta = new Planta();
$objPlanta->nome = "Lírio";
$objPlanta->especie = "Lilium";
$objPlanta->cor = "Branca";
$objPlanta->altura = 40;
$objPlanta->idade = 5;
$objPlanta->folhas = 50;
$objPlanta->agua = 300;
$objPlanta->Crescer(10);
$objPlanta->Regar(100);
$objPlanta->CriarFolhas(4);
echo '<pre>Nome:'.$objPlanta->nome.' ; Altura:'.$objPlanta->altura.'cm ; Água:'.$objPlanta->agua.'mL ; Quantidade de folhas:'.$objPlanta->folhas;
?>