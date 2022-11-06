<div class="container-fluid row">
  <!-- <pre><?php print_r($termekek); ?></pre> -->
  <!-- <pre><?php print_r($_SESSION); ?></pre> -->
  <?php foreach ($termekek as $termek) : ?>

    <div class="my-3 col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <div class="card-header mb-3">
          <img src="../images/<?php echo $termek['kep'] ?>" class="card-img-top" alt="../images/<?php echo $termek['kep'] ?>" title="<?php echo $termek['nev'] ?>" style="height: 120px; width: auto; margin: 0 auto; display: block;">
        </div>

        <div class="card-body">
          <h5 class="card-text"><strong><?php echo $termek['nev'] ?></strong></h5>
          <p class="card-text"><?php echo $termek['leiras'] ?></p>
        </div>
        <div class="card-footer">
          <p class="card-text"><?php echo $termek['ar'] ?> Ft</p>
        </div>

      </div>
    </div>
  <?php endforeach ?>
</div>