<?php

class Pedido {


private $valor;
private $usuario;

	public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
        return $this;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    }


}


?>