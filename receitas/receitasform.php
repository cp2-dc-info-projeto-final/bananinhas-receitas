<?php

    function cadastro($nome,$email,$tel,$datanasc,$hash,$sexo) {
        $connection = mysqli_connect("localhost", "root", "", "bananasql");
        // Check connection
        if($connection === false){
            die("Deu ruim mano!" . mysqli_connect_error());
        }

        $sql = "SELECT id FROM cliente WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }

        $sql = "INSERT INTO cliente () VALUES
            ()";
        
        if(!mysqli_query($connection, $sql)){
            die("Deu ruim no cadastro de receitas $sql. " . mysqli_error($connection));
        }
        mysqli_close($connection);
        return true;
    }
?>