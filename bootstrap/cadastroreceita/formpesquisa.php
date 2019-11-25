<?php
if (session_status() == false) {
    session_start();
    echo"bla bla bla";
}
?>

<?php

//index.php
include("../home/nav.php");
include ("../home/links.php");

?>

<!DOCTYPE html>
<html lang= "pt-bt">
<body>
	<div class="container">
		<div class="row">
			<div class="col">
    <form method="post" action="pesquisa.php">
        <input type="text" id="pesquisar" name="pesquisar" placeholder="Pesquisar" style="width:250px;">
        <input type="submit" value="Buscar">
    </form>
            </div>
        </div>
    </div>

    
    <body>
</html>