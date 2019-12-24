<html lang= "pt-br">
    <head>
<style>
  body {
		margin: 0;
    padding: 0;
    max-height: 100%;
	}
  #left{
		width: 50%;
		height: 90%;
    left: 0%;
    top: 10%;
		position: absolute;
		background-position: 50% 50%;
    background-size: cover;
    background: #f9f9f9;
    z-index:1; 
    overflow: auto;
	}
	#right{
    top: 10%;
		width: 50%;
		height: 90%;
		right: 0%;
		margin: 0;
		padding: 0;
		position: absolute;
    background-image: url(../Imagens/bananalogo.png);
    background-size: cover;
	}
     .container {
		    top: 0%;
		    position: relative;
        margin: 0 auto;
        left: 1.5%;
      } 

      #contact {
        background: #F9F9F9;
        padding: 10px;
        position: relative;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		    width: 93%;
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

<body>

<div id="right" ></div>

<div id="left"> 

<?php
require "pesquisacon.php";
if (session_status() !== true){
  session_start();
}

$pesquisar = $_POST['pesquisar'];
$sql  = "SELECT idreceitas, nome, descricao, ModPreparo, ingredientes FROM receitas WHERE ingredientes LIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conn, $sql);
echo '<br>';
while($rows_receitas = mysqli_fetch_array($resultado)){
	
	echo '<div class="container">'.'<form id="contact">';
      echo "<h3>" ."Receita: " ."</h3><p>" .$rows_receitas['nome'] ."</p>";
      echo "<h3>" ."Descrição: " ."</h3><p>".$rows_receitas['descricao'] ."</p>";
      echo "<button id='button1'><a href='paginareceita.php' >Escolher receita</a></button>";
	echo '</form></div>';  
	  
      $_SESSION['id'] = $rows_receitas['idreceitas'];
      $_SESSION['nome'] = $rows_receitas['nome'];
      $_SESSION['descricao'] = $rows_receitas['descricao'];
      $_SESSION['modpreparo'] = $rows_receitas['ModPreparo'];
      $_SESSION['ingredientes'] = $rows_receitas['ingredientes'];
    }
?>

</div>

  </body>
</html>