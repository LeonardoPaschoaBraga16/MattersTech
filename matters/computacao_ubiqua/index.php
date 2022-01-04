<!DOCTYPE html>
<html lang="pt-br">
<html class="html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computação Ubíqua</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./index.css"/>
    <link rel="shortcut icon" href="./imgs/logo.png " type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v12.0" nonce="xdt9Kzuw"></script>
  </head>
<body>

  <!-- HEADER SECTION -->
  <header>
      <a href="../../home.php">VOLTAR <i class="fas fa-home"></i></a>
      <h2>MattersTech</h2>
  </header>

  <!-- MAIN SECTION -->
  <main id="content">
    <div id="article_header">

      <div id="article_title">
        <h1>Computação Ubíqua</h1>
        <div id="article_source">
          <p>Martterstech - Articles</p>
          <img src="./imgs/logo.png" alt="logo"/>
          <p>16/11/2021</p>
        </div>
      </div>

      <div id="article_image">
        <img src="./imgs/computacao_ubiqua.jpg" alt="tema">
      </div>
    </div>

    <div id="text_article">
      <div id="texts">

        <h2>O que é Computação Ubíqua?</h2>

        <p>Termo usado pela primeira vez pelo cientista de informática norte americano
          Mark Weiser (1952 — 1999) em 1988 e publicado em 1991 no seu artigo The Computer 
          for the 21st Century, para se referir a dispositivos conectados em todos os 
          lugares de forma tão transparente para o ser humano que acabaremos por não 
          perceber que eles estão lá.
        </p>

        <br/>

        <h3>Objetivo</h3>

        <p>O objetivo da computação ubíqua é tornar a interação entre o ser humano e o 
          computador invisível. Não invisível como se não pudesse ver, mas, sim de uma 
          forma que as pessoas nem percebam que estão dando comandos a um computador, 
          mas como se tivessem conversando com alguém. Além disso, os computadores 
          teriam sistemas inteligentes que estariam conectados ou procurando conexão o 
          tempo todo, dessa forma tornando-se assim onipresente. De smartphones, 
          tablets, televisões e computadores até porta-retratos, chaveiros, etiquetas 
          com RFID, canetas e outros objetos comuns, esses dispositivos estarão 
          permanentemente conectados à internet e através do envio e recebimento de 
          informações incorporarão nossos hábitos e assim se adaptarão a eles para 
          facilitar o nosso dia a dia.
        </p>

        <br/>

        <p>Assim, nosso cotidiano ficará muito mais produtivo, pois não teremos uma 
          interface única para obtermos uma notícia, termo ou conceito (como fazemos com o computador), 
          mas sim o faremos através do objeto mais próximo e ele retornará com o resultado de nossa 
          pesquisa. Alguns softwares que podem desenvolver tal ato são tecnologias como o Siri, do 
          iPhone, e Alexa. A Alexa por exemplo é um ótimo software de computação sensível a contexto, 
          essa tecnologia torna possível que os dispositivos possam capturar o contexto automaticamente. 
          O contexto nesse caso é a presença de uma pessoa ao espaço ou qualquer tipo de movimento corporal, 
          movimentação dos braços, dedos, cabeça, olhos e até movimentos faciais.
        </p>

        <br/>

        <p>Para tornar uma coisa que não seja perceptível, a computação ubíqua requer computadores 
          pequenos, baratos e tecnologias de ligação com ou sem fios a computadores de maior dimensão, 
          quando essa tecnologia de micro-controladores/processadores ficar tão avançada essa aplicação 
          de Sistemas Embarcados vai se tornar ainda maior em automóveis e irá surgir em roupas.
        </p>
      
        </br>
        </br>
        </br>
        <h2> Comentários </h2>
        <div class="fb-comments" data-href="https://matterstech.000webhostapp.com/matters/computacao_ubiqua/index.php" data-width="" data-numposts="2"></div>
        <br/>
        <hr/>
        <br/>
        <h3>Referências</h3>
        <ul id="ref">
          <li><a href="https://pt.wikipedia.org/wiki/Computa%C3%A7%C3%A3o_ub%C3%ADqua" target="_blank">Computação ubíqua</a></li>
          <li><a href="https://canaltech.com.br/produtos/O-que-e-Computacao-Ubiqua/" target="_blank">O que é Computação Ubíqua?</a></li>
        </ul>
      </div>

      <div id="links_others_articles">
        <h3>Veja outras Matérias</h3>
        <div>
          <a href="../sistemas_embarcados_no_automobilismo/index.php">SE no Automobilismo <i class="fas fa-arrow-right"></i></a>
          <a href="../origem_dos_sistemas_embarcados/index.php">Origem dos SEs <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    
    </div>
  </main>
    
  <!-- FOOTER SECTION-->
  <footer>
    <!-- Here will the code .... -->
  </footer>

  <script>

    let el = document.querySelector('#links_others_articles div');

    let elCoordenadas = el.getBoundingClientRect();

    $(function(){   
      var links = $('#links_others_articles div');   
      $(window).scroll(function () { 
          if ($(this).scrollTop() > elCoordenadas.y) { 
              links.addClass("links_others_articles-fixo");
             // $('body').css('padding-top', 70);
          } else { 
              links.removeClass("links_others_articles-fixo"); 
            //  $('body').css('padding-top', 0);
          } 
      });  
    });
  </script> 

</body>
</html>