<?php
require "conexao.php";
session_start();

$Nome = $_POST["nome"];
$ModPreparo = $_POST["ModPreparo"];
$NomeReceita = $_POST["NomeReceita"];
$Descri = $_POST ["Descri"];
$result_ingredientes = "INSERT INTO ingredientes (nome, ModPreparo,NomeReceita,Descri) VALUES ('$Nome', '$ModPreparo', '$NomeReceita','$Descri')";
$resultado_ingredientes = mysqli_query($conn,$result_ingredientes);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:black;'>Receita cadastrada com sucesso";
    header("location:Cadastroreceitas.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>Receita  não foi cadastrada com sucesso</p>";
    header("location:Cadastroreceitas.php");
}
?>