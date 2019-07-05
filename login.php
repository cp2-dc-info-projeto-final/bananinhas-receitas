<?php
//sem funcionar ainda
session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
            session_unset();
        }else{
            echo"login bem sucedido";
        }
?>