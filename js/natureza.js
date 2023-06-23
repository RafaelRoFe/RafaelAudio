// PLAYER DE SONS
let musicas = [

    {titulo:'rain', artista:'DeftFunk', src:'musicas/rain.mp3',  img:'imagens/chuva.jpg'},
    {titulo:'floresta', artista:'MiT', src:'musicas/floresta.mp3',  img:'imagens/floresta.jpg'},
    {titulo:'agua', artista:'RoFe', src:'musicas/agua.mp3', img:'imagens/agua.jpg'},
    {titulo:'lava', artista:'blackout', src:'musicas/lava.mp3',  img:'imagens/lava.jpg'}

  ];
  
  let musica = document.querySelector('audio');
  let indexMusica = 0;
  
  let duracaoMusica = document.querySelector('.fim');
  let imagemMusica = document.getElementById('imagem-musica');
  let nomeMusica = document.querySelector('.descricao h2');
  let nomeArtista = document.querySelector('.descricao i');
  
  renderizarMusica(indexMusica);
  
  // Eventos
  document.querySelector('.botao-play').addEventListener('click', tocarMusica);
  
  document.querySelector('.botao-pause').addEventListener('click', pausarMusica);
  
  musica.addEventListener('timeupdate', atualizarBarra);
  
  document.querySelector('.anterior').addEventListener('click', () => {
    indexMusica--;
    if (indexMusica < 0) {
        indexMusica = 5;
    }
    renderizarMusica(indexMusica);
  });
  
  document.querySelector('.proxima').addEventListener('click', () => {
    indexMusica++;
    if (indexMusica > 5){
        indexMusica = 0;
    }
    renderizarMusica(indexMusica);
  });
  
  // Funções
  
  
  
  function renderizarMusica(index){
    musica.setAttribute('src', musicas[index].src);
    musica.addEventListener('loadeddata', () => {
        nomeMusica.textContent = musicas[index].titulo;
        nomeArtista.textContent = musicas[index].artista;
        imagemMusica.src = musicas[index].img;
        duracaoMusica.textContent = segundosParaMinutos(Math.floor(musica.duration));
    });
  }
  
  function tocarMusica(){
    musica.play();
    document.querySelector('.botao-pause').style.display = 'block';
    document.querySelector('.botao-play').style.display = 'none';
  }
  
  function pausarMusica(){
    musica.pause();
    document.querySelector('.botao-pause').style.display = 'none';
    document.querySelector('.botao-play').style.display = 'block';
  }
  
  function atualizarBarra(){
    let barra = document.querySelector('progress');
    barra.style.width = Math.floor((musica.currentTime / musica.duration) * 100) + '%';
    let tempoDecorrido = document.querySelector('.inicio');
    tempoDecorrido.textContent = segundosParaMinutos(Math.floor(musica.currentTime));
  }
  
  function segundosParaMinutos(segundos){
    let campoMinutos = Math.floor(segundos / 60);
    let campoSegundos = segundos % 60;
    if (campoSegundos < 10){
        campoSegundos = '0' + campoSegundos;
    }
  
    return campoMinutos+':'+campoSegundos;
  }