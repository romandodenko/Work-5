<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aamsplayslots - Intrattenimento del gioco d'azzardo">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Aamsplayslots - Intrattenimento del gioco d'azzardo</title>
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
          <form class="popup__form" action="/">
            <p class="popup__text">I nostri giochi sono destinati a un pubblico ADULTO dai 18 anni in su. Cliccando sul
              pulsante confermi la tua età.</p>
            <button class="popup__button">Essere d'accordo</button>
        </div>
      </section>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__descr">
              <h1 class="main__title">
                Intrattenimento del gioco d'azzardo
              </h1>
              <p class="main__text">
                <span>I giochi offerti sul sito web non danno agli utenti la possibilità di vincere soldi veri.</span>
                Il sito non fornisce agli utenti competenze che potrebbero essere utilizzate nel gioco d'azzardo reale.
                I giochi sono disponibili per gli utenti di età superiore ai 18 anni.
              </p>
              <a class="main__link" href="#games">
                Giocare
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="vantaggi" id="benefits">
        <div class="container">
          <h2 class="vantaggi__title title">
            Vantaggi
          </h2>
          <div class="vantaggi__content">
            <ul class="vantaggi__images">
              <li class="vantaggi__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/benefits-1.webp" type="image/webp">
                  <img src="./img/benefits-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
              <li class="vantaggi__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/benefits-2.webp" type="image/webp">
                  <img src="./img/benefits-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </li>
            </ul>
            <ul class="vantaggi__descr">
              <li class="vantaggi__descr-item">
                <h3 class="vantaggi__subtitle">
                  Tu giochi in casa
                </h3>
                <p class="vantaggi__text">
                  Non c'è bisogno di andare da nessuna parte, tutto ciò di cui hai bisogno è il tuo gadget e internet.
                  Alla ricerca di giochi reali in passato, ora è meglio giocare direttamente su Internet.
                </p>
              </li>
              <li class="vantaggi__descr-item">
                <h3 class="vantaggi__subtitle">
                  L'opportunità di provare il gioco gratuitamente
                </h3>
                <p class="vantaggi__text">
                  Sviluppa le tue strategie, hai un numero infinito di possibilità. Puoi giocare un tempo illimitato e
                  non preoccuparti
                </p>
              </li>
              <li class="vantaggi__descr-item">
                <h3 class="vantaggi__subtitle">
                  Gioco più divertente e migliore;
                </h3>
                <p class="vantaggi__text">
                  Giocare è molto più facile sapendo che ora stai giocando con i tuoi soldi e hai un numero infinito di
                  tentativi.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="say" id="about">
        <div class="container">
          <h2 class="say__title title">
            Chi siamo
          </h2>
          <div class="say__content">
            <div class="say__column say__column_1">
              <p class="say__text">
                Sebbene non si possa negare quanto siano entusiasmanti i cash game, non sono l'unico gioco in città.
                Puoi provare la stessa scarica di adrenalina ad ogni giro senza spendere un centesimo con i giochi
                gratuiti.
              </p>
            </div>
            <div class="say__column">
              <p class="say__text">
                Che tu giochi dal vivo, la stanza reale o virtuale è sempre dominata dai giochi gratuiti. Questo è forse
                il modo più popolare di giocare d'azzardo, principalmente perché non richiede abilità e offre un
                divertimento senza fine. Questi rulli rotanti possono essere ipnotizzanti anche se si fermano
                rapidamente. È facile capire perché i siti offrono centinaia di diversi giochi gratuiti. Che ti piaccia
                lo sport, i supereroi, le sirene, l'antico Egitto, i folletti o i successi più famosi di Hollywood. Ci
                sono sempre abbastanza giochi per attirare la tua attenzione.
              </p>
              <p class="say__text">
                Con così tanti siti di giochi gratuiti tra cui scegliere che puoi giocare nel tuo browser senza dover
                scaricare, la parte più difficile è trovare quelli che ti danno più gioia. Quando giochi ai giochi
                gratuiti, puoi provarli tutti per tutto il tempo che desideri. Se decidi di giocare con soldi veri,
                saprai quali giochi hanno già conquistato il tuo cuore.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
            Giochi
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-1.webp" type="image/webp">
                    <img src="./img/game-1.png" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                Thor
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
                Star bounty
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
                Viking voyage
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