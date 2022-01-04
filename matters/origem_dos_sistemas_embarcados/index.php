<!DOCTYPE html>
<html lang="pt-br">
<html class="html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Origem dos SEs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/icons/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./index.css"/>
    <link rel="shortcut icon" href="./imgs/logo.png " type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v12.0" nonce="ocSwcnmo"></script>
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
        <h1>A Origem dos Sistemas</br>Embarcados</h1>
        <div id="article_source">
          <p>Martterstech - Articles</p>
          <img src="./imgs/logo.png" alt="logo"/>
          <p>16/11/2021</p>
        </div>
      </div>

      <div id="article_image">
        <img src="./imgs/sistema-embarcado.png" alt="tema">
      </div>
    </div>

    <div id="text_article">
      <div id="texts">
        <h2>O Que São?</h2>
        <p>Um sistema embarcado (ou sistema embutido) é um sistema inteiro
          em um tamanho extremamente pequeno, no qual é feito desse jeito
          justamente para que se possa ser aplicado em objetos como bicicletas,
          roupas e até portas. O computador é completamente dedicado ao
          dispositivo ou sistema que ele controla.  
          Um sistema integrado utiliza um processador de baixo consumo
          de energia barata com uma quantidade limitada de memória RAM para
          executar uma ou duas funções especializadas. 
        </p>
        </br> 
        <h2>Como Funcionam?</h2>
        <p>São utilizados em projetos de sistemas eletrônicos, tendo como principal
           função a execução de uma aplicação, ou conjunto de aplicações, relacionadas
           como um único sistema. Isto é, existe um programa que é embutido no micro
           controlador e que interage com o meio externo. Considerando isso, tais
           sistemas são chamados de sistemas eletrônicos embarcados. 
        </p>
        <br/>
        <p>O micro controlador pode ser visto como uma caixa preta, em que as entradas
          são fornecidas ao sistema, processadas, e por fim geram uma ação, representada
          pelas saídas. Nesse cenário, entradas e saídas representam elementos como: sensores,
          atuadores, dispositivos de comunicação, dispositivos de interface gráfica, entre outros. 
       </p>
        </br>
        <p>Micro controladores apresentam diversos terminais com funções variadas:</p>
      </br>
        <ul>
          <li><h3>Alimentação</h3><p>Para que os micros controladores funcionem é
            preciso uma fonte de tensão contínua que atenda aos requisitos elétricos
            do dispositivo. Dependendo do encapsulamento do chip, e das características
            do micro controlador, um ou mais terminais devem ser conectados na fonte.</p>
          </li>

          <li><h3>Reset</h3><p>A função principal desse pino é reiniciar o micro controlador,
            isto é, definir um estado conhecido – lembre-se que é circuito digital sequencial
            – para iniciar a execução do programa armazenado na memória. Esse pino também é
            utilizado para funções de programação do dispositivo.</p>
          </li>

          <li><h3>Controlados por periféricos</h3><p>Podem ser usados como entradas e saídas
            de propósito geral. Ou ainda, exercer uma função específica em um periférico do
            micro controlador. Diversos micro controladores apresentam terminais com funções
            multiplexadas e podem assumir diferentes funções dependendo da configuração realizada. </p>
          </li>

          <li><h3>Analógicos</h3><p>Alguns periféricos do micro controlador atuam com sinais
            analógicos. Por exemplo, comparadores analógicos e conversores de sinais (A/D ou D/A). </p>
          </li>

          <li><h3>Clock</h3><p>As operações executadas pelo processador são governadas por um sinal
            de sincronismo, denominado clock. O sinal de sincronismo pode ser gerado internamente ou
            externamente. Externamente, o modo mais comum de gerar esse sinal é com a utilização de
            circuitos eletrônicos em conjunto com elementos piezoelétricos, formando um sistema
            chamado de oscilador Pierce. Em geral, tais sistemas utilizam cristal de quartzo ou 
            ressonador cerâmico como oscilador. </p>
          </li>
        </ul>
        
        </br>
        <h2>Periféricos de Microcontroladores </h2>
        <p>Todo microcontrolador possui internamente uma seleção de periféricos que podem
          variar em quantidade e complexidade: 
        </p>
      </br> 

      <h4>Complexidade: Nível Baixo</h4>
      <ol>
        <li>Conversor de sinal (D/A e A/D);</li>
        <li>Comparador analógico;</li>
        <li>Barramentos: I2C, SPI, CAN;</li>
        <li>Temporizadores e contadores;</li>
        <li>Watchdog;</li>
        <li>Interface serial assíncrona e síncrona.</li>
      </ol>

      <h4>Complexidade: Nível Médio</h4>
      <ol>
        <li>USB;</li>
        <li>IrDA cde alta velocidade;</li>
        <li>Ethernet;</li>
        <li>Controlador de memória: SRAM externa.</li>
      </ol>

      <h4>Complexidade: Nível Alto</h4>
      <ol>
        <li>Unidade de gerenciamento de memória (MMU);</li>
        <li>Barramento PCI e PCIe; </li>
        <li>Codificadores e decodificadores de vídeo;</li>
        <li>Controlador de memória: DRAM/SDRAM externa. </li>
      </ol>

      <br/>

      <p>Para manter o programa armazenado, micro controladores possuem memória
        não volátil do tipo Flash. Alguns ainda integram uma EEPROM, sendo que é
        usada para manter dados de configuração da aplicação, por exemplo, dados 
        de calibração. Já os dados são carregados em memória volátil do tipo SRAM
        durante a inicialização do programa. A memória pode ser definida como um 
        conjunto de elementos que armazenam informação. Em uma memória semicondutora,
        o elemento básico é chamado célula de memória. A célula de memória é capaz de
        armazenar a informação de 1 bit, isto é, apresenta dois estados estáveis, 1 ou 0.
        Além disso, deve possibilitar que a informação seja definida (gravada)
        e verificada (lida).
      </p>

      <div class="text_image">
        <img src="./imgs/CelMemoria.png" alt="célula de memória"/>
      </div>
      
      <p>O conjunto de células de memória formam uma palavra. De modo geral,
        a memória consiste de um grupo de palavras, sendo cada uma identificada
        de maneira unívoca por um endereço. Uma característica da palavra é a sua
        capacidade de armazenar informação, isto é, a quantidade de bytes – ou bits
        – que a palavra representa. 
      </p>
      <br/>
      <h2>História</h2>
      <p>
        O primeiro sistema embarcado que se tem conhecimento é o AGC (Apollo Guidance Computer).
        Era um computador que operava a 1,024 MHz e era responsável pelo total controle das
        espaçonaves Apollo, que levaram diversas vezes o homem á Lua nos anos 60 e 70. O AGC,
        no entanto, não possuía processador, era todo feito com portas NOR. 
        O segundo sistema de computação embarcada foi construído em 1961 para Minuteman,
        um míssil balístico intercontinental da Força Aérea dos EUA. O sistema de orientação
        inercial para o míssil foi construído com transistores e portas lógicas. Coisa um tanto
        inovadora na época. 
      </p>
      <br/>
      <p>Sistemas embarcados entraram no mercado comercial na década de 1980, devido à integração
        de "sistemas -on- a-chip". Esses eram a combinação de: um microprocessador, memória RAM,
        controladores de entrada /saída e sistemas de controles com a função em pacote de circuito
        integrado. Eles são mais baratos, mas menos flexíveis que os computadores convencionais.
        Por causa de requisitos relacionados com a utilização de energia e restrições elétricas e
        de calendário apertado, a maioria dos sistemas embarcados permaneceram sistemas de 8 bits,
        mesmo quando o resto da computação mudou-se para o processamento de 16 bits ( com a 80386 )
        e processamento de 32 bits (com a Pentium ) . 
      </p>
      <br/>
      <p>
        A força motriz para sistemas embarcados costumavam vir de aplicações militares e de aviação.
        Começando na década de 1990 em diante, os motoristas que conduziam sistemas embarcados tinham
        cuidados de saúde para dispositivos diagnósticos integrados, tinham acesso a sistemas de
        entretenimento, movendo-se em direção a celulares e computadores de mão multiuso. Um aspecto
        chave que ajudou nessa mudança foi de que os processadores de 32 bits e as ferramentas de
        desenvolvimento fáceis de usar têm aumentado os poderes computacionais disponíveis, enquanto
        que muitas das restrições de energia elétrica caíram com a fabricação de CPUs modernas. 
      </p>
      <br/>

      <h2>No Brasil</h2>
      <p>Historicamente, no Brasil, o termo sistema embarcado passou a ser adotado a partir de 2007,
        quando no Wikipédia uma página foi criada definindo-o. Antes, esse tipo de sistema era chamado
        de eletrônicos de forma geral, portanto fora substituído pela tradução direta do inglês embedded
        system movido pelo interesse dos próprios engenheiros da área. 
      </p>
      <br/>

      <h2>Sistemas Embarcados Hoje</h2>
      <p>
        Hoje em dia os sistemas embarcados são indispensáveis, responsáveis pela automação de diversos
        eletrônicos sem contar a presença dele na criação de novos tipos de eletrônicos. Na tv temos
        sistemas embarcados, no celular temos sistemas embarcados, nos videogames, geladeiras, carros,
        e dependendo até em roupas temos sistemas embarcados, se fossemos colocar em termos de porcentagem
        aproximadamente 75% dos objetos de nosso dia a dia tem sistemas embarcados. E o mais interessante,
        é que os sistemas embarcados não são mais que nem os vistos antigamente, eles evoluíram e
        conseguiram criar uma nova categoria de tecnologia, a categoria “IOT” (Internet of things -
        Internet das coisas), e essa nova tecnologia é uma das responsáveis pela nova revolução
        tecnológica. 
      </p>
      
      </br>
      </br>
      </br>
      <h2> Comentários </h2>
      <div class="fb-comments" data-href="https://matterstech.000webhostapp.com/matters/origem_dos_sistemas_embarcados/index.php" data-width="" data-numposts="2"></div>
      <br/>
      <hr/>
      <br/>
      <h3>Referências</h3>
      <ul id="ref">
        <li><a href="https://pt.wikipedia.org/wiki/Sistema_embarcado" target="_blank">Sistema embarcado - Wikipedia</a></li>
        <li><a href="https://www.embarcados.com.br/sistema-embarcado/" target="_blank">Sistema Embarcado – O que é? Qual a sua importância? - Embarcados</a></li>
        <li><a href="http://ptcomputador.com/Ferragens/computer-drives-storage/47200.html" target="_blank">A História dos Sistemas Embarcados - PTComputador</a></li>
        <li><a href="https://www.embarcados.com.br/sistemas-embarcados-e-microcontroladores/" target="_blank">Introdução aos sistemas embarcados e microcontroladores - Embarcados</a></li>      
      </ul>
    </div>

      <div id="links_others_articles">
        <h3>Veja outras Matérias</h3>
        <div>
          <a href="../sistemas_embarcados_no_automobilismo/index.php">SE no Automobilismo <i class="fas fa-arrow-right"></i></a>
          <a href="../computacao_ubiqua/index.php">Computação Ubíqua<i class="fas fa-arrow-right"></i></a>
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