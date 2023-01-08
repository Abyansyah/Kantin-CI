<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>List Menu</h1>
<form method="get" action="<?= base_url('welcome/index') ?>">
  <div class="row mb-3">
    <input class="form-control" placeholder="cari menu " type="text" name="search" id="search" />
  </div>
</form>
<?php
if (isset($search)) {
  echo "<h4 class='alert alert-success'>Hasil pencarian untuk : " . $search . "</h4>";
}
?>
<div class="row">
    <?php
    foreach ($records as $idx => $data) {
    ?>
	<div class="col-sm-4">
      <div class="card">
        <img src="<?= empty($data['gambar']) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 'uploads/' . $data['gambar'] ?>" class="card-img-top" alt="<?= $data['nama'] ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $data['nama'] ?></h5>
          <dl>
            <dt>Harga</dt>
            <dd><?= $data['harga'] ?></dd>
            <dt>Stok</dt>
            <dd><?= $data['stok'] ?></dd>
            <dt>Nama Kantin</dt>
            <dd><?= $data['nama_kantin'] ?></dd>
          </dl>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
	</div>
	<?php
if (isset($links)) {
   echo $links;
}
include APPPATH . 'views/fragment/footer.php';
?>
