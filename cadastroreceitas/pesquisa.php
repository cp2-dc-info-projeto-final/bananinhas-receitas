<?php
require "pesquisacon.php";
if (session_status() !== true){
  session_start();
}
 
$pesquisar = $_POST['pesquisar'];
$sql  = "SELECT idreceitas, nome, descricao, ModPreparo, ingredientes FROM receitas WHERE nome LIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conn, $sql);


while($rows_receitas = mysqli_fetch_array($resultado)){
      $_SESSION['id'] = $rows_receitas['idreceitas'];
      $_SESSION['nome'] = $rows_receitas['nome'];
      $_SESSION['descricao'] = $rows_receitas['descricao'];
      $_SESSION['modpreparo'] = $rows_receitas['ModPreparo'];
      $_SESSION['ingredientes'] = $rows_receitas['ingredientes'];
    }
?>


<html>
	<style>
	body{
		background: orange;
	}
	.receitas {
		background: yellow;
		width: 50%;
		height: 100%;
	}
	
	</style>
	
	<body>
		<div class="receitas" >
			<label>Receita: <?php 	echo $_SESSION['nome']."<br>";	?></label>
			<button><?php	echo "<a href=paginareceita.php action=\"addreceitas("
			. $rows_receitas['idreceitas'] . ",'" . $_SESSION['nome'] . "')\"> escolher receita </a><br>";?></button>
		</div>
	</body>
</html>


   
	
	
	
	
	
	
	
	
