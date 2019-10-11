<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "BananaSQL";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result  = "SELECT * FROM ingredientes WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado = mysqli_query($conn, $result);
    
    while($rows_ingredientes = mysqli_fetch_array($resultado)){
      echo "ingrediente: ".$rows_ingredientes['Nome']."<br>";
      echo "id do ingrediente: ".$rows_ingredientes['idingredientes']."<br>";
    }
?>