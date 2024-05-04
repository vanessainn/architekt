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

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Änderungen wurden gespeichert!</h2>
    </div>
  </div>
 <div class="row mt-3">
    <div class="offset-md-3 col-md-9">

<?php 

include 'db_connect.php';

if ($conn) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arch_projekte_id = $_GET['id'];
    extract($_POST);

    if ($_FILES['arch_projekte_foto']['error'] === 0) {
      $filename = $_FILES['arch_projekte_foto']['name'];
      $temp_name = $_FILES['arch_projekte_foto']['tmp_name'];
      $folder = "";

      if (move_uploaded_file($temp_name, $folder . $filename)) {
        $arch_projekte_foto_path = $folder . $filename;
      } else {
        echo "Beim Hochladen des Fotos ergab sich ein Fehler.";
        $arch_projekte_foto_path = null;
      }  
    } else {
      $arch_projekte_foto_path = null;
    }
    

    $sql = "UPDATE `wda_architekt`.`arch_projekte` SET `arch_projekte_name` = '$arch_projekte_name',
    `arch_projekte_subtitle` = '$arch_projekte_subtitle', `arch_projekte_beschreibung` = '$arch_projekte_beschreibung',
    `arch_projekte_nutzflaeche` = '$arch_projekte_nutzflaeche', `arch_projekte_planungsbeginn` = '$arch_projekte_planungsbeginn',
    `arch_projekte_fertigstellung` = '$arch_projekte_fertigstellung', `arch_projekte_bauzeit` = '$arch_projekte_bauzeit' WHERE (`arch_projekte_id` = '$arch_projekte_id')";

    // if ($arch_projekte_foto_path !== null) {
    //   $sql .= ", `arch_projekte_foto` = '$arch_projekte_foto_path'";
    // }

    // $sql .= " WHERE `arch_projekte_id` = '$arch_projekte_id'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo '<p class="mb-5">Das Projekt wurde erfolgreich geändert!</p>';
    } else {
      echo '<p>Fehler!</p>';
    }
  } 

    mysqli_close($conn);

  
}

?>

 
     <a href="db_projekte_admin.php" class="button">zurück zur Projektübersicht<i class="fa-solid fa-arrow-right ms-2"></i></a> 
    </div>
  </div>
</div>

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