<?php
require "conexao.php";
session_start();
    
$result_ingredientes=mysql_query("Select *FROM ingredientes WHERE nome='".$_POST['nome']."'");
if(mysql_num_rows($result_ingredientes)>=1){Echo "Ingrediente já cadastrado
<script type=\"text/javascript\">
alert(\"cadastrado com sucesso! \");
<\script>
 ";
}

$Nome = $_POST["nome"];

$result_ingredientes = "INSERT INTO ingredientes (nome) VALUES ('$Nome')";
$resultado_ingredientes = mysqli_query($conn,$result_ingredientes);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:black;'>ingrediente cadastrado com sucesso";
    header("location:ingrediente.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>ingrediente não foi cadastrado com sucesso</p>";
    header("location:ingrediente.php");
}
?>