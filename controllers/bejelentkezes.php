<?php
if (isset($_SESSION['felhasznalo'])) {
  header("Location: /");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $felhasznalo_nev = $_POST['felhasznalo_nev'];
  $jelszo = $_POST['jelszo'];
  require_once "models/FelhasznaloModel.php";
  $model = new FelhasznaloModel();
  $felhasznalo = $model->bejelentkezes($felhasznalo_nev, $jelszo);
  if ($felhasznalo) {
    unset($felhasznalo['jelszo']);
    $_SESSION['felhasznalo'] = $felhasznalo;
    header("Location: /");
  } else {
    $hiba = "Hibás felhasználó név vagy jelszó!";
    include "views/hiba_alert.php";
  }
}
include "views/bejelentkezes_urlap.php";
