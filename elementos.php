<?php
class ElementoQuimico{
    public $nome;
    public $simbolo;
    public $numeroAtomico;
    public $massaAtomica;
    public $grupo;
    public $periodo;
    public $estadoFisico;
    public $quantidade;

    public function AumentarQuantidade($valor){
        $this->quantidade += $valor;
    }

    public function DiminuirQuantidade($valor){
        $this->quantidade -= $valor;
    }

    public function MostrarNome(){
        echo 'Nome: '.$this->nome.';';
    }

    public function MostrarSimbolo(){
        echo 'Símbolo: '.$this->simbolo.';';
    }
}
$objElementoQuimico = new ElementoQuimico();
$objElementoQuimico->nome = "Tório";
$objElementoQuimico->simbolo = "Th";
$objElementoQuimico->numeroAtomico = 90;
$objElementoQuimico->massaAtomica = 232.038;
$objElementoQuimico->grupo = 3;
$objElementoQuimico->periodo = 7;
$objElementoQuimico->estadoFisico = "sólido";
$objElementoQuimico->quantidade = 1;
$objElementoQuimico->AumentarQuantidade(3);
$objElementoQuimico->DiminuirQuantidade(1);
$objElementoQuimico->MostrarNome();
echo '<br>';
$objElementoQuimico->MostrarSimbolo();
echo '<pre>Número Atômico:'.$objElementoQuimico->numeroAtomico.'; Estado Físico:'.$objElementoQuimico->estadoFisico.'; Quantidade Final:'.$objElementoQuimico->quantidade;
?>