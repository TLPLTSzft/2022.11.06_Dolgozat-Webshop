<h1>Termék felvétele</h1>
<form method="POST">
  <div class="container-fluid">
    <div class="row">
      <div class="mb-3 col-lg-6 col-xl-4">
        <label for="nev_input" class="form-label">Név</label>
        <input type="text" class="form-control" id="nev_input" name="nev">
      </div>

      <div class="mb-3 col-lg-6 col-xl-4">
        <label for="leiras_input" class="form-label">Leírás</label>
        <textarea class="form-control" id="leiras_input" rows="3" name="leiras"></textarea>
      </div>

      <div class="mb-3 col-lg-6 col-xl-4">
        <label for="ar_input" class="form-label">Ár</label>
        <input type="number" class="form-control" id="ar_input" name="ar">
      </div>

      <div class="mb-3 col-lg-6 col-xl-4">
        <label for="kep_input" class="form-label">Kép</label>
        <textarea class="form-control" id="kep_input" rows="3" name="kep"></textarea>
      </div>

    </div>
  </div>
  <button type="submit" class="btn btn-outline-primary">Termék felvétele</button>
</form>