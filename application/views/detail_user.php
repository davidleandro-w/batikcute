<div class="container-fluid">

    <div class="card border-bottom-danger">
        <h5 class="card-header">Profil Anda</h5>
        <div class="card-body">
            <?php foreach ($user as $usr) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/assets/img/user/' . $usr->foto ?>" class="rounded card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td><strong><?php echo $usr->id ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama Depan</td>
                                <td><strong><?php echo $usr->nama_dpn ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama Belakang</td>
                                <td><strong><?php echo $usr->nama_blkng ?></strong></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><strong><?php echo $usr->email ?></strong></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><strong><?php echo $usr->password ?></strong></td>
                            </tr>
                        </table>

                        <a href="<?php echo site_url('user/edit_profile') ?>"><button class="btn btn-info btn-sm">Ubah data</button></a>
                        <?php echo anchor('dashboard/index/', '
                <div href="" class="btn btn-sm btn-danger mr-2" data-toggle="tooltip" data-placement="top" title="Kembali">
                Kembali
                </div>
                ') ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>