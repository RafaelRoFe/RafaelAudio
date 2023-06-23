<?php

    if(isset($_POST['submit'])){
        
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) 
        VALUES ('".$nome."','".$email."','".$senha."')");

    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RafaelAudio - Cadastre-se</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #000000, #000017);
            
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #BC18E6;
            padding: 15px;
            border-radius: 15px;
            width: 30%;
            height: 50%;
            box-shadow: 0px 0px 10px #BC18E6;
        }
        fieldset{
            border: 2px solid #ffff;
            box-shadow: 0px 0px 10px #BC18E6;
            padding-bottom: 20px;
        }
        legend{
            border: 1px solid #8c00af;
            padding: 10px;
            text-align: center;
            background-color: #a50bcc;
            border-radius: 8px;
            box-shadow: 0px 0px 10px #BC18E6;
            padding: 20px;
            width: 15vw;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            padding-top: 25px;
        }
        .labelInput{
            position: absolute;
            top: 20px;
            left: 0px;
            pointer-events: none;
            transition: .5s;

        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -15px;
            font-size: 14px;
            color: #ffff;
        }
        #submit{
            background-image: linear-gradient(to right, #a50bcc, #BC18E6);
            width: 40%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #6b0f81;
            font-weight: bolder;
            top: 85%;
            left: 50%;
            transform: translate(-50%,-50%);
            position: absolute;

        }
        #submit:hover{
            background-image: linear-gradient(to right, #8c00af, #6b0f81);
            box-shadow: 0px 0px 10px #6b0f81;
        }
    </style>
</head>
<body>
    <div>
        <a href="telalogin.php">
            <button type="button" class="btn btn-primary"  style="cursor: pointer; color: #ffffff; height: 40px; width: 80px; border: solid 1px #BC18E6; background-color: #3f2f61; margin-top: 10px; border-radius: 5px;">Voltar</button>
        </a>
    </div>
    <img src="imagens/RafaelAudiologo.jpg" style="width: 280px; margin-top: 20px; position:fixed;">
    <div class="box">
        <form action="form.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome de usuário</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="email" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>