<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $connection = mysqli_connect("localhost", "root", "", "bananasql");
 
    if($connection === false){
        die("Deu ruim mano!" . mysqli_connect_error());
    }
    session_start();
    
    $sql = "SELECT senha,nome FROM cliente WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $hash = $row["senha"];
            if (password_verify($senha, $hash)) {
                session_unset();
                $_SESSION["nome"] = $row["nome"];
                header("Location: main.html");
                exit();
            } else {
                $erro = "Senha incorreta";
                $_SESSION["erro"] = $erro;
                header("Location: main.html");
                exit();
            }
        }
    } else {
        $erro = "Login inexistente";
        $_SESSION["erro"] = $erro;
        header("Location: main.html");
        exit();
    }        
    mysqli_close($connection);