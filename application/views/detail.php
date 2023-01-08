<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Buku</h1>


<dl>
  <dt>Nama</dt>
  <dd><?= $nama ?></dd>

  <dt>Harga</dt>
  <dd><?= $harga ?></dd>

  <dt>Stok</dt>
  <dd><?= $stok ?></dd>

  <dt>Nama Kantin</dt>
  <dd><?= $nama ?></dd>

  <dt>Gambar</dt>
  <dd><img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/'.$gambar ?>" 
    height="120" width="120"/></dd>
</dl>

<a  class="btn btn-primary href='#' onclick="history.back()">Back</a>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>
