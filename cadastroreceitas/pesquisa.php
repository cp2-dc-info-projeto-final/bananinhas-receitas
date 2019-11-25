<?php
require "pesquisacon.php";
if (session_status() !== true){
  session_start();
}

$pesquisar = $_POST['pesquisar'];
$sql  = "SELECT idreceitas, nome, descricao, ModPreparo, ingredientes FROM receitas WHERE nome LIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conn, $sql);

while($rows_receitas = mysqli_fetch_array($resultado)){
      echo "receita: ".$rows_receitas['nome']."<br>";
      echo "id da receita: ".$rows_receitas['idreceitas']."<br>";
      echo "<a href=paginareceita.php action=\"addreceitas(" . $rows_receitas['idreceitas'] . ",'" . $rows_receitas['nome'] . "')\"> escolher receita </a><br>";
      $_SESSION['id'] = $rows_receitas['idreceitas'];
      $_SESSION['nome'] = $rows_receitas['nome'];
      $_SESSION['descricao'] = $rows_receitas['descricao'];
      $_SESSION['modpreparo'] = $rows_receitas['ModPreparo'];
      $_SESSION['ingredientes'] = $rows_receitas['ingredientes'];
    }
    
?>