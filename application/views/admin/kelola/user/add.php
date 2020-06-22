<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title text-dark font-weight-bold">Menambahkan User</h3>
                </div>
                <hr>
                <?php echo form_open_multipart('admin/kelola/user_tambah'); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="role_id" class="control-label"><span class="text-danger">*</span>Role Id</label>
                            <div class="form-group">
                                <select name="role_id" class="form-control">
                                    <option value="">select</option>
                                    <?php
                                    $role_id_values = array(
                                        '1' => 'Admin',
                                        '2' => 'User',
                                    );

                                    foreach ($role_id_values as $value => $display_text) {
                                        $selected = ($value == $this->input->post('role_id')) ? ' selected="selected"' : "";

                                        echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                                    }
                                    ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('role_id'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
                            <div class="form-group">
                                <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
                                <span class="text-danger"><?php echo form_error('password'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_dpn" class="control-label"><span class="text-danger">*</span>Nama Dpn</label>
                            <div class="form-group">
                                <input type="text" name="nama_dpn" value="<?php echo $this->input->post('nama_dpn'); ?>" class="form-control" id="nama_dpn" />
                                <span class="text-danger"><?php echo form_error('nama_dpn'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_blkng" class="control-label"><span class="text-danger">*</span>Nama Blkng</label>
                            <div class="form-group">
                                <input type="text" name="nama_blkng" value="<?php echo $this->input->post('nama_blkng'); ?>" class="form-control" id="nama_blkng" />
                                <span class="text-danger"><?php echo form_error('nama_blkng'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
                            <div class="form-group">
                                <input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="foto" class="control-label"><span class="text-danger"></span>Foto Pengguna</label>
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