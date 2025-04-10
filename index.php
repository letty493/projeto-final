<html>
<meta charset=UTF-8> 
    <center> <h1> Formulário de Cadastro para Castração </h1>
    <form  method=POST>
        <h2> Informações do Dono: </h2>
        Nome: <input type="text" name="Nome"><br><br>
        CPF: <input type="text" name="CPF"><br><br>
        Celular: <input type="text" name="Celular"><br><br>
        Email: <input type="text" name="Email"><br><br>
        <a href="pag2.php"> <input type="button" name="botao" value="Próximo"> </a>
    </form>
    </center>
</html>

<?php
	if(isset($_POST["botao"])){
	   $conexao=mysql_connect("localhost:3306","letty493", "root123");
		mysql_select_db("castracao",$conexao);
		
		$nome = $_POST["nome"];
		$cpf = $_POST["cpf"];
		$celular = $_POST["celular"];
		$email = $_POST["email"];
		
		$insere = "insert into castracao.dono values('$nome','$cpf','$celular','$email',)";
		mysql_query ($insere, $conexao) or die (mysql_error());
		echo "<script>alert('Cadastro realizado com sucesso.');</script>";
		mysql_close($conexao);
	}
?>