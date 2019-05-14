<?php

include('config/config.php');
include('Models/Usuario.php');

class UsuarioDAO{

	public function all(){
		
		$con = new Con();
		$stmt = $con->Conexao();

		$sql = $stmt->prepare("SELECT * FROM usuarios");
		
		if($sql->execute()){
			while($rs = $sql->fetch(PDO::FETCH_OBJ)){
				echo "

						<h5>".$rs->id." - ".$rs->nome." - ".$rs->email."</h5>";
			}

		}

	}

	public function Deleta($id){

		$con = new Con();
		$stmt = $con->Conexao();

		$sql = $stmt->prepare("DELETE FROM usuarios WHERE id = ".$id);
		$sql->execute();

	}
	

	public function Atuliza(Usuario $usuario){

		$con = new Con();
		$stmt = $con->Conexao();

		$id = $usuario->getId();
		$nome = $usuario->getNome();
		$email = $usuario->getEmail();
		$senha = md5($usuario->getSenha());

		$sql = $stmt->prepare("UPDATE usuarios SET nome='".$nome."', email='".$email."', senha='".$senha."' WHERE id = ".$id);

		$sql->execute();
		
	}

	public function createUser(Usuario $usuario){

		$con = new Con();
		$stmt = $con->Conexao();

		$sql = $stmt->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?)");

		$nome = $usuario->getNome();
		$email = $usuario->getEmail();
		$senha = md5($usuario->getSenha());

		$sql->bindParam(1,$nome);
		$sql->bindParam(2,$email);
		$sql->bindParam(3,$senha); 

		if($sql->execute()){
			echo "<script>alert('Usuário cadastrado com sucesso!')</script>";
		}

	}


}


?>