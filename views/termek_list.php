<div class="row">
  <pre><?php print_r($termekek); ?></pre>
  <pre><?php print_r($_SESSION); ?></pre>
  <?php foreach ($termekek as $termek) : ?>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"><?php echo $termek['nev'] ?></h2>
        </div>
        <div class="card-body">

        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>