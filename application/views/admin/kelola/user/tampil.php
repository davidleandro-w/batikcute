<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold"><i class="fas fa-fw fa-users"></i> Daftar Pengguna Batikcute</h1>
    <p class="mb-4">Daftar pengguna yang telah mendaftar pada batikcute</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Daftar Admin Batikcute</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nama Depan</th>
                            <th>Belakang</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($admin)) : ?>
                            <?php
                            foreach ($admin as $a) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $a->id ?></td>
                                    <td class="text-center"><?php echo $a->nama_dpn ?></td>
                                    <td class="text-center"><?php echo $a->nama_blkng ?></td>
                                    <td class="text-center"><?php echo $a->email ?></td>
                                    <td class="text-center"><?php ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Daftar Pengguna Batikcute</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nama Depan</th>
                            <th>Belakang</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($user)) : ?>
                            <?php
                            foreach ($user as $a) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $a->id ?></td>
                                    <td class="text-center"><?php echo $a->nama_dpn ?></td>
                                    <td class="text-center"><?php echo $a->nama_blkng ?></td>
                                    <td class="text-center"><?php echo $a->email ?></td>
                                    <td class="text-center"><?php ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>