<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Entdecken Sie bei Architekt Mustermann innovative Architekturlösungen und maßgeschneiderte Designs für Ihr nächstes Bauprojekt. Kontaktieren Sie uns für Expertise und Beratung!">
  <title>Architekt Mustermann</title>
  <link rel="stylesheet" href="fonts/fontawesome-6.5.2-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md px-5 py-3">
      <div class="container justify-content-between">
        <a class="navbar-brand" href="index.html"><img src="images/architekt-mustermann-logo.png" alt="Logo Architekt Mustermann" title="Logo Architekt Mustermann" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon burger-menu"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarNavAltMarkup">
          <div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-lowercase" href="db_projekte.php">Projekte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-lowercase" href="index.php#team">Über Uns</a>
              </li>
              <li class="nav-item">
                <a href="index.php" class="nav-link link-logo">
                  <img src="images/architekt-mustermann-logo.png" class="logo" alt="Logo Architekt Mustermann" title="Logo Architekt Mustermann">
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-lowercase" href="index.php#leistungen">Büro</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link text-lowercase" href="db_kontakt.php">Kontakt</a>
              </li>
            </ul>
          </div>
        </div>  
      </div>
    </nav>
  </header>

  <main>
    <section id="kontakt">
      <article class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>kontakt</h2>
          </div>
        </div>
        <div class="row">
          <div class="offset-md-3 col-md-9 pt-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.314758499395!2d11.386557676491606!3d47.26910127116076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d6bf0a259528b%3A0xb91e4d82a8ede50!2sH%C3%B6ttinger%20G.%2017%2C%206020%20Innsbruck%2C%20%C3%96sterreich!5e0!3m2!1sde!2sit!4v1714485174070!5m2!1sde!2sit" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="row">
              <div class="col-md-12">
                <h3>Architekt Mustermann</h3>
                <h4>Alex Mustermann</h4>
                <p class="pb-0 mt-3"><strong>E-Mail Adresse:</strong> <a class="kontakt-link" href="mailto:info@architekt-mustermann.at">info@architekt-mustermann.at</a></p>
                <p class="pb-0"><strong>Telefon:</strong> <a class="kontakt-link" href="tel:00438752386475">+43 875 238 6475</a></p>
                <p><strong>Adresse:</strong> Höttinger Gasse 17b | 6020 Innsbruck | Österreich</p>
              </div>
            </div>
          </div>
        </div>
        
      </article>
    </section>
      
 
</main>

<?php include 'architekt_footer.php'; ?>

<script src="js/bootstrap.min.js"></script>

</body>
</html>