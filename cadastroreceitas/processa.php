<?php
require "conexao.php";
session_start();

$nome = $_POST["nome"];
$ModPreparo = $_POST["ModPreparo"];
$descricao = $_POST["descricao"];
$ingredientes = $_POST["ingredientes"];

$result_receitas = "INSERT INTO receitas (nome, descricao, ModPreparo, ingredientes) VALUES 
('$nome', '$descricao', '$ModPreparo', '$ingredientes')";
$resultado_receitas = mysqli_query($conn,$result_receitas);

 
$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "bananasql";
 
if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
        mysql_connect($host,$username,$password) or die("Impossível Conectar"); 
 
        @mysql_select_db($db) or die("Impossível Conectar"); 

 
        mysql_query("INSERT INTO img (PES_IMG) VALUES ('$mysqlImg')") or
        die("O sistema não foi capaz de executar a query"); 
        
        unlink($nomeFinal);

         
        header("location:http://127.0.0.1/edsa-bananinhas-receitas/logincadastro/home/home.php");
    }
} 
else { 
    echo"Você não realizou o upload de forma satisfatória."; 
} 
 
?>