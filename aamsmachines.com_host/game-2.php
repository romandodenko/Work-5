<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aamsmachines - Giochi di intrattenimento gratuiti">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Aamsmachines - The wild machine</title>
</head>

<body>
  <div class="page">
    <div class="page__content">
      <?php
      include 'header.php';
      ?>
      <div class="page__body">
        <main>
          <section class="top">
            <div class="top__container container">
              <span class="top__icon">
                <img src="./img/18.svg" loading="lazy" width="40" height="40" alt="Icon">
              </span>
            </div>
          </section>
          <section class="slot">
            <div class="container">
              <h1 class="slot__title">
                The wild machine
              </h1>
              <div class="slot__game">
                <iframe src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=en&cur=EUR&gameSymbol=vs40madwheel&websiteUrl=https%3A%2F%2Fdemogamesfree.pragmaticplay.net&lobbyURL=https%3A%2F%2Fwww.pragmaticplay.com" frameborder="0"></iframe>
              </div>
            </div>
          </section>
        </main>
        <?php
        include 'footer.php';
        ?>
      </div>
    </div>
  </div>
</body>

</html>