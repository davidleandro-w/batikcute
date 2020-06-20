<div class="container-fluid">

	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Profile : <?php echo $this->session->userdata('nama_dpn'); ?> <?php echo $this->session->userdata('nama_blkng'); ?></h3>
				</div>
				<?php echo form_open_multipart('user/edit_profile'); ?>
				<div class="box-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="nama_dpn" class="control-label"><span class="text-danger">*</span>Nama Dpn</label>
							<div class="form-group">
								<input type="text" name="nama_dpn" value="<?php echo ($this->input->post('nama_dpn') ? $this->input->post('nama_dpn') : $tb_user['nama_dpn']); ?>" class="form-control" id="nama_dpn" />
								<span class="text-danger"><?php echo form_error('nama_dpn'); ?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
							<div class="form-group">
								<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $tb_user['password']); ?>" class="form-control" id="password" />
								<span class="text-danger"><?php echo form_error('password'); ?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="nama_blkng" class="control-label"><span class="text-danger">*</span>Nama Blkng</label>
							<div class="form-group">
								<input type="text" name="nama_blkng" value="<?php echo ($this->input->post('nama_blkng') ? $this->input->post('nama_blkng') : $tb_user['nama_blkng']); ?>" class="form-control" id="nama_blkng" />
								<span class="text-danger"><?php echo form_error('nama_blkng'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="foto" class="control-label"><span class="text-danger">*</span>Foto Profil</label>
							<input type="file" class="form-control" name="foto">
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