<?php
    require "conexao.php";
    
    function cadastro($nome,$email,$tel,$datanasc,$hash,$sexo) {
        $conn = getConnection();
        
        if($conn === false){
            die("Deu ruim mano!" . mysqli_connect_error());
        }

        $sql = "SELECT id FROM cliente WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
		
        $erro = "";
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }

        $sql = "INSERT INTO cliente (nome, email, tel, datanasc, senha, sexo) VALUES
            ('$nome', '$email', '$tel','$datanasc', '$hash', '$sexo')";
        
        if(!mysqli_query($conn, $sql)){
            die("Deu ruim no cadastro $sql. " . mysqli_error($conn));
        }
        mysqli_close($conn);
        return true;
    }
?>