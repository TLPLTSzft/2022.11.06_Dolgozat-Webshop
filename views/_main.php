<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>webshop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="util/js/myscript.js"></script>
  <script>
    function active_link_beallitasa() {
      const oldal = "<?php echo $oldal ?>";
      const navigaciolink = document.getElementById("nav_" + oldal);
      navigaciolink.classList.add('active');
    }
  </script>
</head>

<body onload="active_link_beallitasa();">
  <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="./">webshop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a id="nav_termek_list" class="nav-link" href="?oldal=termek_list">Főoldal</a>
          </li>
          <li class="nav-item">
            <a id="nav_termek_insert" class="nav-link" href="?oldal=termek_insert">Termék hozzáadása</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a id="nav_regisztracio" class="nav-link" href="?oldal=regisztracio">Regisztráció</a>
          </li>
          <li class="nav-item">
            <a id="nav_bejelentkezes" class="nav-link" href="?oldal=bejelentkezes">Bejelentkezés</a>
          </li>
          <li class="nav-item">
            <a id="nav_kijelentkezes" class="nav-link" href="?oldal=kijelentkezes">Kijelentkezés</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container">
    <?php
    include $controller;
    ?>
  </main>

</body>

</html>