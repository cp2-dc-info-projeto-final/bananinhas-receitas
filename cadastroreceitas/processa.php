<?php
require "conexao.php";
$conn = getConnection();
session_start();

$nome = $_POST["nome"];
$ModPreparo = $_POST["ModPreparo"];
$descricao = $_POST["descricao"];
$ingredientes = $_POST["ingredientes"];

$result_receitas = "INSERT INTO receitas (nome, descricao, ModPreparo, ingredientes) VALUES 
('$nome', '$descricao', '$ModPreparo', '$ingredientes')";
$resultado_receitas = mysqli_query($conn,$result_receitas);

if(mysqli_insert_id($conn)){
 
    $_SESSION['msg'] = "<p style= 'color:black;'Receita cadastrada com sucesso";
    header("location:Cadastroreceitas.php");
} else{
  
    $_SESSION['msg']="<p style= 'color:black;'>Não foi possível cadastrar a receita</p>";
    header("location:Cadastroreceitas.php");
}
 
?>