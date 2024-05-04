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
      <h2>Projektinforamtionen ändern</h2>
    </div>
  </div>
</div>

<?php

include 'db_connect.php';

if ($conn) {
  $arch_projekte_id = $_GET['id'];
  $sql = "SELECT * FROM `wda_architekt`.`arch_projekte` WHERE (`arch_projekte_id` = '$arch_projekte_id')";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  extract($row);
  mysqli_close($conn);
}

?>

<div class="container mt-3">
  <div class="row">
    <div class="offset-md-3 col-md-9">
      <form action="db_projekte_update.php?id=<?php echo $arch_projekte_id; ?> "method="post" enctype="multipart/form-data">
        <label for="arch_projekte_name"><strong>Projektname:</strong></label>
        <input type="text" id="arch_projekte_name" name="arch_projekte_name" value="<?php echo $arch_projekte_name ?>"><br>
        <label for="arch_projekte_subtitle"><strong>Bauort:</strong></label>
        <input type="text" id="arch_projekte_subtitle" name="arch_projekte_subtitle" value="<?php echo $arch_projekte_subtitle ?>"><br>
        <label for="arch_projekte_beschreibung"><strong>Projektbeschreibung:</strong></label>
        <textarea name="arch_projekte_beschreibung" id="arch_projekte_beschreibung" rows="10"><?php echo $arch_projekte_beschreibung ?></textarea></textarea><br>
        <label for="arch_projekte_nutzflaeche"><strong>Nutzfläche:</strong></label>
        <input type="text" id="arch_projekte_nutzflaeche" name="arch_projekte_nutzflaeche" value="<?php echo $arch_projekte_nutzflaeche ?>"><br>
        <label for="arch_projekte_planungsbeginn"><strong>Planungsbeginn:</strong></label>
        <input type="text" id="arch_projekte_planungsbeginn" name="arch_projekte_planungsbeginn" value="<?php echo $arch_projekte_planungsbeginn ?>"><br>
        <label for="arch_projekte_fertigstellung"><strong>Fertigstellung:</strong></label>
        <input type="text" id="arch_projekte_fertigstellung" name="arch_projekte_fertigstellung" value="<?php echo $arch_projekte_fertigstellung ?>"><br>
        <label for="arch_projekte_bauzeit"><strong>Bauzeit:</strong></label>
        <input type="text" id="arch_projekte_bauzeit" name="arch_projekte_bauzeit" value="<?php echo $arch_projekte_bauzeit ?>"><br>
        <label for="arch_projekte_foto">Projektfoto:</label>
        <input id="arch_projekte_foto" type="file" name="arch_projekte_foto" accept="image/*" value="<?php echo $arch_projekte_foto ?>">
        <div class="button_container">
          <button type="submit" name="submit" id="submit" class="button">Änderungen speichern<i class="fa-solid fa-arrow-right ms-2"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include 'architekt_footer.php'; ?>

<script src="js/bootstrap.min.js"></script>

</body>
</html>