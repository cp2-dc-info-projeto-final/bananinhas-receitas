<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $hash_da_senha = password_hash($senha, PASSWORD_DEFAULT);

    echo "$nome<br/>";
    echo "$email<br/>";
    echo "$hash_da_senha<br/>";

    $connection = mysqli_connect("localhost", "root", "", "BananaSQL");
    if($connection === false){
        die("Deu ruim na conexão!" . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO cliente (nome, email, senha)    
    VALUES ('$nome', '$email', '$hash_da_senha')";

    if(mysqli_query($connection, $sql)){
    echo "Cadastro Concluído";
    } else{
    echo "Deu ruim no cadastro! $sql. " . mysqli_error($connection);
    }

    mysqli_close($connection);

?>