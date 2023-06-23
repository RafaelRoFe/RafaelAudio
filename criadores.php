<?php

    if(isset($_POST['submit'])){
        
        include_once('conexao.php');

        $titulo = $_POST['titulo'];
        $artista = $_POST['artista'];
        $duracao = $_POST['duracao'];
        $genero = $_POST['genero'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) 
        VALUES ('".$nome."','".$email."','".$senha."','".$nome."' )
        ");

    }

?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RafaelAudio</title>

    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="imagens/site.webmanifest">
    
    <!--icon mensagem-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

        .primeiradiv1{

            background: #bd18e6;
            border-radius: 15px;
            width: 250px;
            height: 100px;
            margin: auto;
            text-align: center;
            align-items: center;
            margin-top: 50px;
            font-weight: bold;
            color: #BC18E6;
            box-shadow: 0px 0px 10px #BC18E6;
            display: flex;
            justify-content: center;
        }
        .criadorescss{
            background-color: #020202;
            width: auto;
            height: 600px;
        }
        .forms {
            background-color: #BC18E6;
            border: 1px solid #ffffff;
            box-shadow: 0px 0px 10px #ffffff;
            color: #ffffff;
            border-radius: 5px;
            padding: 10px;
        }

        .music {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.musich2{
  width: 100%;
  text-align: center;
  padding: 1rem 0 0.5rem 0;
  font-size: 2rem;
}

.table{
  border-collapse: collapse;
  border-spacing: 0;
  width: 50rem;
}

.th{
  padding: 1rem;
  border-bottom: 1px solid #ddd;
  text-align: left;
}

.imagemmusic{
  width: 60px;
  height: auto;
  padding: 10px;
}
.tdlista{
 padding: 10px;

}

.upload {
  background: #BC18E6;
  border-radius: 15px;
  padding: 15px;
  width: 50%;
  height: auto;
  margin: 50px auto; /* Centraliza verticalmente e define uma margem superior */
  text-align: center;
  align-items: center;
  font-weight: bold;
  color: #ffffff;
  box-shadow: 0px 0px 10px #BC18E6;
}
.quadrofooter {
  width: auto;
  background-color: #000000;
  border: solid 1px #000000;
  border-radius: 5px;
  margin-top: 20%; /* Ajusta a margem superior para separar da classe "upload" */
  padding: 15px; /* Adiciona um preenchimento interno */
}
h1 {
  margin-top: 200px;
  margin-left: auto;
  margin-right: auto;
  color: #ffffff;
  border-radius: 10px;
  background-color: #BC18E6;
  text-align: center;
  width: 80%;
  height: 60px;
  align-items: center;
  font-family: 'Bebas Neue', cursive;
  text-shadow: 2px 2px 4px #000000;
  font-size: 52px;
}

        </style>
    <meta charset="utf-8">
    </head>

    <body>
       <!-- Seção do cabeçalho -->
      <div class="divprincipal">
       <header>
        <div class="imagemlogo"> 
          <a class="logo" href="index.php">
            <img src="imagens/RafaelAudiologo.jpg" alt="Home">
          </a>
      </div>
       <div class="itemsnav">
       <ul class="nav justify-content-center" style="background-color: #BC18E6; border-radius: 10px; width: 300px;">
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="index.php"  style="color: #ffffff;">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bibliotecas.html" style="color: #ffffff;">Bibliotecas</a>
        </li>
      </ul>
      </div>
      <div class="profile">
        <a class="perfil" href="perfil.php">Perfil</a>
        <a class="perfil" href="sair.php">encerrar sessão</a>

      </div>
      </header>
    
      <main>
        <section id="banner">
          <!-- CORPO DO SITE -->
          <div class="criadorescss">
            <h1 style="margin-top: 200px;margin-left: auto;margin-right: auto;color: #ffffff;border-radius: 10px;background-color: #BC18E6;text-align: center;width: 80%;height: 60px;align-items: center;font-family: 'Bebas Neue', cursive;text-shadow: 2px 2px 4px #000000;font-size: 52px;">Seja Bem-vindo Criador! - Aqui você consegue fazer o upload de seus sons.</h1>
            <h4  style="text-align: center; margin-left: 10px; color: #ffffff; margin-top: 50px;" >Você é um criador de sons e quer compartilhar seu talento com a gente?</h4>
            <br>
            <p style="color: #ffffff; font: normal 20px Arial; margin-left: 750px; margin-top: 20px;">Aqui você faz com facilidade e sem complicações!</p>
            
           <div class="upload">
              <h2>UPLOAD DE ARQUIVOS</h2>
              <DIV>
                  <form action="envia.php" method="POST" enctype="multipart/form-data">
                      <input class="forms" type="file" name="arquivo">
                      <input class="forms" type="submit" value="Enviar">
                  </form>
              </DIV>
              <br>
              <h6>ARQUIVOS ENVIADOS</h6>
              <?php require 'lista.php'; ?>
              <div class="music">
                  <table class="table">
                    <tbody>
                      <?php foreach ($arquivos as $arquivo): ?>
                    <tr class="th">
                      <td class="imagemmusic"><img src="imagens/padraomusica.jpg" alt="" class="imagemmusic"></td>
                      <td id="mudar" style="padding-top: 30px;"><?php echo $arquivo; ?></td>
                      <td id="mudar2" style="padding-top: 30px;">Artista</td>
                      <td style="padding-top: 20px;">
                        <audio controls>
                          <source src="<?php echo $pasta . $arquivo; ?>" type="audio/mpeg">
                            Seu navegador não suporta a reprodução de áudio.
                        </audio>
                      </td>
                    </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </section>    
      </main>
       <!-- Seção do rodapé -->
      <footer>
        <div class="quadrofooter">
          <div class="linha-vertical"></div>
          <div class="footer"> 
              <img src="imagens/RafaelAudiologo.jpg" alt="..." style="width: 300px; margin-top: 120px;position:absolute; left: 250px;">
          <div> <p class="c" style="right: 0; color: #ffffff; margin-left: 55px; position: absolute; left: 250px; margin-top: 180px;">&copy; RafaelAudio 2023</p></div>
          <div class="paginas">
            <ul class="lista">
                <li>
                  <a href="desenvolvedores.html" class="desenvolvedores" style="color: #ffffff;">Desenvolvedores</a>
                </li>
                <li>
                  <a href="termos.html" class="termos" style="color: #ffffff;">Termos de uso</a>
                </li>
                <li>
                  <a href="sobre.html"class="sobre" style="color: #ffffff;">Sobre nós</a>
                </li>
                <li>
                  <a href="contato.html"class="contato" style="color: #ffffff;">Contato</a>
                </li>
              </ul>
          </div>
          <div class="redessociais">
            <p style="color: #ffffff; font: normal 20px Arial">Redes socias</p>
            <ul class="lista">
              <li><a href="https://www.instagram.com/rafaelaudio__/" target="_blank"><i></i>
                <img src="imagens/insta.png" style="width: 40px; position: absolute; right: 120px; border-radius: 15px; margin-top: 70px;" alt="">
              </a></li>
              <li><a href="https://twitter.com/RafaelAudio_" target="_blank"><i></i>
                <img src="imagens/twitter.png" style="width: 40px; position: absolute; right: 40px; border-radius: 15px; margin-top: 70px;" alt="">
              </a></li>
              <li><a href="https://github.com/RafaelRoFe" target="_blank"><i></i>
                <img src="imagens/github.png" style="width: 40px; position: absolute; left: 120px; border-radius: 10px; margin-top: 70px;" alt="">
              </a></li>
            </ul>
          </div>
        </div>
      </div>
      </footer>
    
      <!--JavaScript-->
      <script src="js/main.js"></script>
        <!--BOOTSTRAP JS-->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </div>
    </body>
</html>