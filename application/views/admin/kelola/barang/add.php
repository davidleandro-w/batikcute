<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Tb Barang Add</h3>
                </div>
                <?php echo form_open_multipart('admin/kelola/barang_tambah'); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="kategori" class="control-label"><span class="text-danger">*</span>Kategori</label>
                            <div class="form-group">
                                <select name="kategori" class="form-control">
                                    <option value="">select</option>
                                    <?php
                                    $kategori_values = array(
                                        'Pria' => 'Pria',
                                        'Wanita' => 'Wanita',
                                        'Anak_anak' => 'Anak-anak',
                                        'Bahan_Kain' => 'Bahan Kain',
                                    );

                                    foreach ($kategori_values as $value => $display_text) {
                                        $selected = ($value == $this->input->post('kategori')) ? ' selected="selected"' : "";

                                        echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                                    }
                                    ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('kategori'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="jenis" class="control-label"><span class="text-danger">*</span>Jenis</label>
                            <div class="form-group">
                                <select name="jenis" class="form-control">
                                    <option value="">select</option>
                                    <?php
                                    $jenis_values = array(
                                        'Batik_cap' => 'Batik Cap',
                                        'Batik_tulis' => 'Batik Tulis',
                                    );

                                    foreach ($jenis_values as $value => $display_text) {
                                        $selected = ($value == $this->input->post('jenis')) ? ' selected="selected"' : "";

                                        echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                                    }
                                    ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('jenis'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="ukuran" class="control-label"><span class="text-danger">*</span>Ukuran</label>
                            <div class="form-group">
                                <select name="ukuran" class="form-control">
                                    <option value="">select</option>
                                    <?php
                                    $ukuran_values = array(
                                        'XL' => 'XL',
                                        'L' => 'L',
                                        'M' => 'M',
                                        'S' => 'S',
                                    );

                                    foreach ($ukuran_values as $value => $display_text) {
                                        $selected = ($value == $this->input->post('ukuran')) ? ' selected="selected"' : "";

                                        echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                                    }
                                    ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('ukuran'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_brg" class="control-label"><span class="text-danger">*</span>Nama Brg</label>
                            <div class="form-group">
                                <input type="text" name="nama_brg" value="<?php echo $this->input->post('nama_brg'); ?>" class="form-control" id="nama_brg" />
                                <span class="text-danger"><?php echo form_error('nama_brg'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="keterangan" class="control-label"><span class="text-danger">*</span>Keterangan</label>
                            <div class="form-group">
                                <input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" />
                                <span class="text-danger"><?php echo form_error('keterangan'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="modal" class="control-label"><span class="text-danger">*</span>Modal</label>
                            <div class="form-group">
                                <input type="text" name="modal" value="<?php echo $this->input->post('modal'); ?>" class="form-control" id="modal" />
                                <span class="text-danger"><?php echo form_error('modal'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="harga" class="control-label"><span class="text-danger">*</span>Harga</label>
                            <div class="form-group">
                                <input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" />
                                <span class="text-danger"><?php echo form_error('harga'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="stok" class="control-label"><span class="text-danger">*</span>Stok</label>
                            <div class="form-group">
                                <input type="text" name="stok" value="<?php echo $this->input->post('stok'); ?>" class="form-control" id="stok" />
                                <span class="text-danger"><?php echo form_error('stok'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="foto" class="control-label"><span class="text-danger"></span>Foto Produk</label>
                            <div class="form-group">
                                <input type="file" class="form-control mb-3" name="foto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Save
                    </button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>