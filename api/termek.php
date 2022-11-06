<?php
header("Content-Type: application/json");
if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
  header("Access-Control-Allow-Headers: *");
  header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
} else if ($_SERVER['REQUEST_METHOD'] == "GET") {
  require "../models/TermekModel.php";
  $model = new TermekModel;
  $termekek = $model->select_all;
  echo json_encode($termekek, JSON_UNESCAPED_UNICODE);
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
  require "../models/TermekModel.php";
  $model = new TermekModel;
  $json = file_get_contents("php://input");
  $post = json_decode($json, true);
  $hiba = "";
  if (!isset($post['nev']) || empty($post['nev'])) {
    $hiba = "A termék nevét meg kell adni.";
    http_response_code(422);
  } else {
    $nev = $post['nev'];
    try {
      $model->insert($nev, $leiras, $ar, $kep);
    } catch (\mysqli_sql_exception $th) {
      if ($th->code == 1062) {
        http_response_code(409);
        $hiba = "Ilyen nevű termék már van.";
      } else {
        $hiba = "Ismeretlen hiba történt";
        http_response_code(500);
      }
    }
  }
  if ($hiba != "") {
    echo json_encode(["message" => $hiba], JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode(["message" => "Sikeres termék felvétel!"], JSON_UNESCAPED_UNICODE);
    http_response_code(201);
  }
} else {
  http_response_code(405);
}
