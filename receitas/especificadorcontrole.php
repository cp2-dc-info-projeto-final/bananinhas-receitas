<?php
require "especificadorform.php";
session_start();
    
$result_receitaingrediente=mysql_query("Select *FROM receitaingrediente WHERE nome='".$_POST['nome']."'");
if(mysql_num_rows($result_receitaingrediente)>=1){Echo "Ingrediente já cadastrado
<script type=\"text/javascript\">
alert(\"cadastrado com sucesso! \");
<\script>
 ";
}

$Nome = $_POST["nome"];


$result_receitaingrediente = "INSERT INTO receitaingrediente (nome) VALUES ('$Nome')";
$resultado_receitaingrediente = mysqli_query($conn,$result_receitaingrediente);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style= 'color:black;'>Receita cadastrado com sucesso";
    header("location:especificadoringrediente.php");
} else{
    $_SESSION['msg']="<p style= 'color:black;'>Receita não foi cadastrado com sucesso</p>";
    header("location:especificadoringrediente.php");
}
?>