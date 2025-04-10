<html>
<meta charset=UTF-8> 
    <center>  <h1> Formulário de Cadastro para Castração </h1>
		<form method=POST>
			<h2> Endereço: </h2>
			Rua: <input type="text" name="Rua"><br><br>
			Número: <input type="text" name="Número"><br><br>
			Bairro: <input type="text" name="Bairro"><br><br>
			Cidade: <input type="text" name="Cidade"><br><br>
			Estado: <select name=estado>
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
			</select> <br><br>
			CEP: <input type="text" name="CEP"><br><br>
			<a href="index.php"> <input type="button" name="buton" value="Voltar"> </a>
			<a href="pag3.php"> <input type="button" name="botao" value="Próximo"> </a>
		</form>
    </center>
</html>

<?php
	if(isset($_POST["botao"])){
	   $conexao=mysql_connect("localhost:3306","letty493", "root123");
		mysql_select_db("castracao",$conexao);
		
		$rua = $_POST["rua"];
		$numero = $_POST["numero"];
		$bairro = $_POST["bairro"];
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];
		$cep = $_POST["cep"];
			
		$insere = "insert into castracao.dono values('$rua','$numero','$bairro','$cidade','$estado','$cep')";
		mysql_query ($insere, $conexao) or die (mysql_error());
		echo "<script>alert('Cadastro realizado com sucesso.');</script>";
		mysql_close($conexao);
	}
?>