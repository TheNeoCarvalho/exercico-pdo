<?php

class Con{
	public function Conexao() {

		try{
			$pdo = new PDO("mysql:host=127.0.0.1;dbname=pdo","root","");
		}catch(PDOException $err){
			echo $err;
		}
		return $pdo;
	}
}
?>