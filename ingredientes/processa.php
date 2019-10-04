<?php
require "conexao.php";
session_start();


$Nome = $_POST["Nome"];

$result_ingredientes = "INSERT INTO ingredientes (nome) VALUES ('$nome')";
$resultado_ingredientes = mysqli_query($connection,$result_ingredientes);

if(mysqli_insert_id($connection)){
    $_SESSION['msg'] = "ingrediente cadastrado com sucesso";
    header("location:ingrediente.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>ingrediente não foi cadastrado com sucesso</p>";
    header("location:ingrediente.php");
}
?>