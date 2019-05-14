<?php

include('config/config.php');
include('Models/Pedido.php');

class PedidoDAO{

	public function total(){

		$con = new Con();
		$stmt = $con->Conexao();

		$sql = $stmt->prepare("SELECT SUM(valor) FROM pedido");
		
		if($sql->execute()){
			return $sql->fetch(PDO::FETCH_OBJ);
		}

	}

}