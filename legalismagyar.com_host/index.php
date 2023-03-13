<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Legalismagyar - Élvezze az ingyenes játékot">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Legalismagyar - Élvezze az ingyenes játékot</title>
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
          <p class="popup__text">Játékainkat 18 év feletti FELNŐTT közönségnek szánjuk. A gombra kattintva gombbal
            megerősíti életkorát.</p><button class="popup__button">Egyetért</button>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                <span>Játssz teljesen ingyenesen oldalunkon</span>
                Élvezze az ingyenes játékot
              </h1>
              <p class="hero__text">
                Az oldalon kínált játékok nem adnak esélyt a felhasználóknak valódi pénzt nyerni.
                <span>Az oldal nem biztosít a felhasználóknak olyan készségeket, amelyeket valódi szerencsejátékban
                  lehetne használni. A játékok 18 éven felüli felhasználók számára érhetők el.</span>
              </p>
              <a class="hero__link" href="#games">
                Játékok
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__left">
            <h2 class="about__title">
              Rólunk
            </h2>
            <p class="about__text about__text_opacity">
              Lehetővé vált, hogy a legjobb és legszebb játékokat ingyen játsszuk a világ bármely pontjáról, ahol van
              internet-hozzáférés. Sok minden változik a világban, és mindig van helye valami újnak, és a számlákban a
              különféle újítások arra kényszerítik a modern oldalakat, hogy alkalmazkodjanak hozzájuk.
            </p>
          </div>
          <div class="about__right">
            <p class="about__text about__text_border">
              Sok minden változott, és a játékok jelenleg csak speciális zónákban érhetők el, amelyek sajnos nem olyan
              sokak. De ennek vannak előnyei, most az összes játék, amely egykor klubokban és üzletekben állt, elérhető
              az interneten. Oldalunkon a befizetés nélkül játszható játékok demóverziói találhatók. A készülékek
              katalógusa folyamatosan frissül, itt megtalálod a legújabb és legmodernebb játékokat, és virtuális pénzért
              teljesen ingyen játszhatsz velük.
              A weboldalunkon bemutatott összes szerencsejáték-automata tanúsítvánnyal rendelkezik, és megfelel a
              játékkal kapcsolatos legmagasabb követelményeknek és szabványoknak. Az interneten található összes
              játékban kipróbálható egy ingyenes játék.
            </p>
            <p class="about__text">
              Azt is nyugodtan kijelenthetjük, hogy minden ingyenes játék ugyanazokkal a funkciókkal és nyerési
              esélyekkel rendelkezik, mint a fizetős társaik. Összegyűjtöttük a legjobb online nyerőgépeket, amelyek
              szinte az összes modern online kaszinóban megtalálhatók az interneten. Játsszon új nyerőgépekkel
              regisztráció és SMS nélkül, és a szerencse kedvezhet Önnek.
            </p>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/icon-1.svg" loading="lazy" width="30" height="30" alt="Icon">
                </span>
              </div>
              <h3 class="benefits__title">
                Virtuális pénz
              </h3>
              <p class="benefits__text">
                Nincs szükség valódi pénzre, minden játék ingyenes és virtuális számlával működik.
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/icon-2.svg" loading="lazy" width="30" height="30" alt="Icon">
                </span>
              </div>
              <h3 class="benefits__title">
                Sok játék
              </h3>
              <p class="benefits__text">
                Minden játék más, más témájú. A játék testreszabható bármely játékos számára
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/icon-3.svg" loading="lazy" width="30" height="30" alt="Icon">
                </span>
              </div>
              <h3 class="benefits__title">
                Regisztráció nem szükséges
              </h3>
              <p class="benefits__text">
                Oldalunk nem kéri az Ön adatait. Az Ön adatai bizalmasak, és nem küldik sehova
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <h2 class="slots__title">
            Játékok
          </h2>
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-1.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-1.webp" type="image/webp">
                    <img src="./img/game-1.png" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="slots__link" href="game-1.php">
                Gems bonanza
              </a>
              <a class="slots__play" href="game-1.php">
                Játék
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-2.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-2.webp" type="image/webp">
                    <img src="./img/game-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="slots__link" href="game-2.php">
                Grand fruits
              </a>
              <a class="slots__play" href="game-2.php">
                Játék
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-3.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-3.webp" type="image/webp">
                    <img src="./img/game-3.jpg" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="slots__link" href="game-3.php">
                Fruits fury
              </a>
              <a class="slots__play" href="game-3.php">
                Játék
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