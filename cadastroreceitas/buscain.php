<?php
if (session_status() == false) {
    session_start();
    echo"bla bla bla";
}
?>
<html>
    <form method="post" action="buscainrows.php">
        pesquisar receita pelo ingrediente:<input type="text" id="pesquisar" name="pesquisar">
        <input type="submit" value="buscar">
    </form>
</html>