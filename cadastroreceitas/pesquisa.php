<?php
require "pesquisacon.php";

$pesquisar = $_POST['pesquisar'];
$result  = "SELECT id, Nome FROM receitas WHERE ingredientes LIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conn, $result);

while($rows_receitas = mysqli_fetch_array($result)){
      echo "receita: ".$rows_receitas['Nome']."<br>";
      echo "id da receita: ".$rows_receitas['id']."<br>";
      echo "<a href=\"\" action=\"addreceitas(" . $rows_receitas['id'] . ",'" . $rows_receitas['Nome'] . "')\"> Adicionar </a><br>";
    }
    require "formpesquisa.php"
?>