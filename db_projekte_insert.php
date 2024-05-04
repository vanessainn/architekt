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

<?php 

include 'architekt_menu.php'; 

if (isset($_POST['submit'])) {
  extract($_POST);

  include 'db_connect.php';

  if($conn) {
    if ($_FILES['arch_projekte_foto']['error'] > 0) {
      echo '<p>Fehler beim Upload des Fotos</p>';
      $filename = '';
    } else {
      $filename = get_uploaded_file($_FILES['arch_projekte_foto']['name'], $_FILES['arch_projekte_foto']['tmp_name']);
    }

    $sql = "INSERT INTO arch_projekte
    (arch_projekte_name,
    arch_projekte_subtitle,
    arch_projekte_beschreibung,
    arch_projekte_nutzflaeche,
    arch_projekte_planungsbeginn,
    arch_projekte_fertigstellung,
    arch_projekte_bauzeit,
    arch_projekte_foto)
    VALUES ('$arch_projekte_name', '$arch_projekte_subtitle', '$arch_projekte_beschreibung', '$arch_projekte_nutzflaeche', '$arch_projekte_planungsbeginn', '$arch_projekte_fertigstellung', '$arch_projekte_bauzeit', '$filename')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo '<br><div class="contianer">';
      echo '<div class="row">';
      echo '<div class="offset-md-3 col-md-9">';
      echo '<p>Das neue Projekt wurde in der Datenbank gespeichert!</p>';
      echo '<div class="mt-3">';
      echo '<a href="db_projekte_neu.php" class="button me-5">Weiteres Projekt anlegen<i class="fa-solid fa-arrow-right ms-2"></i></a>';
      echo '<a href="db_projekte_admin.php" class="button">Zur Projektübersicht<i class="fa-solid fa-arrow-right ms-2"></i></a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    
    } else {
      echo "FEHLER!";
    }
  }
}

function get_uploaded_file($file, $tmp_file) {

  $newName = time() . '_' . $file;
  $destination = 'images/' . $newName;

  if (move_uploaded_file($tmp_file, $destination)) {
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<h2>Projekt gespeichert</h2>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

  return $newName;
  
}

?>

<footer class="mt-5 py-5 fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="images/architekt-mustermann-logo.png" alt="" class="logo">
          <p class="m-0 mt-3">info@architekt-mustermann.at</p>
        </div>
        <div class="col-md-4 socials mb-2">
          <i class="fa-brands fa-facebook-f fs-3 pe-3"></i>
          <i class="fa-brands fa-instagram fs-2"></i>
        </div>
        <div class="col-md-4">
          <ul class="p-0 footer-links">
            <li class="footer-item"><a class="footer-link" href="db_impressum-datenschutz.php#impressum">Impressum</a></li>
            <li class="footer-item"><a class="footer-link" href="db_impressum-datenschutz.php#datenschutz">Datenschutz</a></li>
            <li class="footer-item"><a class="footer-link" href="db_kontakt.php">Kontakt</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>&copy; 2024 Architekt Mustermann GmbH</p>
        </div>
      </div>
    </div>
  </footer>

<script src="js/bootstrap.min.js"></script>

</body>
</html>