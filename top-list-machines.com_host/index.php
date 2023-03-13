<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Описание сайта">
  <meta name="keywords" content="Top-list-machines - Hrajte hry zdarma">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Top-list-machines - Hrajte hry zdarma</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="popup popup-active">
        <div class="popup__close"></div>
        <div class="popup__body">
          <h3 class="popup__title">
            Přijmout soubory cookie?
          </h3>
          <p class="popup__text">Pro zlepšení použitelnosti našich webových stránek používáme soubory cookie</p>
          <button class="popup__button">Rendben</button>
        </div>
      </section>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__descr">
              <h1 class="main__title">
                <span>Hráči, kteří chtějí hrát hry zdarma bez registrace, budou mít z čeho vybírat.</span>
                Hrajte hry zdarma
              </h1>
              <p class="main__text">
                <span>Hry nabízené na webu nedávají uživatelům šanci vyhrát skutečné peníze.</span>
                Stránka neposkytuje uživatelům dovednosti, které lze využít v reálném hazardu. Hry jsou dostupné pro
                uživatele starší 18 let.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="benq" id="benefits">
        <div class="container">
          <ul class="benq__list">
            <li class="benq__item">
              <span class="benq__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <h3 class="benq__text">
                Žádné riziko, hraním her neriskujete své prostředky
              </h3>
            </li>
            <li class="benq__item">
              <span class="benq__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <h3 class="benq__text">
                Ušetřete čas při hraní bez nutnosti registrace
              </h3>
            </li>
            <li class="benq__item">
              <span class="benq__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <h3 class="benq__text">
                Možnost neustále hrát demo hry bez obav o finance
              </h3>
            </li>
          </ul>
        </div>
      </section>
      <section class="say" id="about">
        <div class="say__container container">
          <div class="say__descr">
            <h2 class="say__title">
              O hrách zdarma
            </h2>
            <div class="say__wrapper-texts">
              <div class="say__texts">
                <p class="say__text">
                  Většina moderních softwarových platforem a webů bude mít určitě nějaké hry zdarma. Ale ve virtuálním
                  světě je rozmanitost demo her obrovská. Můžete otestovat téměř všechny hazardní hry, které jsou
                  prezentovány ve volném režimu, včetně zcela nových vydaných letos.
                </p>
                <p class="say__text">
                  Kromě her si ve volném režimu můžete vyzkoušet ruletu, ale i karetní a další hazardní hry. Všechny
                  jsou kvalitní a nejsou v žádném případě horší než hry, kde dávají bonus za registraci.
                </p>
                <p class="say__text">
                  Naše hry vám umožňují vstoupit a hrát zdarma v demo režimu bez SMS a založení na zdroji speciálního
                  účtu. Stačí pár kliknutí a užijte si plný přístup k nejlepším herním modelům!
                </p>
              </div>
              <p class="say__text say__text_width">
                I přes množství informací o tomto žánru hazardu je vždy lepší hry hodnotit v přímém kontaktu s nimi.
                Každý hráč má individuální vkus a pouze v režimu může používat jakýkoli automat, který se mu líbí, aniž
                by vkládal skutečné peníze. Při vstupu do bezplatné verze aplikace bez jakýchkoliv dotazů započítá
                uživateli počet demo kreditů stanovený pravidly, po jehož načtení začne přímá hra na automatech bez
                registrace a dodatečného ověření identity hráče. Výherní automaty se vám tak stanou mnohem bližší.
              </p>
            </div>
          </div>
          <div class="say__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/image.webp" type="image/webp">
              <img src="./img/image.png" loading="lazy" width="300" height="300" alt="Image">
            </picture>
          </div>
        </div>
      </section>
      <section class="plays" id="games">
        <div class="container">
          <h2 class="plays__title">
            Naše hry
          </h2>
          <ul class="plays__list">
            <li class="plays__item">
              <div class="plays__image">
                <a href="game-1.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-1.webp" type="image/webp">
                    <img src="./img/game-1.png" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="plays__link" href="game-1.php">
                Mysterious egypt
              </a>
              <a class="plays__play" href="game-1.php">
                Hrát si
              </a>
            </li>
            <li class="plays__item">
              <div class="plays__image">
                <a href="game-2.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-2.webp" type="image/webp">
                    <img src="./img/game-2.png" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="plays__link" href="game-2.php">
                Scarab temple
              </a>
              <a class="plays__play" href="game-2.php">
                Hrát si
              </a>
            </li>
            <li class="plays__item">
              <div class="plays__image">
                <a href="game-3.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-3.webp" type="image/webp">
                    <img src="./img/game-3.png" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="plays__link" href="game-3.php">
                Icy gems
              </a>
              <a class="plays__play" href="game-3.php">
                Hrát si
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>