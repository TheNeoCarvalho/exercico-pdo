<?php

include('config/config.php');
include('Models/Usuario.php');

class usuarioDAO{


	public function all(){
		
		$con = new Con();
		$stmt = $con->Conexao();

		$sql = $stmt->prepare("SELECT * FROM usuarios");
		
		if($sql->execute()){
			while($rs = $sql->fetch(PDO::FETCH_OBJ)){
				echo "
				<tr>
					<td>".$rs->id."</td>
					<td>".$rs->nome."</td>
					<td>".$rs->email."</td>
				</tr>";
			}

		}

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