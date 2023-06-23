<?php
session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //Acessa
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //$nome = $_POST['nome'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){

            unset($_SESSION['email']);
            unset($_SESSION['senha']);
        
            header('Location: telalogin.php');
        }else{

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            //$_SESSION['nome'] = $nome;

            //SESSÃO TESTE PARA SE CONECTAR COM PERFIL(BIO)
            $row = $result->fetch_assoc();

            $idUsuario = $row['id_usuario']; 
            $_SESSION['id_usuario'] = $idUsuario;

            //}
            header('Location: index.php');
        }
    }else{
        //Não Acessa
        header('Location: telalogin.php');
    }


?>