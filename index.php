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

  <main class="mb-5">
    <section id="home" class="pt-5">
      <article class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Architekt<br>Mustermann</h1>
          </div>
        </div>
      </article>
    </section>
    <section id="neuheit">
      <article class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Neuheit</h2>
          </div>

            <?php 
        
        include 'db_connect.php';

        if ($conn) {
          $sql = "SELECT * FROM wda_architekt.arch_projekte WHERE arch_projekte_fertigstellung = '2024' ORDER BY RAND() LIMIT 1";
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

            </div>
          </div>
        </div>
        <div class="col-md-12 d-flex justify-content-end">
          <a href="db_projekte.php" class="button">alle Projekte ansehen<i class="fa-solid fa-arrow-right ms-2"></i></a>  
        </div>
      </article>
    </section>
    <section class="team">
      <article class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>wir</h2>
          </div>
          <div class="offset-md-3 col-md-9">

            <div class="container-fluid pt-3">
              <div class="row">
                <div class="col-md-8">
                  <p class="pe-3">Bei Architekt Mustermann stehen Innovation, Qualität und Kundenzufriedenheit an erster Stelle. Unser erfahrenes Team von Architekten und Designern widmet sich leidenschaftlich der Schaffung einzigartiger und funktionaler Gebäude, die sowohl ästhetisch ansprechend als auch nachhaltig sind. Mit einem Fokus auf kreative Lösungen und maßgeschneiderte Designs arbeiten wir eng mit unseren Kunden zusammen, um ihre Visionen zu verwirklichen und Projekte von höchster Qualität zu liefern. Willkommen bei Architekt Mustermann – wo jede Struktur eine Geschichte erzählt und jedes Design eine Inspiration ist.</p>
                </div>
                <div class="col-md-4">
                  <figure>
                    <img src="images/architekt-mustermann-alex-mustermann-geschaeftsfuehrer.jpg" alt="Alex Mustermann - Geschäftsführer und Planer bei Architekt Mustermann" title="Alex Mustermann - Geschäftsführer und Planer bei Architekt Mustermann" class="img-fluid">
                    <figcaption>
                      <h3>Alex Mustermann</h3>
                      <h4>Geschäftsführung & Planung</h4>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <figure>
                  <img src="images/architekt-mustermann-julia-schneider.jpg" alt="Julia Schneider - Büroleiterin und Planerin bei Architekt Mustermann" title="Julia Schneider - Büroleiterin und Planerin bei Architekt Mustermann" class="img-fluid">
                  <figcaption>
                    <h3>Julia Schneider</h3>
                    <h4>Büroleitung & Planung</h4>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4">
                <figure>
                  <img src="images/architekt-mustermann-timo-schmidt.jpg" alt="Timo Schmidt - Planer bei Architekt Mustermann" title="Timo Schmidt - Planer bei Architekt Mustermann" class="img-fluid">
                  <figcaption>
                    <h3>Timo Schmidt</h3>
                    <h4>Planung</h4>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4">
                <figure>
                  <img src="images/architekt-mustermann-eva-wagner.jpg" alt="Eva Wagner - Planerin bei Architekt Mustermann" title="Eva Wagner - Planerin bei Architekt Mustermann" class="img-fluid">
                  <figcaption>
                    <h3>Eva Wagner</h3>
                    <h4>Planung</h4>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
    <section id="leistungen">
      <article class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Leistungen</h2>
          </div>
          <div class="offset-md-3 col-md-9 pt-3">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <figure>
                    <img src="images/architekt-mustermann-moderne-architektur.jpg" alt="Moderne Architekur von Architekt Mustermann" title="Moderne Architekur von Architekt Mustermann" class="img-fluid">
                    <figcaption>
                      <h3>Architekturdesign</h3>
                      <p>Entwicklung von Konzepten, Entwürfen und Plänen für Bauvorhaben, die die ästhetischen, funktionalen und baulichen Anforderungen erfüllen.</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6">
                  <figure>
                    <img src="images/architekt-mustermann-bauzeichnung-bauplanung.jpg" alt="Bauzeichnung und Bauplanung von Architekt Mustermann" title="Bauzeichnung und Bauplanung von Architekt Mustermann" class="img-fluid">
                    <figcaption>
                      <h3>Bauzeichnung & Bauplanung</h3>
                      <p>Erstellung detaillierter Zeichnungen, Baupläne und Spezifikationen, die den Bauprozess leiten und die Einhaltung von Baustandards gewährleisten.</p>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <figure>
                    <img src="images/architekt-mustermann-projektplanung.jpg" alt="Projektplanung von Architekt Mustermann" title="Projektplanung von Architekt Mustermann" class="img-fluid">
                    <figcaption>
                      <h3>Projektplanung</h3>
                      <p>Koordination und Überwachung aller Phasen des Bauprojekts, einschließlich Budgetierung, Zeitplanung, Auswahl von Auftragnehmern und Qualitätssicherung, um sicherzustellen, dass das Projekt termingerecht und innerhalb des Budgets abgeschlossen wird.</p>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-md-6">
                  <figure>
                    <img src="images/architekt-mustermann-bauberatung.jpg" alt="Bauberatung von Architekt Mustermann" title="Bauberatung von Architekt Mustermann" class="img-fluid">
                    <figcaption>
                      <h3>Bauberatung</h3>
                      <p>Beratung zu Baurecht, Bauvorschriften, Baugenehmigungen, Nachhaltigkeitsstandards und anderen rechtlichen oder technischen Aspekten des Bauprozesses.</p>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mt-5">
                  <h3>ein Projekt starten?</h3>
                  <div class="col-md-12 d-flex">
                    <a href="kontakt.html" class="button">kontaktiere uns jetzt<i class="fa-solid fa-arrow-right ms-2"></i></a>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                    <img src="images/architekt-mustermann-balkon-modern.jpg" alt="" class="img-fluid pb-4">
                    <img src="images/architekt-mustermann-garten.jpg" alt="" class="img-fluid pb-4">
                    <img src="images/architekt-mustermann-wohnzimmer-modern.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="col-md-6 impressionen">
                    <img src="images/architekt-mustermann-treppenhaus-bibliothek.jpg" alt="" class="img-fluid pb-4">
                    <img src="images/architekt-mustermann-wohnzimmer.jpg" alt="" class="img-fluid pb-4">
                    <img src="images/architekt-mustermann-sitzecke.jpg" alt="" class="img-fluid">
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