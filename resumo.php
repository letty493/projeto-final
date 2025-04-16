<html>
<meta charset=UTF-8>
	<center>
		<h1> Resumo das inscrições: </h1>
		<br>
	</center>
</html>
<?php
	$consulta = mysql_query("select * from castracao.dono",$conexao);
	while($_GET = mysql_fetch_array($consulta)){
	echo "<br>ID: ".$_GET['id'];
	echo "<br>Nome: ".$_GET['nome'];
	echo "<br>CPF: ".$_GET['cpf'];
	echo "<br>Celular: ".$_GET['celular'];
	echo "<br>Email: ".$_GET['email'];
	echo "<br>"
	}
	$consulta = mysql_query("select * from castracao.endereco",$conexao);
	while($_GET = mysql_fetch_array($consulta)){
	echo "<br>ID: ".$_GET['id'];
	echo "<br>Rua: ".$_GET['rua'];
	echo "<br>Número: ".$_GET['numero'];
	echo "<br>Bairro: ".$_GET['bairro'];
	echo "<br>Cidade: ".$_GET['cidade'];
	echo "<br>Estado: ".$_GET['estado'];
	echo "<br>CEP: ".$_GET['cep'];
	echo "<br>"
	}
	$consulta = mysql_query("select * from castracao.pet",$conexao);
	while($_GET = mysql_fetch_array($consulta)){
	echo "<br>ID: ".$_GET['id'];
	echo "<br>Nome: ".$_GET['nome'];
	echo "<br>Espécie: ".$_GET['especie'];
	echo "<br>Idade: ".$_GET['idade'];
	echo "<br>Sexo: ".$_GET['sexo'];
	echo "<br>Raça: ".$_GET['raca'];
	echo "<br>Peso: ".$_GET['peso'];
	echo "<br>É vacinado: ".$_GET['vacinado'];
	echo "<br>Data da vacina: ".$_GET['data'];
	echo "<br>"
	}
	mysql_close($conexao);
?>
