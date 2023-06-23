<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RafaelAudio</title>

    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="imagens/site.webmanifest">

  
    <meta charset="utf-8">


    <style>
        /*SCROOL DO MOUSE*/

        body::-webkit-scrollbar {
            width: 10px;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #bd18e61c;
        }

        body::-webkit-scrollbar-track {
            background-color: #000017;
        }
        body{
            background-image: linear-gradient(100deg,#000000, #000017);
        }
        h1{
            color: #ffff;
            font-weight: bold;
            font-size: 36px;
            font: normal 34px Arial;
            padding: 15px;

        }
        .tela{
            background-color: #bd18e6e3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #BC18E6;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 5px 5px 10px #000000;
            width: 300px;
        }
        .inputSubmit{
            padding: 10px;
            padding: 15px;
            border: none;
            border-radius: 5px;
            width: 50%;
            background-color: #ffffff;
            margin-top: 15px;
            margin-left: 80px;
            box-shadow: 5px 5px 10px #000000;
            color: #ffffff;
            background-color: #BC18E6;
            font-size: 17px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: #9608b9;
        }

    </style>
</head>
<body>
    <img src="imagens/RafaelAudiologo.jpg" style="width: 280px; margin-top: 20px; position:fixed;">
    <div class="tela">
        <h1>Bem-vindo - Acesse!</h1>
        <form action="testalogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <p style="color: #ffff; font-family: Arial, Helvetica, sans-serif; font-size: 16px; padding: 7px;">Não tem cadastro?
                <a href="form.php" style="color: #000000 ;font-family: Arial, Helvetica, sans-serif; font-size: 15px;">Clique aqui</a>
            </p>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>
</html>