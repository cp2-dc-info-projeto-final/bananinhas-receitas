<?php
require "pesquisacon.php";

$pesquisar = $_POST['pesquisar'];
$result  = "SELECT id, Nome FROM ingredientes WHERE nome LIKE '%$pesquisar%' LIMIT 5";
$resultado = mysqli_query($conn, $result);

while($rows_ingredientes = mysqli_fetch_array($resultado)){
      echo "ingrediente: ".$rows_ingredientes['Nome']."<br>";
      echo "id do ingrediente: ".$rows_ingredientes['id']."<br>";
      echo "<a href=\"\" action=\"addIngrediente(" . $rows_ingredientes['id'] . ",'" . $rows_ingredientes['Nome'] . "')\"> Adicionar </a><br>";
    }
?>