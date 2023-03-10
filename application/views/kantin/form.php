<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('kantin/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah Kantin</h3>
    </div>
</div>
<div class="row mb-3">
    <label class="form-label">Nama Kantin</label>
    <div class="col-sm-6">
        <input class="form-control" type="text" name="nama_kantin" id="nama_kantin" value="<?= $nama_kantin ?>" required/>
    </div>
</div>

<div class="row mb-3">
    <label class="form-label">Telpon</label>
    <div class="col-sm-6">
        <textarea class="form-control" type="text" name="telpon" id="telpon" required><?= $telpon ?></textarea>
    </div>
</div>

<div>
    <input class="btn btn-warning btn-sm" type="button" value="Cancel" onclick="history.back()" />
    <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
</div>

</form>
