<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "BananaSQL";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    echo $pesquisar
  //  $result = "SELECT * FROM receitas WHERE nome LIKE '%$pesquisar%' LIMIT 5";
  //  $resultado = mysqli_query($conn, $result_cursos);
    
  //  while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
  //      echo "Nome do curso: ".$rows_cursos['nome']."<br>";
  //  }
//https://www.youtube.com/watch?v=cvLaqZQnIEo
?>