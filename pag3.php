<html>
<meta charset=UTF-8> 
    <center> <h1> Formulário de Cadastro para Castração </h1>
		<form method=POST>
			<h2> Informações do Animal: </h2>
			Nome: <input type="text" name="Nome"><br><br>
			Espécie: 
			<input type="radio" name="Especie" value="Canino"> Canino
			<input type="radio" name="Especie" value="Felino"> Felino
			<br><br>
			Idade: <input type="text" name="Idade"><br><br>
			Sexo: 
			<input type="radio" name="Sexo" value="macho"> Macho
			<input type="radio" name="Sexo" value="femea"> Fêmea
			<br><br>
			Raça: <input type="text" name="Raça"><br><br>
			Peso: <select name="Peso">
				<option value="5kg"> Até 5 kg </option>
				<option value="10kg"> De 5 a 10 kg </option>
				<option value="15kg"> De 10 a 15 kg </option>
				<option value="20kg"> De 15 a 20 kg </option>
				<option value="25kg"> De 20 a 25 kg </option>
			</select><br><br>
			É vacidado (antirrábica): 
				<input type="radio" name="Vacinado" value="sim"> Sim
				<input type="radio" name="Vacinado" value="nao"> Não
				<br><br>
			Data da Vacina: <input type="text" name="Data"><br><br>
			<a href="pag2.php"> <input type="button" name="buton" value="Voltar"> </a>
			<input type="submit" name="botao" value="Enviar Dados">
			<a href="resumo.php"> <input type="button" name="botao1" value="Resumo das inscrições"> </a>
		</form>
    </center>
</html>

<?php
	if(isset($_POST["botao"])){
	   $conexao=mysql_connect("localhost:3306","letty493", "root123");
		mysql_select_db("castracao",$conexao);
		
		$nome = $_POST["nome"];
		$especie = $_POST["especie"];
		$idade = $_POST["idade"];
		$sexo = $_POST["sexo"];
		$raca = $_POST["raca"];
		$peso = $_POST["peso"];
		$vacidado = $_POST["vacinado"];
		$data = $_POST["data"];
			
		$insere = "insert into castracao.pet values('$nome','$especie','$idade','$sexo','$raca','$peso','$vacinado','$data')";
		mysql_query ($insere, $conexao) or die (mysql_error());
		echo "<script>alert('Cadastro realizado com sucesso.');</script>";
		mysql_close($conexao);
	}
?>
