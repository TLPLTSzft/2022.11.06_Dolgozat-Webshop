<?php
if (!isset($_SESSION['felhasznalo'])) {
  http_response_code(403);
  include "views/_403.html";
  die();
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  require_once "models/TermekModel.php";
  $termek_model = new TermekModel();
  $nev = $_POST['nev'];
  $leiras = $_POST['leiras'];
  $ar = $_POST['ar'];
  $kep = $_POST['kep'];
  $termek_model->insert($nev, $leiras, $ar, $kep);
}
include "views/termek_insert.php";
