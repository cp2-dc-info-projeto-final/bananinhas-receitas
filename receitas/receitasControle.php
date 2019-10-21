<?php
require "receitasform.php";
session_start();
    
$result_receitas=mysql_query("Select *FROM receitas WHERE nome='".$_POST['nome']."'");
if(mysql_num_rows($result_receitas)>=1){Echo "Ingrediente já cadastrado
<script type=\"text/javascript\">
alert(\"cadastrado com sucesso! \");
<\script>
 ";
}

$Nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$mododepreparo = $_POST["mododepreparo"];


$result_receitas = "INSERT INTO receitas (nome,descricao,mododepreparo) VALUES ('$Nome','$descricao','$mododepreparo')";
$resultado_receitas = mysqli_query($conn,$result_receitas);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:black;'>Receita cadastrado com sucesso";
    header("location:especificadoringrediente.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>Receita não foi cadastrado com sucesso</p>";
    header("location:receitas.php");
}
?>