<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    session_start();
    if ($senha != $senha2) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: LoginCasdastro.php");
        exit();
    }

    # password hash
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost", "root", "", "bananasql");
 
    // Check connection
    if($connection === false){
        die("Deu ruim mano!" . mysqli_connect_error());
    }
    $sql = "SELECT id FROM cliente WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: LoginCasdastro.php");
        exit();
    }
    $sql = "INSERT INTO cliente (nome, email, senha) VALUES
            ('$nome', '$email', '$hash')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: LoginCasdastro.php");
        exit();
    } else{
        die("Deu ruim no cadastro $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
?>