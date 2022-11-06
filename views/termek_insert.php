<h1>Termék felvétele</h1>
<form method="POST">
  <div class="container-fluid">
    <div class="row">

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="nev_input" class="form-label">Név</label>
        <input type="text" class="form-control" id="nev_input" name="nev">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="leiras_input" class="form-label">Leírás</label>
        <textarea class="form-control" id="leiras_input" rows="3" name="leiras"></textarea>
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="ar_input" class="form-label">Ár</label>
        <input type="number" class="form-control" id="ar_input" name="ar">
      </div>

      <div class="mb-3 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <label for="kep_input" class="form-label">A file-t a 'project' ..\images mappájába kell elhelyezni és onnan lehet kiválasztani!</label>
        <input type="file" id="kep_input" name="kep">
      </div>

    </div>
  </div>
  <button type="submit" class="btn btn-outline-primary">Termék felvétele</button>
</form>