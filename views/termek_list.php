<div class="container-fluid row">
  <!-- <pre><?php print_r($termekek); ?></pre> -->
  <!-- <pre><?php print_r($_SESSION); ?></pre> -->
  <?php foreach ($termekek as $termek) : ?>
    <div class="mb-3 col-sm-6 col-md-4 col-lg-3">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"><?php echo $termek['nev'] ?></h2>
          <table class="table table-striped">
            <thead>
              <tr>
                <th><?php echo $termek['nev'] ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $termek['leiras'] ?></td>
              </tr>
              <tr>
                <td><?php echo $termek['ar'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-body">

        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>