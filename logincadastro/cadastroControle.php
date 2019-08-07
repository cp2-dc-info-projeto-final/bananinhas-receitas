<?php
   require "cadastro.php"
    session_start();

    $connection = mysqli_connect("localhost", "root", "", "bananasql");

    // Check connection
    if($connection === false){
        die("Deu ruim mano!" . mysqli_connect_error());
    }
    $sql = "SELECT id FROM cliente WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: LoginCasdastro.php");
        exit();
    } else{
        die("Deu ruim no cadastro $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
?>