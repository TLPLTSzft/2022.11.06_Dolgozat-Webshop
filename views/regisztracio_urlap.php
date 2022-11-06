<h1>Regisztráció</h1>
<form method="POST">
  <div class="container-fluid">
    <div class="row">

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="felhasznalo_nev_input" class="form-label">Felhasználó név</label>
        <input type="text" class="form-control" id="felhasznalo_nev_input" name="felhasznalo_nev">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="email_input" class="form-label">Email</label>
        <input type="email" class="form-control" id="email_input" name="email">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="jelszo_input" class="form-label">Jelszó</label>
        <input type="password" class="form-control" id="jelszo_input" name="jelszo">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="teljes_nev_input" class="form-label">Teljes név</label>
        <input type="text" class="form-control" id="teljes_nev_input" name="teljes_nev">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="szuletesi_datum_input" class="form-label">Születési dátum</label>
        <input type="date" class="form-control" id="szuletesi_datum_input" name="szuletesi_datum">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="iranyito_szam_input" class="form-label">Irányító szám</label>
        <input type="number" class="form-control" id="iranyito_szam_input" name="iranyito_szam">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="varos_input" class="form-label">Város</label>
        <input type="text" class="form-control" id="varos_input" name="varos">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="cim_input" class="form-label">Cím</label>
        <input type="text" class="form-control" id="cim_input" name="cim">
      </div>

    </div>
  </div>
  <button type="submit" class="btn btn-outline-primary">Regisztráció</button>
</form>