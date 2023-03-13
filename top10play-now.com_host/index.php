<!DOCTYPE html>
<html lang="el">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Top10play-now - Δωρεάν τζόγος">
  <meta name="rating" content="adult">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Top10play-now - Δωρεάν τζόγος</title>
</head>

<body>
  <div class="page">
    <div class="page__content">

      <?php
      include 'header.php';
      ?>

      <div class="page__bottom">
        <main>
          <section class="popup popup-active">
            <div class="popup__close"></div>
            <div class="popup__body">
                <p class="popup__text">Αυτός ο ιστότοπος χρησιμοποιεί cookies για τη βελτίωση της εμπειρίας χρήστη</p>
                <button class="popup__button">Συμφωνώ</button>
            </div>
          </section>
          <section class="top">
            <div class="top__container container">
              <a class="top__logo" href="index.php">
                <img src="./img/logo.svg" loading="lazy" width="30" height="30" alt="Logo">
              </a>
              <span class="top__icon">
                <img src="./img/18.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
            </div>
          </section>
          <section class="hero">
            <div class="container">
              <div class="hero__content">
                <div class="hero__descr">
                  <h1 class="hero__title">
                    <span>Αξέχαστα παιχνίδια με τα καλύτερα γραφικά0</span>
                    Δωρεάν τζόγος
                  </h1>
                  <p class="hero__text">
                    <span>Τα παιχνίδια που προσφέρονται στον ιστότοπο δεν δίνουν στους χρήστες την ευκαιρία να κερδίσουν
                      πραγματικά χρήματα.</span>
                    Ο ιστότοπος δεν παρέχει στους χρήστες δεξιότητες που θα μπορούσαν να χρησιμοποιηθούν σε πραγματικό
                    τζόγο. Τα παιχνίδια είναι διαθέσιμα σε χρήστες άνω των 18 ετών.
                  </p>
                  <a class="hero__link" href="#games">
                    Παίζω
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="benefits" id="benefits">
            <div class="container">
              <h2 class="benefits__title">
                Πλεονεκτήματα
              </h2>
              <ul class="benefits__list">
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/i1.svg" loading="lazy" width="30" height="30" alt="Icon">
                  </span>
                  <h3 class="benefits__text">
                    Δεν υπάρχουν όρια στον αριθμό των περιστροφών
                  </h3>
                </li>
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/i2.svg" loading="lazy" width="30" height="30" alt="Icon">
                  </span>
                  <h3 class="benefits__text">
                    Δεν χρειάζεται να εγγραφείτε
                  </h3>
                </li>
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/i3.svg" loading="lazy" width="30" height="30" alt="Icon">
                  </span>
                  <h3 class="benefits__text">
                    Πολύχρωμοι κουλοχέρηδες
                  </h3>
                </li>
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/i4.svg" loading="lazy" width="30" height="30" alt="Icon">
                  </span>
                  <h3 class="benefits__text">
                    Διαθέσιμο 24 ώρες
                  </h3>
                </li>
              </ul>
            </div>
          </section>
          <section class="games" id="games">
            <div class="container">
              <h2 class="games__title">
                Παιχνίδια
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
                  <div class="games__descr">
                    <a class="games__link" href="game-1.php">
                      Wild wild riches
                    </a>
                    <a class="games__play" href="game-1.php">
                      <img src="./img/play.svg" loading="lazy" width="30" height="30" alt="Icon">
                    </a>
                  </div>
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
                  <div class="games__descr">
                    <a class="games__link" href="game-2.php">
                      Yummy wilds
                    </a>
                    <a class="games__play" href="game-2.php">
                      <img src="./img/play.svg" loading="lazy" width="30" height="30" alt="Icon">
                    </a>
                  </div>
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
                  <div class="games__descr">
                    <a class="games__link" href="game-3.php">
                      Wild catch
                    </a>
                    <a class="games__play" href="game-3.php">
                      <img src="./img/play.svg" loading="lazy" width="30" height="30" alt="Icon">
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="container">
              <h2 class="about__title">
                Σχετικά με εμάς
              </h2>
              <div class="about__content">
                <div class="about__descr">
                  <p class="about__text">
                    Στην αυτόματη λειτουργία, δημιουργείται ένας δοκιμαστικός λογαριασμός με 10.000 νομίσματα, τα οποία
                    επιτρέπεται να δαπανηθούν σε κλασικά και μοντέρνα παιχνίδια, εικονική ρουλέτα και παιχνίδια με
                    κάρτες. Αυτή η επιλογή είναι επωφελής και για τα δύο μέρη: ο παίκτης δεν ξοδεύει τα δικά του
                    κεφάλαια, το ίδρυμα βελτιώνει την εικόνα και προσελκύει νέους πελάτες.
                  </p>
                  <h3 class="about__subtitle">
                    Τύποι δωρεάν παιχνιδιών
                  </h3>
                  <p class="about__text">
                    Στην αγορά ψυχαγωγίας τυχερών παιχνιδιών, τα παιχνίδια χωρίζονται υπό όρους σε δεκάδες κατηγορίες,
                    αλλά οι κυριότερες είναι τρεις:
                  </p>
                  <p class="about__text">
                    <span> Κλασικό με σύμβολα φρούτων και επτά.</span>
                    <span>Νέοι προσομοιωτές με γραφικά υψηλής ποιότητας.</span>
                    <span>Παιχνίδια με γύρους μπόνους και δωρεάν περιστροφές.</span>
                    <span>Υπάρχουν επίσης δωρεάν παιχνίδια με υψηλές και χαμηλές αποδόσεις. Είναι αυτή η παράμετρος που
                      καθορίζει το ποσό των κερδών στο μέλλον και τη συχνότητα των επιτυχημένων συνδυασμών. Εάν νωρίτερα
                      οι ιδιοκτήτες συλλόγων τυχερών παιχνιδιών προσάρμοσαν ανεξάρτητα τον δείκτη προς τα πάνω ή προς τα
                      κάτω, τότε κατά τη σύνδεση λογισμικού στον ιστότοπο, οι κατασκευαστές άρχισαν να προκαθορίζουν την
                      τιμή του συντελεστή.</span>
                    <span>Η ταχεία ανάπτυξη της επιχείρησης τζόγου αναγκάζει τους κατασκευαστές να κυκλοφορήσουν νέα
                      παιχνίδια με γραφικά υψηλής ποιότητας, ειδικά επιλεγμένη μουσική και πλοκή.</span>
                  </p>
                </div>
                <div class="about__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/about.webp" type="image/webp">
                    <img src="./img/about.png" loading="lazy" width="300" height="300" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </section>
        </main>
     
        <?php
        include 'footer.php';
        ?>

      </div>
    </div>
</body>

</html>