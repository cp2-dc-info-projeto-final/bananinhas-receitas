<?php
session_start();
?>
<!DOCTYPE html>

<html lang= "pt-bt">
<head>
    <meta charset= "utf-8">
    <title>Cadastro</title>
</head>
<link href="http://127.0.0.1/edsa-edsa-bananinhas%20receitas/ingredientes/ingrediente.php" rel="Stylesheet" type="text/css">

<body>
<?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
<div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Cadastro de Ingrediente</h3>

        <input type="text" name="Nome" placeholder="Nome do Ingrediente" required="required">

        <button type="submit" id="cadastrar">Cadastrar</button>
    </form>
</div>
</body>
</html>
