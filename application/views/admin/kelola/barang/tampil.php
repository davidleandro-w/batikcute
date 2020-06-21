<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold"><i class="fas fa-fw fa-boxes"></i> Daftar Produk Batikcute</h1>
    <p class="mb-3">Daftar produk yang tersedia pada Batikcute</p>
    <hr>
    <p>Pilih tombol salah satu tombol dibawah ini untuk menampilkan produk dalam kategori/jenis tertentu.</p>
    <a href="<?php echo site_url('admin/kelola/barang_tampil/all') ?>" class="btn btn-danger btn-icon-split btn mb-3">
        <span class="icon text-white-50">
            <i class="fas fa-tasks"></i>
        </span>
        <span class="text">Semua</span>
    </a>
    <a href="<?php echo site_url('admin/kelola/barang_tampil/pria') ?>" class="btn btn-warning btn-icon-split btn mb-3">
        <span class="icon text-white-50">
            <i class="fas fa-male"></i>
        </span>
        <span class="text">Pria</span>
    </a>
    <a href="<?php echo site_url('admin/kelola/barang_tampil/wanita') ?>" class="btn btn-primary btn-icon-split btn mb-3">
        <span class="icon text-white-50">
            <i class="fas fa-male"></i>
        </span>
        <span class="text">Wanita</span>
    </a>
    <a href="<?php echo site_url('admin/kelola/barang_tampil/anak_anak') ?>" class="btn btn-info btn-icon-split btn mb-3">
        <span class="icon text-white-50">
            <i class="fas fa-child"></i>
        </span>
        <span class="text">Anak-anak</span>
    </a>
    <a href="<?php echo site_url('admin/kelola/barang_tampil/bahan_kain') ?>" class="btn btn-success btn-icon-split btn mb-3">
        <span class="icon text-white-50">
            <i class="fas fa-cut"></i>
        </span>
        <span class="text">Bahan Kain</span>
    </a>
    <a href="<?php echo site_url('admin/kelola/barang_tampil/batik_cap') ?>" class="fa-pull-right btn btn-secondary btn mb-3 border-left-danger">
        <span class="text">Batik Cap</span>
    </a>
    <a href="<?php echo site_url('admin/kelola/barang_tampil/batik_tulis') ?>" class="fa-pull-right btn btn-secondary btn mb-3 border-left-danger mx-1">
        <span class="text">Batik Tulis</span>
    </a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Daftar Produk Batikcute</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Kategori</th>
                            <th>Jenis</th>
                            <th>Ukuran</th>
                            <th>Modal</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($barang)) : ?>
                            <?php
                            foreach ($barang as $a) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $a->id_brg ?></td>
                                    <td class="text-center"><?php echo $a->nama_brg ?></td>
                                    <td class="text-center"><?php echo $a->keterangan ?></td>
                                    <td class="text-center"><?php echo $a->kategori ?></td>
                                    <td class="text-center"><?php echo $a->jenis ?></td>
                                    <td class="text-center"><?php echo $a->ukuran ?></td>
                                    <td class="text-center"><?php echo $a->modal ?></td>
                                    <td class="text-center"><?php echo $a->harga ?></td>
                                    <td class="text-center"><?php echo $a->stok ?></td>
                                    <td class="text-center"><img src="<?php echo base_url() . '/assets/img/produk/' . $a->gambar ?>" class="rounded card-img-top"></td>
                                    <td class="text-center">
                                        <a href="<?php echo site_url('admin/kelola/barang_ubah/' . $a->id_brg) ?>" class="btn btn-sm btn-primary mb-1" data-placement="top" title="Ubah data"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo site_url('admin/kelola/barang_hapus/' . $a->id_brg) ?>" class="btn btn-sm btn-danger" data-placement="top" title="Hapus Produk"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>