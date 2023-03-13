<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Skvelyden2023 - Nejlepší a zajímavé hry pro vaši zábavu">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Skvelyden2023 - Nejlepší a zajímavé hry pro vaši zábavu</title>
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
          <p class="popup__text">Naše hry jsou určeny pro DOSPĚLÉ publikum ve věku 18 a více let. Kliknutím na
            tlačítkem potvrdíte svůj věk.</p>
          <button class="popup__button">Souhlasit</button>
        </div>
      </section>
      <section class="main">
        <div class="main__container container">
          <div class="main__descr">
            <h1 class="main__title">
              Nejlepší a zajímavé hry pro vaši zábavu
            </h1>
            <p class="main__text">
              <span>Hry nabízené na webu neumožňují uživatelům vyhrát skutečné peníze.</span>
              Tato stránka neposkytuje uživatelům dovednosti, které lze využít ve skutečném hazardu. Hry
              jsou dostupné uživatelům starším 18 let.
            </p>
            <a class="main__link" href="#games">
              Hrát si
            </a>
          </div>
          <div class="main__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.png" loading="lazy" width="300" height="300" alt="Image">
            </picture>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            O nás
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <p class="about__text">
                Pokud chcete hrát zdarma bez registrace, jste na správném místě! U nás k tomu máte možnost
                vyzkoušejte více než 1000 různých her bez registrace a zcela zdarma.
              </p>
              <p class="about__text">
                Na našem webu máte jedinečnou možnost hrát hry od nejlepších výrobců 100% zdarma a bez
                zaregistrujte se přímo ve svém prohlížeči.
              </p>
              <p class="about__text">
                Díky tomu jste o krok napřed před většinou německých her, protože si často musíte zaregistrovat účet a
                někdy si dokonce stáhnout software, než budete moci
                hrát své oblíbené hry zdarma.
              </p>
              <p class="about__text">
                Také výběr her zdarma je často omezený, pouze u jednoho nebo dvou výrobců
                nabízí hry na výběr.
              </p>
              <p class="about__text">
                Na druhou stranu zde najdete automaty zdarma od Merkury, Novoline, Bally Wulff a dalších her, které
                znáte ze všech dobrých německých automatů.
              </p>
              <p class="about__text">
                Můžete si například zahrát zdarma jakýkoli automat Tip, Eye of Horus, Dolphin's Pearl nebo Book of Ra
                přímo na
                naše webové stránky a nemusíte se k tomu registrovat ani stahovat žádný software.
              </p>
            </div>
            <div class="about__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about.webp" type="image/webp">
                <img src="./img/about.png" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/icon.webp" type="image/webp">
                  <img src="./img/icon.jpg" loading="lazy" width="60" height="60" alt="Icon">
                </picture>
              </span>
              <h3 class="benefits__title">
                Není třeba stahovat
              </h3>
              <p class="benefits__text">
                Hrajte automaty přímo ve vašem prohlížeči
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/icon.webp" type="image/webp">
                  <img src="./img/icon.jpg" loading="lazy" width="60" height="60" alt="Icon">
                </picture>
              </span>
              <h3 class="benefits__title">
                Žádný registr
              </h3>
              <p class="benefits__text">
                Bezplatná hra nevyžaduje registraci a poskytnutí osobních údajů
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/icon.webp" type="image/webp">
                  <img src="./img/icon.jpg" loading="lazy" width="60" height="60" alt="Icon">
                </picture>
              </span>
              <h3 class="benefits__title">
                Nové příležitosti
              </h3>
              <p class="benefits__text">
                Můžete vyvinout nové taktiky pro různé hrací automaty
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-1.webp" type="image/webp">
                    <img src="./img/game-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                Juicy fruits
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-2.webp" type="image/webp">
                    <img src="./img/game-2.png" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Icy gems
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-3.webp" type="image/webp">
                    <img src="./img/game-3.png" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Lazy monkey
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