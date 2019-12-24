<html lang= "pt-br">
    <head>
<style>
     body{
        background-color: #CC6532;
        width: 100%;
    }
     .container {
		    top: 0%;
		    position: relative;
        margin: 0 auto;
        left: 1%;
      } 

      #contact {
        background: #F9F9F9;
        padding: 10px;
        position: relative;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		    width: 42%;
      }
      
      #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 300;
        margin-bottom: 10px;
		    color: red;
      }
	  #button1{
		  border: 0px;
		background-color: #A9A9A9;
		width: 170px;
	}
</style>   

<?php

require "pesquisacon.php";
if (session_status() !== true){
  session_start();
    
}
$pesquisar = $_POST['pesquisar'];
$sql  = "SELECT idreceitas, nome, descricao, ModPreparo, ingredientes FROM receitas WHERE nome LIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conn, $sql);

while($rows_receitas = mysqli_fetch_array($resultado)){
      
	  echo '<div class="container">'.'<form id="contact">';
      echo "<h3>" ."Receita: " ."</h3>"	."<p>" .$rows_receitas['nome'] ."</p>";
      echo "<h3>" ."Descrição: " ."</h3>" ."<p>".$rows_receitas['descricao'] ."</p>";
      echo "<button id='button1'><a href=paginareceita.php action=\"addreceitas(" . $rows_receitas['idreceitas'] . ",'" . $rows_receitas['nome'] . "')\">Escolher receita</a></button><br>";
	echo '</form>'.'</div>';  
	  
	  $_SESSION['id'] = $rows_receitas['idreceitas'];
      $_SESSION['nome'] = $rows_receitas['nome'];
      $_SESSION['descricao'] = $rows_receitas['descricao'];
      $_SESSION['modpreparo'] = $rows_receitas['ModPreparo'];
      $_SESSION['ingredientes'] = $rows_receitas['ingredientes'];
    }

?>

</html>