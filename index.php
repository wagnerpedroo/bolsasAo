<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Wagner Pedro">
    <!-- Arquivos CSS  -->
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/nav.css" />
    <link rel="stylesheet" href="assets/css/slider.css" />
    <link rel="stylesheet" href="assets/css/section-noticias.css" />
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/fonts/general.css">
    <!-- Arquivos Js -->
    <script src="./assets/Js/slide.js" defer></script>
    <script src="assets/js/jquery-3.6.3.min.js" defer></script>
    <script src="assets/Js/header.js" defer></script>
    <script src="assets/Js/scrolTop.js" defer></script>
    <script src="assets/Js/menu.js" defer></script>
    <title>Bolsas Ao</title>
  </head>
  <body>
    <!-- header -->
    <header class="header">

      <div class="header__div">

        <section class="header__div__sectionLeft">

          <div class="header__div__sectionLeft__contacts">
            <p>Contactos de suporto</p>
            <p>+244 999999999</p>
          </div>

          <address class="header__div__sectionLeft__address">
            <p>Nossa localização</p>
            <p>Angola, Luanda</p>
          </address>

          <div class="header__div__sectionLeft__addressEmail">
            <p>Contacto email</p>
            <p>info.bolsas@gmail.com</p>
          </div>

        </section>

        <section class="header__div__sectionRight">
          <a href="login.php" rel="next" target="_self">Login</a>
          <a href="cadastro.php" rel="next" target="_self">Cadastro</a>
        </section>

      </div>

    </header>
    <!-- Fim header -->

    <!-- Navbar -->
    <nav class="nav">

      <div class="nav__container">

        <div class="nav__container__logo">
          <h1>BolsasAo</h1>
        </div>

        <ul class="nav__container__ul">
          <li>
            <a href="./index.php" rel="next" target="_parent">Home</a>
          </li>
          <li>
            <a href="#noticias" rel="next" target="_parent">Notícias</a>
          </li>
          <li class="nav__container__ul__sub-menu">
            <a href="#" rel="next" target="_parent">Bolsas</a>
            <ul>
              <li>
                <a href="#" rel="next" target="_self">Disponíveis</a>
              </li>
              <li>
                <a href="#" rel="next" target="_self">Internas</a>
              </li>
              <li>
                <a href="#" rel="next" target="_self">Externas</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="sobre.html" rel="next" target="_parent">Sobre</a>
          </li>
        </ul>

        <div class="nav__container__search-box">
          <input
            type="text"
            name="search-box"
            id="search-box"
            placeholder="Que tipo de vaga procura?"
          />
        </div>

        <div class="menu">
          <img src="assets/icons/icon.png" alt="menu" >
        </div>

      </div>
    </nav>
    <!-- Fim Navbar -->

    <!-- caroulsel -->
    <section class="slider">
      <div class="slider__content">
        <input type="radio" name="btn-radio" id="radio1" class="slider__content__input"/>
        <input type="radio" name="btn-radio" id="radio2" class="slider__content__input"/>
        <input type="radio" name="btn-radio" id="radio3" class="slider__content__input"/>

        <div class="slide-box first">
          <img
            class="slide-box__img-desktop"
            src="assets/images/desktop-1800px/angola-full.jpg"
            alt="angola-flag"
          />
          <img
            class="slide-box__img-mobile"
            src="assets/images/mobile/angola-mobile.JPG"
            alt="mobile angola-flag"
          />
        </div>

        <div class="slide-box">
          <img
            class="slide-box__img-desktop"
            src="assets/images/desktop-1800px/portugal-full.jpg"
            alt="portugal-flag"
          />
          <img
            class="slide-box__img-mobile"
            src="assets/images/mobile/portugal-mobile.jpg"
            alt="mobile portugal-flag"
          />
        </div>

        <div class="slide-box">
          <img
            class="slide-box__img-desktop"
            src="assets/images/desktop-1800px/china-full.jpg"
            alt="china-flag"
          />
          <img
            class="slide-box__img-mobile"
            src="assets/images/mobile/china-mobile.jpg"
            alt="mobile china-flag"
          />
        </div>

        <div class="auto-nav">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>

        <div class="manual-nav">
          <label for="radio1" class="manual-nav__manual-btn"></label>
          <label for="radio2" class="manual-nav__manual-btn"></label>
          <label for="radio3" class="manual-nav__manual-btn"></label>
        </div>
      </div>
    </section>
    <!-- Fim caroulsel -->

    <!-- Section notícias -->
    <header class="no-inheritance" id="noticias">
      <div class="header-noticias">
        <h1>Notícias</h1>
        <a href="noticias-gerais.php" target="_self" rel="next"
          >Ver todas notícias</a
        >
      </div>
    </header>
    <section class="noticias">
      <main class="section-content" id="section-content">
        <div class="card">
          <div class="banner">
            <div class="info-container">
              <div class="info-content">
                <p>Resultados das candidaturas às Bolsas de Estudo Internas referente ao Ano Académico 2022-2023</p>
              </div>
            </div>
          </div>
          <div class="data-info">
            <img src="assets/images/Flag_of_Angola.svg.png" alt="angola icon">
            <time>Data da Publicação 23/02/2023</time>
          </div>
          <div class="card-container">
            <div class="card-content">
              <p>
                O Instituto Nacional de Gestão de Bolsas de Estudo (INAGBE), informa que estão disponíveis os resultados das candidaturas às Bolsas de Estudo Internas referente ao Ano Académico 2022-2023 no portal do...
              </p>
            </div>
          </div>
          <a href="#" rel="next" target="_self" class="card-btn">Ler mais</a>
          </div>
        </div>

        <div class="card">
          <div class="banner" id="banner2">
            <div class="info-container">
              <div class="info-content">
                <p>RESULTADOS DAS CANDIDATURAS APRESENTADAS AO PROGRAMA DE BOLSAS DE ESTUDO EXTERNA DO GOVERNO CHINÊS -</p>
              </div>
            </div>
          </div>
          <div class="data-info">
            <img src="assets/images/flag-of-china.png" alt="china icon">
            <time>Data da Publicação 10/02/2023</time>
          </div>
          <div class="card-container">
            <div class="card-content">
              <p>
                O Instituto Nacional de Gestão de Bolsas de Estudo (INAGBE), vem por este meio, informar aos candidatos que está disponível no site do INAGBE www.inagbe.gov.ao a Lista dos Candidatos Pré-seleccionados...
              </p>
            </div>
          </div>
          <a href="#" rel="next" target="_self" class="card-btn">Ler mais</a>
          </div>
        </div>

        <div class="card">
          <div class="banner" id="banner3">
            <div class="info-container">
              <div class="info-content">
                <p>EDITAL SOBRE O PROGRAMA DE BOLSAS DE ESTUDO DO GOVERNO HÚNGARO 2023-24</p>
              </div>
            </div>
          </div>
          <div class="data-info">
            <img src="assets/images/flag-of-italy.png" alt="italy icon">
            <time>Data da Publicação 02/02/2023</time>
          </div>
          <div class="card-container">
            <div class="card-content">
              <p>
                O Instituto Nacional de Gestão de Bolsas de Estudo (INAGBE), vem por este meio, comunicar aos estudantes, docentes universitários e ao público em geral, que estão abertas candidaturas à bolsa de estudos...
              </p>
            </div>
          </div>
          <a href="#" rel="next" target="_self" class="card-btn">Ler mais</a>
          </div>
        </div>
        
        <div class="card">
          <div class="banner" id="banner4">
            <div class="info-container">
              <div class="info-content">
                <p>A CANDIDATURA AO PROGRAMA DE ENVIO ANUAL DE 300 LICENCIADOS OU MESTRES COM ELEVADO DESEMPENHO E MÉRI</p>
              </div>
            </div>
          </div>
          <div class="data-info">
            <img src="assets/images/Flag_of_Angola.svg.png" alt="angola icon">
            <time>Data da Publicação 30/01/2023</time>
          </div>
          <div class="card-container">
            <div class="card-content">
              <p>
                O Ministério do Ensino Superior, Ciência, Tecnologia e Inovação vem, por este meio, tornar público que, de 30 de Janeiro a 31 de Março de 2023, estarão abertas as candidaturas às bolsas de estudo no âmbito do Programa de Envio Anual de 300 Licenciados/Mestres...
              </p>
            </div>
          </div>
          <a href="#" rel="next" target="_self" class="card-btn">Ler mais</a>
          </div>
        </div>
        
        <div class="card">
          <div class="banner" id="banner2">
            <div class="info-container">
              <div class="info-content">
                <p>CANDIDATURA AO PROGRAMA DE BOLSAS DE ESTUDO DO GOVERNO DA REPÚBLICA POPULAR DA CHINA 2023-2024</p>
              </div>
            </div>
          </div>
          <div class="data-info">
            <img src="assets/images/flag-of-china.png" alt="china icon">
            <time>Data da Publicação 28/11/2022</time>
          </div>
          <div class="card-container">
            <div class="card-content">
              <p>
                O Instituto Nacional de Gestão de Bolsas de Estudo (INAGBE), vem por este meio, comunicar aos estudantes, docentes universitários e ao público em geral, que está aberta a candidatura à bolsa de estudos...
              </p>
            </div>
          </div>
          <a href="#" rel="next" target="_self" class="card-btn">Ler mais</a>
          </div>
        </div>

        <div class="card">
          <div class="banner" id="banner5">
            <div class="info-container">
              <div class="info-content">
                <p>EDITAL STIPENDIUM HUNGARICUM PARA APLICAÇÃO 2023-2024</p>
              </div>
            </div>
          </div>
          <div class="data-info">
            <img src="assets/images/flag-of-china.png" alt="china icon">
            <time>Data da Publicação 15/11/2022</time>
          </div>
          <div class="card-container">
            <div class="card-content">
              <p>
                O Instituto Nacional de Gestão de Bolsas de Estudo (INAGBE), vem por este meio, comunicar aos estudantes, docentes universitários e ao público em geral, que está aberta a candidatura à bolsa de estudo...
              </p>
            </div>
          </div>
          <a href="#" rel="next" target="_self" class="card-btn">Ler mais</a>
          </div>
        </div>
      </main>
    </section>
    <!-- Fim Section notícias -->

    <!-- Footer -->
    <footer class="footer">
      <section class="footer__top">
        <div class="top__top-content">
          <div class="top-content__supporte">
            <h2>Supporte</h2>
            <p>Portal BolsasAo</p>
            <p>
              <small>+244 999999999/999999999</small>
            </p>
          </div>
          <div class="top-content__newsletter">
            <h2>Newsletter</h2>
            <p>
              Mantenha-se actualizado com nossas ofertas de <br />
              bolsas.
            </p>
            <form action="newsletter.php" method="POST">
              <label for="email">Teu e-mail:</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="exemple@dominio.com"
                required
              />
              <input type="submit" value="Subscreve" />
            </form>
          </div>
        </div>
      </section>
      <section class="bottom">
        <div class="bottom__bottom-content">
          <p>
            &copy;2023 <span class="destaque">BolsasAo</span> feito por wagner |
            All rights reserved
          </p>
          <button class="btn-move-top">
            <img
              src="assets/icons/btn-top.png"
              width="100"
              alt="up arrow"
              class="btn-top"
            />
          </button>
        </div>
      </section>
    </footer>
  </body>
</html>
