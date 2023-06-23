<?php
    session_start();
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: telalogin.php');
    }
    $logado = $_SESSION['email'];
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
        <!--downloads mais populares -->
        <section id="banner">
          <!-- CORPO DO SITE -->
          <div class="semnome">
            <?php
                 //echo "<br><br><br><br><br>";
                 echo "<p class='textonome'>Olá <b class='nomeusuario'>$logado</b>, Bem-vindo!</p>";
               ?>
               <a class="fotoperfil" href="perfil.php">
                <img class="imgperfil"src="imagens/messi.jpg" alt="Perfil">
              </a>
            <p class="textodownload" style="padding-top: 100px;">Os sons mais legais! </p>
          </div>
        </br>
          <!--musicas-->
          <div class="card mb-3" style="max-width: 540px; background: linear-gradient(#000000, #c006ee36); border-radius: 10px; align-items: center; position:relative; margin: 100px; margin-top: 0;">
            <div class="row g-0" >
              <div class="col-md-4">
                <div class="imagem-container">
                  <div class="play-button"></div>
                <a href="legais.html">
                  <img style="width: 230px;
                  height: 100px;
                  object-fit: cover;"src="imagens/floresta.jpg" class="img-fluid rounded-start" alt="...">
                </a>
              </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>floresta</strong></h5>
                  <p class="card-text">by MiT</p>
                  <p class="card-text"><small class="text-body-secondary"></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 540px; background: linear-gradient(#000000, #c006ee36); border-radius: 10px; align-items: center; position:relative; margin: 100px; margin-top: 0;">
            <div class="row g-0" >
              <div class="col-md-4">
                <div class="imagem-container">
                  <div class="play-button"></div>
                <a href="legais.html">
                  <img style="width: 215px;
                  height: 100px;
                  object-fit: cover;"src="imagens/trap.jpg" class="img-fluid rounded-start" alt="...">
                </a>
              </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>trap</strong></h5>
                  <p class="card-text">by DeftFunk</p>
                  <p class="card-text"><small class="text-body-secondary"></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 540px; background: linear-gradient(#000000, #c006ee36); border-radius: 10px; align-items: center; position:relative; margin: 100px; margin-top: 0;">
            <div class="row g-0" >
              <div class="col-md-4">
                <div class="imagem-container">
                  <div class="play-button"></div>
                <a href="legais.html">
                  <img style="width: 180px;
                  height: 100px;
                  object-fit: cover;" src="imagens/8bit.jpg" class="img-fluid rounded-start" alt="...">
                </a>
              </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>suspense 8bit</strong></h5>
                  <p class="card-text">by MiT</p>
                  <p class="card-text"><small class="text-body-secondary"></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 540px; background: linear-gradient(#000000, #c006ee36); border-radius: 10px; align-items: center; position:relative; margin: 100px; margin-top: 0;">
            <div class="row g-0" >
              <div class="col-md-4">
                <div class="imagem-container">
                  <div class="play-button"></div>
                <a href="legais.html">
                  <img style = "width: 225px;
                  height: 100px;
                  object-fit: cover;"src="imagens/boom.jpg" class="img-fluid rounded-start" alt="...">
                </a>
              </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>boom</strong></h5>
                  <p class="card-text">by blackout</p>
                  <p class="card-text"><small class="text-body-secondary"></small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 540px; background: linear-gradient(#000000, #c006ee36); border-radius: 10px; align-items: center; position:relative; margin: 100px; margin-top: 0;">
            <div class="row g-0" >
              <div class="col-md-4">
                <div class="imagem-container">
                  <div class="play-button"></div>
                <a href="legais.html">
                  <img style = "width: 225px;
                  height: 100px;
                  object-fit: cover;" src="imagens/golfinho.jpg" class="img-fluid rounded-start" alt="...">
                </a>
              </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>golfinho</strong></h5>
                  <p class="card-text">by blackout</p>
                  <p class="card-text"><small class="text-body-secondary"></small></p>
                </div>
              </div>
            </div>
          </div>
          <!--CRIADORES-->
          <div class="quadro">
          <h1 class="criador">Você é um criador?</br></h1>
          <p class="criador1">Compartilhe conosco!</p>
          <div class="primeiradiv">
            <a href="criadores.php" style="color: #ffffff; font: normal 22px Arial; ">Clique aqui</a>
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
