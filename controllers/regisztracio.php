<?php
if (isset($_SESSION['felhasznalo'])) {
  header("Location: /");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  require_once "models/FelhasznaloModel.php";
  $felhasznalo_model = new FelhasznaloModel();
  $felhasznalo_nev = $_POST['felhasznalo_nev'];
  $email = $_POST['email'];
  $jelszo = $_POST['jelszo'];
  $teljes_nev = $_POST['teljes_nev'];
  $szuletesi_datum = $_POST['szuletesi_datum'];
  $iranyito_szam = $_POST['iranyito_szam'];
  $varos = $_POST['varos'];
  $cim = $_POST['cim'];
  $felhasznalo_model->regisztracio($felhasznalo_nev, $email, $jelszo, $teljes_nev, $szuletesi_datum, $iranyito_szam, $varos, $cim);
}
include "views/regisztracio_urlap.php";
