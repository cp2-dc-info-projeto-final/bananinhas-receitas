<?php

    function login($email, $senha) {
        $connection = mysqli_connect("localhost", "root", "", "bananasql");
    
        if($connection === false){
            die("Deu ruim mano!" . mysqli_connect_error());
        }

        $sql = "SELECT senha,nome,id FROM cliente WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
        
        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
                if (password_verify($senha, $hash)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }        
        mysqli_close($connection);
    }
    
?>