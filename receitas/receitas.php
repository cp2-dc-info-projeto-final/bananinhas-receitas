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

<iframe src="formpesquisa.php" width="820" marginwidth="0" height="360" marginheight="0" scrolling="no" frameborder="0" hspace="0" vspace="0" allowtransparency="true" aplication="true"></iframe>

<!-- https://www.youtube.com/watch?v=NN0hGn2Vbu4 assistir e tentar tirar o iframe -->

</body>
</html>              