<?php

	class Data{

    public $dia;
    public $mes;
    public $ano;

    
    public function getData(){
        return"{$this->dia} / {$this->mes} / {$this->ano}";
    }

    public function __toString(){
        return $this->getData();
    }

}