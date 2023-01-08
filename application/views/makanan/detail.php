<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Buku</h1>

<div class="card" style="width: 18rem;">
<img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/'.$gambar ?>" 
    />
  <div class="card-body">
    <h5 class="card-title">Nama Makanan</h5>
    <p class="card-text"><?= $nama?></p>
    <h5 class="card-title">Harga</h5>
    <p class="card-text">Rp <?= $harga?></p>
    <h5 class="card-title">Stok</h5>
    <p class="card-text"><?= $stok?></p>
    <h5 class="card-title">Nama Kantin</h5>
    <p class="card-text"><?= $nama_kantin?></p>
  </div>
</div>
<a class="btn btn-primary  href='#' onclick="history.back()">Back</a>

<?php
include APPPATH . 'views/fragment/footer.php' ;
?>
