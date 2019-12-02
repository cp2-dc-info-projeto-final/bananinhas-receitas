<?php
require "pesquisacon.php";
if (session_status() !== true){
  session_start();

     require "formpesquisa.php";

}
$pesquisar = $_POST['pesquisar'];
$sql  = "SELECT idreceitas, nome, descricao, ModPreparo, ingredientes FROM receitas WHERE nome ILIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conn, $sql);
while($rows_receitas = mysqli_fetch_array($resultado)){
      echo " ".$rows_receitas['nome']."<br>";
 
      echo "<a href=paginareceita.php action=\"addreceitas(" . $rows_receitas['idreceitas'] . ",'" . $rows_receitas['nome'] . "')\"> escolher receita </a><br>";
      $_SESSION['id'] = $rows_receitas['idreceitas'];
      $_SESSION['nome'] = $rows_receitas['nome'];
      $_SESSION['descricao'] = $rows_receitas['descricao'];
      $_SESSION['modpreparo'] = $rows_receitas['ModPreparo'];
      $_SESSION['ingredientes'] = $rows_receitas['ingredientes'];
    }

?>