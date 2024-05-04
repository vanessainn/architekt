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

<?php include 'architekt_menu.php'; ?>

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
                  <img src=<?php echo 'images/' . $arch_projekte_foto?> alt="" title="" class="img-fluid">
                  <div class="row">
                    <div class="col-md-10">
                      <h3><?php echo $arch_projekte_name ?></h3>
                      <h4><?php echo $arch_projekte_subtitle ?></h4>
                    </div>
                    <div class="col-md-2 p-3"> 
                      <a href="<?php echo 'db_projekte_edit.php?id=' . $wda_architekt_id ?>"><i class="fa-regular fa-pen-to-square fs-4 pe-2"></i></a>
                      <a href="<?php echo 'db_projekte_delete.php?id=' . $wda_architekt_id ?>"><i class="fa-regular fa-trash-can fs-4"></i></a>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-4">
                        <p><strong>Nutzfläche:</strong> <?php echo $arch_projekte_nutzflaeche ?></p>
                        <p><strong>Planungsbeginn:</strong> <?php echo $arch_projekte_planungsbeginn ?></p>
                        <p><strong>Fertigstellung:</strong> <?php echo $arch_projekte_fertigstellung ?></p>
                        <p><strong>Bauzeit:</strong> <?php echo $arch_projekte_bauzeit ?></p>
                      </div>
                      <div class="col-md-8">
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

        <div class="row mt-5">
          <div class="offset-md-3 col-md-9">
            <a href="db_projekte_neu.php" class="button">neues Projekt anlegen<i class="fa-solid fa-arrow-right ms-2"></i></a> 
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