<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Wagner Pedro" />
    <!-- Arquivos CSS  -->
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/nav.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/login-banner.css" />
    <link rel="stylesheet" href="assets/css/cadastro-form-section.css">
    <link rel="stylesheet" href="assets/fonts/general.css" />
    <!-- Arquivos Js -->
    <script src="./assets/Js/slide.js" defer></script>
    <script src="assets/js/jquery-3.6.3.min.js" defer></script>
    <script src="assets/Js/header.js" defer></script>
    <script src="assets/Js/scrolTop.js" defer></script>
    <script src="assets/Js/menu.js" defer></script>
    <title>Cadastro</title>
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

    <!-- Navbar -->
    <nav class="nav">
      <div class="nav__container">
        <div class="nav__container__logo">
          <h1>BolsasAo</h1>
        </div>

        <ul class="nav__container__ul">
          <li>
            <a href="./index.html" rel="prev" target="_parent">Home</a>
          </li>
          <li>
            <a href="#noticias" rel="prev" target="_parent">Notícias</a>
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
          <img src="assets/icons/icon.png" alt="menu" />
        </div>
      </div>
    </nav>
    <!-- Fim Navbar -->

    <!-- banner Section  -->
    <section class="banner">
      <div class="slider-content">
        <div class="slide-box first">
          <img
            class="img-desktop"
            src="assets/images/students.jpg"
            alt="college estudents"
          />
          <img
            class="img-mobile"
            src="assets/images/students-mobile.jpg"
            alt="college estudents"
          />
        </div>
      </div>
    </section>
    <!-- Fim Section  -->

    <!-- form section -->
    <section id="form-section">
      <h1>Criar uma conta</h1>

      <form action="formhandle.php" method="post" class="form">
        <label for="emailtxt" class="form__label">Email</label><br />

        <input
          type="email"
          name="emailtxt"
          id="emailtxt"
          placeholder="exemplo@gmail.com"
          autofocus
          autocomplete="email"
          required class="form__input"
        />

        <label for="senhatxt" class="form__label">Palavra Passe</label>

        <input
          type="password"
          name="senhatxt"
          id="senhatxt"
          minlength="8"
          autocomplete="current-password"
          placeholder="mínimo 8 caracteres"
          required class="form__input"
        />

        <label for="senhatxt" class="form__label">Telefone</label>

        <input
          type="number"
          name="numerotxt"
          id="numerotxt"
          minlength="8"
          autocomplete="cc-number"
          placeholder="número de telefone actualizado"
          required class="form__input"
        />

        <input type="submit" value="cadastrar" name="submit" class="form__submit-buttom" />

        <div class="form__links">
          <a
            href="recuperar-senha.php"
            rel="next"
            target="_blank"
            class="links__first links--state-hover"
            >Esqueceu a senha</a
          >
          <a
            href="criar-conta.php"
            rel="next"
            target="_blank"
            class="links__second"
            >Criar conta</a
          >
        </div>
      </form>
    </section>
    <!-- Fim form section -->

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
              <label for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="exemple@dominio.com"
                required class="form__input"
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
