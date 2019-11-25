<?php
require "conexao.php";
session_start();

$nome = $_POST["nome"];
$ModPreparo = $_POST["ModPreparo"];
$descricao = $_POST["descricao"];
$ingredientes = $_POST["ingredientes"];
$result_receitas = "INSERT INTO receitas (nome, ModPreparo, descricao, ingredientes) VALUES ('$nome', '$ModPreparo', '$descricao', '$ingredientes')";
$resultado_receitas = mysqli_query($conn,$result_receitas);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:black;'>receita cadastrada com sucesso";
    header("location:Cadastroreceitas.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>receita não foi cadastrada com sucesso</p>";
    header("location:Cadastroreceitas.php");
}
?>