<?php
require "conexao.php";
session_start();

$Nome = $_POST["nome"];
$ModPreparo = $_POST["ModPreparo"];
$NomeReceita = $_POST["NomeReceita"];
$result_ingredientes = "INSERT INTO ingredientes (nome, ModPreparo,NomeReceita) VALUES ('$Nome', '$ModPreparo', '$NomeReceita')";
$resultado_ingredientes = mysqli_query($conn,$result_ingredientes);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:black;'>ingrediente cadastrado com sucesso";
    header("location:Cadastroreceitas.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>ingrediente não foi cadastrado com sucesso</p>";
    header("location:Cadastroreceitas.php");
}
?>