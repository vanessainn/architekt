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

<h2>Projektdaten ändern</h2>

<?php 

include 'db_connect.php';

if ($conn) {
  $proj_id = $_GET['id'];
  $sql = 'SELECT * FROM arch_projekte WHERE wda_architekt = ' . $proj_id;
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fech_assoc($result);
  extract($row);
  mysqli_close($conn);
}

?>

<form action="db_projekte_update.php?id=<?php echo $proj_id; ?>" method="post" enctype="multipart/form-data" class="form_projekte">
  <label for="arch_projekte_name"><strong>Projektname:</strong></label>
  <input type="text" id="arch_projekte_name" name="arch_projekte_name" required="" placeholder="Projektname eingeben" value=<?php echo $arch_projekte_name ?>><br>
  <label for="arch_projekte_subtitle"><strong>Bauort:</strong></label>
  <input type="text" id="arch_projekte_subtitle" name="arch_projekte_subtitle" required="" placeholder="Bauort eingeben" value=<?php echo $arch_projekte_subtitle ?>><br>
  <label for="arch_projekte_beschreibung" class="mb-1"><strong>Projektbeschreibung:</strong></label>
  <textarea name="arch_projekte_beschreibung" id="arch_projekte_beschreibung" rows="10" required="" value=<?php echo $arch_projekte_beschreibung ?>></textarea><br>
  <label for="arch_projekte_nutzflaeche"><strong>Nutzfläche:</strong></label>
  <input type="text" id="arch_projekte_nutzflaeche" name="arch_projekte_nutzflaeche" required="" placeholder="Nutzfläche eingeben"><br>
  <label for="arch_projekte_planungsbeginn"><strong>Planungsbeginn:</strong></label>
  <input type="text" id="arch_projekte_planungsbeginn" name="arch_projekte_planungsbeginn" required="" placeholder="Jahr des Planungsbeginns eingeben"><br>
  <label for="arch_projekte_fertigstellung"><strong>Fertigstellung:</strong></label>
  <input type="text" id="arch_projekte_fertigstellung" name="arch_projekte_fertigstellung" required="" placeholder="Jahr der Fertigstellung eingeben"><br>
  <label for="arch_projekte_bauzeit"><strong>Bauzeit:</strong></label>
  <input type="text" id="arch_projekte_bauzeit" name="arch_projekte_bauzeit" required="" placeholder="Gesamte Bauzeit eingeben"><br>
  <label for="arch_projekte_foto"><strong>Projektbild:</strong></label>
  <input type="file" id="arch_projekte_foto" name="arch_projekte_foto" accept="image/*"><br><br>
  <div class="button_container">
    <button type="submit" name="submit" id="submit" value="Neues Projekt anlegen" class="button">Neues Projekt speichern<i class="fa-solid fa-arrow-right ms-2"></i></button>
  </div>
</form>

<?php include 'architekt_footer.php'; ?>

<script src="js/bootstrap.min.js"></script>

</body>
</html>