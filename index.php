	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>PHP-PDO</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">

				
			
			<?php
				//error_reporting(0);
				require('config/config.php');
				$soma = 0;
				$media = 0;
				$menor = 0;
				$sql = "SELECT Valor FROM pedido";
				$query = mysqli_query($con, $sql);
				while($v = mysqli_fetch_array($query)){
					if($v['Valor'] > $menor){
						$menor = $v['Valor'];
					}					
				}


				//echo "Valor total dos pedidos: $soma";	
				echo "Média dos pedidos: $menor";	



			?>
			</body>
			</html>


