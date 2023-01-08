<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1>Tambah/Ubah Makanan</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" enctype="multipart/form-data" action="<?= base_url('makanan/save') ?>">
    <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>" />
    <input type="hidden" name="gambar_lama" value="<?= isset($gambar) ? $gambar : '' ?>" />

    <div class="row mb-3">
        <label class="form-label">Nama Menu</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required />
        </div>
    </div>

    <div class="row mb-3">
        <label class="form-label">Harga</label>
        <div class="col-sm-6">
            <input class="form-control" type="tel" name="harga" id="harga" value="<?= $harga ?>" required />
        </div>
    </div>

    <div>
        <label class="form-label">Gambar</label>
        <div class="col-sm-6">
            <input class="form-control" type="file" name="gambar" id="gambar" accept="image/*" onchange="loadFile(event)" />
            <img id="preview" src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg'  : BASE_ASSETS . 'uploads/' . $gambar ?>" height="120" width="120" />
        </div>
    </div>

    <div class="row mb-3">

        <label class="form-label">Stok</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" name="stok" id="stok" value="<?= $stok ?>" required />
        </div>

    </div>

    <div class="row mb-3">
        <label class="form-label">Nama Kantin</label>
        <div class="col-sm-6">
            <select class="form-select" name="id_kantin" id="id_kantin">
                <?php
                // $idx = row ke-x, $row => datanya
                foreach ($kantins as $idx => $row) {
                ?>
                    <option value="<?= $row['id'] ?>" <?= $id_kantin == $row['id'] ? 'selected' : '' ?>>
                        <?= $row['nama_kantin'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>

    </div>

    <div>
        <input class="btn btn-warning btn-sm" type="button" value="Cancel" onclick="history.back()" />
        <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
    </div>

</form>

<script>
    var loadFile = function(event) {
        var image = document.getElementById('preview');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>