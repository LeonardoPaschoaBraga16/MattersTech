<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MattersTech - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./public/styles/home.css"/>
    <link rel="shortcut icon" href="public/assets/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
<body>

  <!-- MAIN SECTION -->
  <main id="content">

    <section class="container" id="welcome_section"> 
      <div class="modal_overlay" >
        <div id="welcome_box_text">
          <img id="welcome_logo" src="./public/assets/logo.png" alt="logo">
          <p>Seja bem vindo <?php echo $_SESSION['name']; ?></p>
          <a href="#start_section_1"><i class="fas fa-arrow-circle-down"></i></a>
        </div>
      </div>
    </section>

    <!--NAVIGATION BAR SECTION-->
    <nav id="nav">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn" id="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo" id="txt-nav">MattersTech</label>
      <ul id="ul">
        <li class="nav_link animatedlink"><a href="#start_section_1" id="ini">Início</a></li>
        <li class="nav_link animatedlink"><a href="#start_section_2" id="mat">Matérias</a></li>
        <li class="nav_link animatedlink"><a href="#start_section_3" id="sob">Sobre</a></li>
        <li class="nav_link animatedlink"><a href="#matterstech-about" id="cnt">Contatar</a></li>
        <li class="nav_link"><a href="perfil.php" id="perfil"><i class="fas fa-user-circle"></i></a></li>
      </ul>
    </nav>  
        
    <!--MAIN ARTICLE SECTION-->
    <section id="start_section_1">
      <div id="start_section_1_banner">
        <h2 id="section_1_title">Sistemas Embarcados <br> no Setor Automotivo</h2>
        <p id="section_1_subtitle">Matéria Em Destaque. Acesse já! </p>
        <a id="main_article_link" href="./matters/sistemas_embarcados_no_automobilismo/index.php">ACESSAR</a>
      </div>
     
      <p id="lorem">
      Essa semana vamos falar sobre Sistemas Embarcados no Setor Automotivo, um tema muito importante
      que vem mudando a forma como percebemos a tecnologia. Um futuro que antes parecia distante,
      hoje está mais perto do que nunca. Os famosos Teslas são prova disso, porém temos muito caminho
      a percorrer. Por tanto, aqui vamos apresentar os principais pontos dessa integração e como os 
      sistemas Embarcados beneficia não só essa área como muitas outras, afinal, como esses veículos
      podem ser tão inteligentes e autônomos da interação humana?. Para melhor entendimento do tema, atribuímos
      não só esse tema central, mas temas secundários muito importantes que englobam todo esse universo.
      Para acessar os artigos, vá para a seção em destaque abaixo e não esqueça de deixar seu feedback
      para apoiar nosso trabalho.
      </p>
    </section>

    <!--SlIDE SECTION-->
    <section id="start_section_2">
      <div class="slideshow-container">
        <!-- ARTICLE SLIDE 1-->
        <div class="mySlides fade">
          <div class="slides_texts">
            <h2 class="slides_title">A Nova Cara da Tecnologia</h2>
            <p class="slide_little_text">Sistemas Embarcados e sua influencia no Setor Automotivo</p>
            <a class="slide_link_to_article" href="matters/sistemas_embarcados_no_automobilismo/index.php">Acesse Já</a>
          </div>
          <div class="slide_image_article">
            <img class="slide-image" src="public/assets/holo-car.jpg" alt="Carro Holográfico" >
          </div>
        </div>
        <!-- ARTICLE SLIDE 2-->
        <div class="mySlides fade">
          <div class="slides_texts">
            <h2 class="slides_title">Origem dos Sistemas Embarcados</h2>
            <p class="slide_little_text">Descubra aqui como surgiu esses dispositivos que transformaram o mundo da tecnologia</p>
            <a class="slide_link_to_article" href="matters/origem_dos_sistemas_embarcados/index.php">Acesse Já</a>
          </div>
          <div class="slide_image_article">
            <img class="slide-image" src="public/assets/se.jpg" alt="Sistemas Embarcados" >
          </div>
        </div>
        <!-- ARTICLE SLIDE 3-->
        <div class="mySlides fade">
          <div class="slides_texts">
            <h2 class="slides_title">Computação Ubíqua</h2>
            <p class="slide_little_text">Dispositivos Inteligentes que rodeiam nossas vidas e automatizam nossas tarefas</p>
            <a class="slide_link_to_article" href="matters/computacao_ubiqua/index.php">Acesse Já</a>
          </div>
          <div class="slide_image_article">
            <img class="slide-image" src="public/assets/seguranca.jpg" alt="seguranca" >
          </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
        <br>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <!--ABOUT SECTION-->
    <section  id="start_section_3">
      <div id="about-text">
        <h2>Matterstech</h2>
        <p>A Matterstech é uma equipe de estudante, programadores e apaixonados pelo aprendizado. Aqui
        não postamos apenas conteúdo sobre tecnologia, mas compartilhamos todo nosso conhecimento. Nova no mercado a
        Matterstech pretende contribuir com o Ensino a distância atribuíndo assim conteúdos de valor para todos os 
        interessados na área da tecnologia (uma área que promete crescer cada vez mais). Além disso esse trabalho
        tem por finalidade o desenvolvimento de um projeto Interdisciplinar na Etec de Carapicuíba. Evoluíndo assim
        no curso de Desenvolvimento de Sistemas para melhor desempenho em nosso TCC no ano de 2022.
        </p>
      </div>
      <div id="about-team">
        <h2>Equipe</h2>
        <ul>
          <li>
            <img src="./public/assets/Leonardo.png" alt="Leonardo - Programador e Pesquisador"/>
            <p>Leonardo</p>
            <div id="leo_card" class="team_card">
              <div class="team_card_icons">
                <i class="fas fa-code"></i>
                <i class="fas fa-pencil-ruler"></i>
                <i class="fas fa-search"></i>
              </div>
              <p>Leonardo - Estudante da Etec de Carapicuíba. Cursando Atualmente 2° Módulo
                do curso de Desenvolvimento de Sistemas. Nesse projeto desenvolveu com êxito
                atividades de programação, pesquisas e wireframes.
              </p>
              <br/>
              <p>Linguagens: <i class="fab fa-html5"></i> HTML5 &  <i class="fab fa-css3"></i> CSS3 <i class="fas fa-file-word"></i> WORD <i class="fab fa-figma"></i> FIGMA</p>
            </div>
          </li>

          <li>
            <img src="./public/assets/Kaua.png" alt="Kauã - Programador e pesquisador"/>
            <p>Kauã</p>
            <div id="kaua_card" class="team_card">
              <div class="team_card_icons">
                <i class="fas fa-code"></i>
                <i class="fas fa-search"></i>
              </div>
            
              <p>Kauã - Estudante da Etec de Carapicuíba. Cursando Atualmente 2° Módulo
                do curso de Desenvolvimento de Sistemas. Nesse projeto desenvolveu com êxito
                atividades de criação de Banco de Dados e Pesquisa
              </p>
              <br/>
              <p>Linguagens: <i class="fab fa-php"></i> PHP &  <i class="fas fa-database"></i> MySQL <i class="fas fa-file-word"></i> WORD <i class="fab fa-figma"></i> FIGMA</p>
            </div>
          </li>

          <li>
            <img src="./public/assets/Matheus.png" alt="Matheus - Pesquisador"/>
            <p>Matheus</p>
            <div id="matheus_card" class="team_card">
              <div class="team_card_icons">
                <i class="fas fa-search"></i>
                <i class="fas fa-pencil-ruler"></i>
              </div>
              <p>Matheus - Estudante da Etec de Carapicuíba. Cursando Atualmente 2° Módulo
                do curso de Desenvolvimento de Sistemas. Nesse projeto desenvolveu com êxito
                atividades de pesquisa e elaboração do Layout.
              </p>
              <br/>
              <p>Linguagens: <i class="fas fa-file-word"></i> WORD &  <i class="fab fa-figma"></i> FIGMA</p>
            </div>
          </li>

          <li>
            <img src="./public/assets/Lucas.png" alt="Lucas - Programador e Pesquisador"/>
            <p>Lucas</p>
            <div id="lucas_card" class="team_card">
              <div class="team_card_icons">
                <i class="fas fa-code"></i>
                <i class="fas fa-search"></i>
                <i class="fas fa-pencil-ruler"></i>
              </div>
              <p>Lucas - Estudante da Etec de Carapicuíba. Cursando Atualmente 2° Módulo
                do curso de Desenvolvimento de Sistemas. Nesse projeto desenvolveu com êxito
                atividades de programação e pesquisa.
              </p>
              <br/>
              <p>Linguagens: <i class="fab fa-html5"></i> HTML5 <i class="fab fa-css3"></i> CSS3 <i class="fas fa-file-word"></i> WORD <i class="fab fa-figma"></i> FIGMA</p>
            </div>
          </li>

          <li>
            <img src="./public/assets/Victor.png" alt="Victor - Programador e Pesquisador"/>
            <p>Victor</p>
            <div id="victor_card" class="team_card">
              <div class="team_card_icons">
                <i class="fas fa-code"></i>
                <i class="fas fa-search"></i>
                <i class="fas fa-pencil-ruler"></i>
              </div>
              <p>Victor - Estudante da Etec de Carapicuíba. Cursando Atualmente 2° Módulo
                do curso de Desenvolvimento de Sistemas. Nesse projeto desenvolveu com êxito
                atividades de programação e pesquisa.
              </p>
              <br/>
              <p>Linguagens: <i class="fab fa-php"></i> PHP &  <i class="fas fa-database"></i> MySQL <i class="fab fa-html5"></i> HTML5 &  <i class="fab fa-css3"></i> CSS3 <i class="fab fa-figma"></i> FIGMA</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section id="help">
      <p>Precisa de Ajuda?</p>
      <a href="./manual.pdf" target="_blank"> Veja nosso manual</a>
    </section>
  </main>
  
  <!-- FOOTER SECTION-->
  <footer>
    <!-- Section 1-->
    <div id="matterstech-about">
      <div class="titles-footer">
        <img src="./public/assets/logo.png" alt="logo"/>
        <h2>Matterstech</h2>
      </div>
      <div id="matterstech-about-text">
        <p>Site Interdisciplinar do 2° Ano do Curso de Desenvolvimento de Sistemas da Etec de Carapicuíba.
        Temos como principal objetivo contribuir com a educação e conhecimento sobre o mundo da tecnologia.
        Inscreva-se já e fique por dentro das mudanças que ocorrem diariamente</p>
      </div>
    </div>
    <!-- Section 2-->
    <div id="matterstech-contatos">
      <div class="titles-footer">
        <h2>Contatos</h2>
      </div>
      <div id="matterstech-contatos-texts">
        <!-- Whatsapp -->
        <div class="contact">
        <i class="fas fa-envelope"></i>
          <p>matterstech01@gmail.com</p>
        </div>
        <!-- Twitter -->
        <div class="contact">
          <i class="fab fa-twitter"></i>
          <a href="https://twitter.com/MattersTech1" target="_blank">MattersTech1</a>
        </div>
        <!-- Instagram -->
        <div class="contact">
          <i class="fab fa-instagram"></i>
          <a href="https://www.instagram.com/matterstech_interdisciplinar/" target="_blank">@matterstech</a>
        </div>
        <!-- Facebook -->
        <div class="contact">
          <i class="fab fa-facebook"></i>
          <a href="https://www.facebook.com/MattersTech-102224282293906/?ref=page_internal" target="_blank">matterstech</a>
        </div>
      </div>
    </div>
    <!-- Section 3-->
    <div id="matterstech-inter">
      <div class="titles-footer">
        <h2>Interdisciplinar</h2>
      </div>
      <div id="matterstech-inter-text">
        <p>Trabalho apresentado no 2° Ano
          do curso de Desenvolvimento de Sistemas
          da Etec de Carapicuíba
        </p>
        <br/>
        <p>Matéria base: Sistemas Embarcados</p>
        <p>Mentor: Profº Wesley Castanha</p>
        <br/>
        <p>&copy;Matterstech 2021</p>
      </div>
    </div>
  </footer>

  <script>
    //Scroll Suave
    $('.animatedlink a, #welcome_section a').click(function(e){
      e.preventDefault();
      let id = $(this).attr('href'),
        targetOffset = $(id).offset().top,
        menuHeight = $('nav').innerHeight();

        $('html, body').animate({
          scrollTop: targetOffset - menuHeight - 30
        }, 500);
    })
  </script>
  <script>
    //Fixar navbar
    let widthPage = {w: window.innerWidth};
    let widthSaved =  JSON.parse(localStorage.getItem("widthPage"));

    if(localStorage.getItem("elcoordenadas") === null ||  widthSaved === null || widthPage.w !== widthSaved.w){
      let el = document.getElementById('nav');
      localStorage.setItem("elcoordenadas", JSON.stringify({y: el.getBoundingClientRect().y}));

      localStorage.setItem("widthPage", JSON.stringify(widthPage))
    }
    let {y} = JSON.parse(localStorage.getItem('elcoordenadas'));

    $(function(){   
      var nav = $('#nav');   
      $(window).scroll(function () { 
          if ($(this).scrollTop() > y) { 
              nav.addClass("nav-fixo");
              $('body').css('padding-top', 70);
          } else { 
              nav.removeClass("nav-fixo"); 
              $('body').css('padding-top', 0);
          } 
      });  
    });
  </script>
  <script src="src/slideSection.js"></script>
  <script src="./src/toggleMenu.js"></script>
  <script src="./src/toggleInfoTeam.js"></script>
</body>
</html>

<?php 
}else{
  header("Location: index.php");
  exit();
}
?>