<?php
require "receitasform.php";
session_start();
    

$Nome = $_POST["nome"];

$result_ingredientes = "INSERT INTO receitas (nome) VALUES ('$Nome')";
$resultado_ingredientes = mysqli_query($conn,$result_ingredientes);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:black;'>Receita cadastrado com sucesso";
    header("location:receitas.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>Receita não foi cadastrado com sucesso</p>";
    header("location:receitas.php");
}
?>