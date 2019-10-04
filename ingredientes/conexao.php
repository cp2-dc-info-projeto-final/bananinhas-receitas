<?php
    function cadastro($Nome) {
        $connection = mysqli_connect("localhost", "root", "", "bananasql");
        // Check connection
        if($connection === false){
            die("Deu ruim mano!" . mysqli_connect_error());
        }
        $result = mysqli_query($connection, $sql);
        $erro = "";
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }

        $sql = "INSERT INTO ingredientes (Nome) VALUES
            ('$Nome')";
        
        if(!mysqli_query($connection, $sql)){
            die("Deu ruim no cadastro $sql. " . mysqli_error($connection));
        }
        mysqli_close($connection);
        return true;
    }
?>