<?php
        session_start();
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset= "utf-8">
    <title>Cadastro</title>
</head>
<body>
<div class="container">
<form id="contact" action="receitasControle.php" method="post">
<input type="text" name="nome" id="nomereceita" placeholder="Nome da receita" required="required">
<input type="text" name="descricao" id="descricao" placeholder="descricao" required="required">
<input type="text" name="mododepreparo" id="mododepreparo" placeholder="modo de preparo" required="required">
<button type="submit" id="cadastrar">Cadastrar</button>
</form>
</div>
</body>
</html>