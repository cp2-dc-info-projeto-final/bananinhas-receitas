<?php
        session_start();
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<div class="container">
<form id="contact" action="receitasControle.php" method="post">
<input type="text" name="nome" id="nomereceita" placeholder="Nome da receita" required="required">
<input type="text" name="descrição" id="descrição" placeholder="Descrição" required="required">
<input type="text" name="modo de preparo" id="mododepreparo" placeholder="modo de preparo" required="required">
<button type="submit" id="cadastrar">Cadastrar</button>
</form>
</div>
</html>