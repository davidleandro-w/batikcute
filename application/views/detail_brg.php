<div class="container-fluid">
    <div class="card border-bottom-danger">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/assets/img/produk/' . $brg->gambar ?>" class="rounded card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brg->nama_brg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td><strong><?php echo $brg->jenis ?></strong></td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td><strong><?php echo $brg->ukuran ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>Rp <?php echo number_format($brg->harga, 2, ',', '.') ?></strong></td>
                            </tr>
                        </table>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '
                <div href="" class="btn btn-sm btn-success mr-2" data-toggle="tooltip" data-placement="top" title="Masukkan ke keranjang">
                <i class="fas fa-shopping-cart"></i>
                </div>
                ') ?>
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