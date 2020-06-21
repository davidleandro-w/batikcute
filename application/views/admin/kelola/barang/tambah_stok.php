<div class="container-fluid card col-md-3">
    <?php echo form_open('admin/kelola/stok_tambah/' . $barang->id_brg) ?>
    <div class="card-header text-center">
        <label for="stok" class="control-label h5 font-weight-bold text-success"><span class="text-danger"></span>Masukkan Pertambahan Stok</label>
        <small>nama produk(id):</small>
        <p class="font-weight-bold"><?php echo $barang->nama_brg ?> (<?php echo $barang->id_brg ?>)</p>
    </div>
    <div class="form-group card-body">
        <input type="text" name="stok" value="<?php echo $this->input->post('stok'); ?>" class="form-control" id="stok" />
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i> Simpan
        </button>
    </div>
    <?php echo form_close() ?>
</div>