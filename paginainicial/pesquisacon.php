<?php
$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "BananaSQL";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result  = "SELECT id, Nome FROM ingredientes WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado = mysqli_query($conn, $result);
    ?>