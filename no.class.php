<?php
class No {

    public $esquerda;
    public $direita;
    public $valor;

    public function __construct($valor = '') {
        if ( $valor != ' ' && !is_null($valor) ) {
            $this->valor = $valor;
        }
    }

}