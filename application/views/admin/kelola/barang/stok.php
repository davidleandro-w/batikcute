<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold"><i class="fas fa-fw fa-boxes"></i> Pengelolaan Stok Produk</h1>
    <p class="mb-3">Daftar stok produk pada Batikcute</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Daftar Produk Stok Habis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Jenis</th>
                            <th>Ukuran</th>
                            <th>Stok</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($habis)) : ?>
                            <?php
                            foreach ($habis as $a) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $a->id_brg ?></td>
                                    <td class="text-center"><?php echo $a->nama_brg ?></td>
                                    <td class="text-center"><?php echo $a->kategori ?></td>
                                    <td class="text-center"><?php echo $a->jenis ?></td>
                                    <td class="text-center"><?php echo $a->ukuran ?></td>
                                    <td class="text-center"><?php echo $a->stok ?></td>
                                    <td class="text-center"><img src="<?php echo base_url() . '/assets/img/produk/' . $a->gambar ?>" class="rounded" width="50px"></td>
                                    <td class="text-center">

                                        <a href="<?php echo site_url('admin/kelola/stok_tambah/' . $a->id_brg) ?>" class="btn btn-sm btn-success" data-placement="top" title="tambah stok">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <a href="<?php echo site_url('admin/kelola/stok_sync/' . $a->id_brg) ?>" class="btn btn-sm btn-primary" data-placement="top" title="sesuaikan stok">
                                            <i class="fas fa-sync"></i>
                                        </a>

                                    </td>
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
            <h6 class="m-0 font-weight-bold text-danger">Daftar Produk Batikcute</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Jenis</th>
                            <th>Ukuran</th>
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
                                    <td class="text-center"><?php echo $a->kategori ?></td>
                                    <td class="text-center"><?php echo $a->jenis ?></td>
                                    <td class="text-center"><?php echo $a->ukuran ?></td>
                                    <td class="text-center"><?php echo $a->stok ?></td>
                                    <td class="text-center"><img src="<?php echo base_url() . '/assets/img/produk/' . $a->gambar ?>" class="rounded" width="50px"></td>
                                    <td class="text-center">

                                        <a href="<?php echo site_url('admin/kelola/stok_tambah/' . $a->id_brg) ?>" class="btn btn-sm btn-success" data-placement="top" title="tambah stok">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <a href="<?php echo site_url('admin/kelola/stok_sync/' . $a->id_brg) ?>" class="btn btn-sm btn-primary" data-placement="top" title="sesuaikan stok">
                                            <i class="fas fa-sync"></i>
                                        </a>

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