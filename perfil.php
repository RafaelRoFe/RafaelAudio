<?php
session_start();

// sistema para salvar bio do usuario
if (isset($_POST['submit'])) {
    include_once('conexao.php');

    $bio = $_POST['bio'];
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "INSERT INTO perfil_usuarios (id_usuario, bio) VALUES ('$id_usuario', '$bio')";

    if (mysqli_query($conexao, $sql)) {
        echo "BIO inserida com sucesso.";
    } else {
        echo "Erro ao inserir BIO: " . mysqli_error($conexao);
    }
}

//saber qual é o nome do usuario 
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

    <!--CSS-->

    <style>
        .img-redonda {
            border-radius: 50%;
            display: block;
            margin: 200px auto 0;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        .formsperfil{
            margin-left: 870px;
        }
        .formscss{
            display: block;
            margin: 100px 250px 0;

        }
        .bioforms{
            background-color: #ffffff;
            border: solid #BC18E6;
            border-radius: 10px;
            width: 500px;
            height: 250px;
        }
    </style>

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
          <div>
          <div>
          <img id="profileImage" src="imagens/messi.jpg" alt="Imagem de perfil" class="img-redonda">
            <p style="color: #ffffff; font-weight: bolder; margin-left: 935px; margin-top: 10px;">Perfil</p> 
           <?php 
             echo "<p style='color: #ffffff; font-weight: bolder; margin-top: 10px; font: normal 22px Arial;' class='formsperfil'>Nome: <b class='nomeusuario'>$logado</b></p>"; 
            ?>
            <form class="formscss" method="POST" action="perfil.php" enctype="multipart/form-data">
              <label for="bio" style="color: #ffffff; font-weight: bolder; font: normal 22px Arial">Bio:</label>
                <br>
              <textarea id="bio" name="bio" rows="5" cols="50" class="bioforms"><?php echo isset($bio) ? $bio : ''; ?></textarea>
                <br>
              <input type="submit" name="submit" id="submit" value="Salvar" style="color: #ffffff; height: 40px; width: 80px; border: solid 1px #BC18E6; background-color: #3f2f61; margin-top: 10px; border-radius: 5px;">
            </form>
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
    
      <script>
       const uploadForm = document.getElementById('uploadForm');
  const fileInput = document.getElementById('fileInput');
  const profileImage = document.getElementById('profileImage');

  uploadForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(uploadForm);

    fetch(uploadForm.action, {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        profileImage.src = data.filePath; // Atualiza o src da imagem com o novo caminho
      } else {
        console.log(data.message);
      }
    })
    .catch(error => {
      console.log('Erro ao fazer upload da imagem:', error);
    });
  });



      </script>
      <!--JavaScript-->
      <script src="js/main.js"></script>
        <!--BOOTSTRAP JS-->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </div>
    </body>
</html>