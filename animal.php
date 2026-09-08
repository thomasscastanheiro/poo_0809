<?php
class Animal{
    public $nome;
    public $especie;
    public $cor;
    public $idade;
    public $peso;
    public $alimento;
    public $agua;

    public function Comer($quantidade){
        echo $this->nome.' comeu '.$quantidade.'g de '.$this->alimento;
    }

    public function Beber($quantidade){
        $this->agua += $quantidade;
    }

    public function GanharPeso($quantidade){
        $this->peso += $quantidade;
    }
}
$objAnimal = new Animal();
$objAnimal->nome = "Tatu-bola";
$objAnimal->especie = "Tolypeutes matacus";
$objAnimal->cor = "Marrom";
$objAnimal->idade = 8;
$objAnimal->peso = 1.2;
$objAnimal->alimento = "Formigas";
$objAnimal->agua = "500";
$objAnimal->Comer(150);
$objAnimal->Beber(500);
$objAnimal->GanharPeso(2);
echo '<pre> Nome:'.$objAnimal->nome.'; Espécie:'.$objAnimal->especie.'; Alimento:'.$objAnimal->alimento.'g; Água:'.$objAnimal->agua.'; Peso:'.$objAnimal->peso.'kg';
?>