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
    <section id="projekte">
      <article class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>projekte</h2>
          </div>
        </div>

        <?php 
        
        include 'db_connect.php';

        if ($conn) {
          $sql = "SELECT * FROM arch_projekte";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              extract($row);
              ?>

              <div class="row mt-3">
                <div class="offset-md-3 col-md-9">
                  <div class="row">
                    <div class="col-md-12">
                      <img src=<?php echo 'images/' . $arch_projekte_foto?> alt="" title="" class="img-fluid">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <h3><?php echo $arch_projekte_name ?></h3>
                      <h4><?php echo $arch_projekte_subtitle ?></h4>
                    </div>
                    <div class="row mt-3 mb-5">
                      <div class="col-md-3">
                        <p><strong>Nutzfläche:</strong> <?php echo $arch_projekte_nutzflaeche ?></p>
                        <p><strong>Planungsbeginn:</strong> <?php echo $arch_projekte_planungsbeginn ?></p>
                        <p><strong>Fertigstellung:</strong> <?php echo $arch_projekte_fertigstellung ?></p>
                        <p><strong>Bauzeit:</strong> <?php echo $arch_projekte_bauzeit ?></p>
                      </div>
                      <div class="col-md-9">
                        <p><?php echo $arch_projekte_beschreibung ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php

            }
          }

        }
        
        ?>

      </article>
    </section>
      
  <section id="impressionen">
    <article class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Impressionen</h2>
        </div>
          <div class="offset-md-3 col-md-9">
            <div class="continer">
              <div class="row pt-3">
                <div class="col-md-6">
                  <img src="images/architekt-mustermann-terassenverkleidung.jpg" alt="" class="img-fluid pb-4">
                  <img src="images/architekt-mustermann-essbereich.jpg" alt="" class="img-fluid pb-4">
                  <img src="images/architekt-mustermann-frontansicht.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 impressionen">
                  <img src="images/architekt-mustermann-treppenhaus-holz-metall.jpg" alt="" class="img-fluid pb-4">
                  <img src="images/architekt-mustermann-wohn-schlafzimmer.jpg" alt="" class="img-fluid">
                </div>
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