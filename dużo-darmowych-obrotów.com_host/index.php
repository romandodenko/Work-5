<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dużo-darmowych-obrotów - Hilton Warsaw City">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/VarelaRound-Regular.woff" as="font" type="font/woff" crossorigin>
  <link rel="preload" href="./fonts/VarelaRound-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Verdana-Regular.woff" as="font" type="font/woff" crossorigin>
  <link rel="preload" href="./fonts/Verdana-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/VollkornSC-Black.woff" as="font" type="font/woff" crossorigin>
  <link rel="preload" href="./fonts/VollkornSC-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/VollkornSC-Bold.woff" as="font" type="font/woff" crossorigin>
  <link rel="preload" href="./fonts/VollkornSC-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Dużo-darmowych-obrotów - Hilton Warsaw City</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title">
              <span>Pobyt pierwszej klasy w hotelu pierwszej klasy</span>
              Hilton Warsaw City
            </h1>
            <a class="hero__link" href="#about">
              O hotelu
              <img src="./img/arrow.svg" loading="lazy" width="15" height="8" alt="Arrow">
            </a>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.jpg" loading="lazy" width="300" height="300" alt="Image">
            </picture>
          </div>
        </div>
      </section>
      <section class="obiekty">
        <div class="container">
          <h2 class="obiekty__title">
            Nasze obiekty
          </h2>
          <ul class="obiekty__list">
            <li class="obiekty__item">
              <span class="obiekty__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="obiekty__text">
                Pokoje łączone
              </p>
            </li>
            <li class="obiekty__item">
              <span class="obiekty__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="obiekty__text">
                Pokoje dla niepalących
              </p>
            </li>
            <li class="obiekty__item">
              <span class="obiekty__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="obiekty__text">
                Klucz cyfrowy
              </p>
            </li>
            <li class="obiekty__item">
              <span class="obiekty__icon">
                <img src="./img/icon-4.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="obiekty__text">
                Concierge
              </p>
            </li>
            <li class="obiekty__item">
              <span class="obiekty__icon">
                <img src="./img/icon-5.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="obiekty__text">
                Salon Executive
              </p>
            </li>
            <li class="obiekty__item">
              <span class="obiekty__icon">
                <img src="./img/icon-6.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="obiekty__text">
                Restauracja na miejscu
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__wrapper-image" data-da=".about__descr-top, 991, first">
            <div class="about__image about__image_1" data-da=".about__images, 600, first">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                <img src="./img/about-1.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
          <div class="about__descr">
            <div class="about__descr-top">
              <div class="about__head">
                <h2 class="about__title">
                  O hotelu
                </h2>
                <p class="about__text about__text_2">
                  5-gwiazdkowy wypoczynek w luksusowym hotelu w sercu warszawskiej dzielnicy finansowej. W pobliżu
                  znajduje się Rynek Starego Miasta, Zamek Królewski w Warszawie oraz Muzeum Powstania Warszawskiego.
                  Hotel posiada wszystkie udogodnienia pokoju, a także obszerne sale konferencyjne, a także basen, saunę
                  i
                  łaźnię parową.
                </p>
              </div>
            </div>
            <div class="about__bottom">
              <div class="about__images" data-da=".about__head, 991, last">
                <div class="about__image about__image_2">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                    <img src="./img/about-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </div>
              </div>
              <div class="about__bottom-descr">
                <p class="about__text">
                  Hotel znajduje się 1,5 km od Muzeum Powstania Warszawskiego. W pobliżu znajduje się kolej i The View.
                  Warszawa jest popularna ze względu na atrakcje takie jak Warta Tower. Dla wygody gości oferowane są
                  Wi-Fi, ekspres do kawy i sejf. Są one wyposażone w eleganckie meble.
                </p>
                <p class="about__text">
                  Hotel Holiday Inn – Warsaw City Centre, An Ihg codziennie rano serwuje świeżo przygotowane śniadanie w
                  formie bufetu. Kilka restauracji znajduje się 5 minut spacerem od obiektu, w tym Bar Mleczny Śmietanka
                  Towarzyska i Sushi King.
                </p>
                <p class="about__text">
                  Skoncentrowany na potrzebach gości hotel oferuje zajęcia fitness i centrum fitness.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="restauracja" id="restauracja">
        <div class="restauracja__container container">
          <div class="restauracja__images">
            <div class="restauracja__image restauracja__image_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/image-1.webp" type="image/webp">
                <img src="./img/image-1.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
            <div class="restauracja__image restauracja__image_2">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/image-2.webp" type="image/webp">
                <img src="./img/image-2.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
          <div class="restauracja__descr">
            <h2 class="restauracja__title">
              Restauracje i napoje
            </h2>
            <p class="restauracja__text">
              Najbardziej kolorowe dania i wykwintna kuchnia, w najlepszych polskich tradycjach. Klasyczne i oryginalne
              koktajle w Pistaccio Lobby Lounge Bar zachwycą Cię. Latem restauracja Piazza serwuje posiłki i kebaby
              mięsne na odkrytym tarasie.
            </p>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>