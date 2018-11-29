<?php

class Funcionario{

    public $departamento;
    public $salario;
    public $CPF;
    public $dataEntrada;

        public function recebeAumento(){

            $recebeAumento = $this->salario + (0.1 * $this->salario);

            return $recebeAumento;
        }

        public function calculaGanhoAnual(){

            $calculaGanhoAnual = $this->salario * 12;

            return $calculaGanhoAnual;

        }

        public function mostra(){
        return "O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->Data()} possui salário de {$this->salario}. \n";

    }

    public function __toString(){
       return $this->mostra();
    }
}
