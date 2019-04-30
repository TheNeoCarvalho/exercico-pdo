<?php

class Con{
	public function Conexao() {

		try{
			$pdo = new PDO("mysql:host=localhost;dbname=pdo","root","");
		}catch(PDOException $err){
			echo $err;
		}
		return $pdo;
	}
}
?>