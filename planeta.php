<?php
class Planeta{
    public $nome;
    public $tipo;
    public $temperatura;
    public $gravidade;
    public $luas;
    public $distanciaSol;
    public $velocidade;

    public function AumentarTemperatura($graus){
        $this->temperatura += $graus;
    }

    public function DiminuirTemperatura($graus){
        $this->temperatura -= $graus;
    }

    public function AlterarVelocidade($valor){
        $this->velocidade = $valor;
    }
}
$objPlaneta = new Planeta();
$objPlaneta->nome = "Netuno";
$objPlaneta->tipo = "Gigante de gelo";
$objPlaneta->temperatura = -200;
$objPlaneta->gravidade = 11.15;
$objPlaneta->luas = 14;
$objPlaneta->distanciaSol = 30.1;
$objPlaneta->velocidade = 5.43;
$objPlaneta->AumentarTemperatura(5);
$objPlaneta->DiminuirTemperatura(3);
$objPlaneta->AlterarVelocidade(4);
echo '<pre>Nome:'.$objPlaneta->nome.'; Tipo:'.$objPlaneta->tipo.'; Temperatura Final:'.$objPlaneta->temperatura.'°C; Gravidade:'.$objPlaneta->gravidade.'m/s²; Quantidade de Luas:'.$objPlaneta->luas;
?>