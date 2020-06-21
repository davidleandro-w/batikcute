<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-dolly-flatbed"></i> Harus Segera Dikemas</h1>
    <p class="mb-4">Tabel ini berisi pesanan yang telah dibayar dan harus segera dikirimkan.</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Daftar Pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID Invoice</th>
                            <th>ID Pemesan</th>
                            <th>Nama Penerima</th>
                            <th>Alamat Pengiriman</th>
                            <th>No Telp.</th>
                            <th>Bank</th>
                            <th>Kurir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($pengemasan)) : ?>
                            <?php
                            foreach ($pengemasan as $png) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $png->id ?></td>
                                    <td><?php echo $png->id_pemesan ?></td>
                                    <td><?php echo $png->nama ?></td>
                                    <td><?php echo $png->alamat ?></td>
                                    <td><?php echo $png->no_telp ?></td>
                                    <td><?php echo $png->bank ?></td>
                                    <td><?php echo $png->kurir ?></td>
                                    <td class="text-center"><?php echo anchor(
                                                                'admin/pesanan/detail_pesanan/' . $png->id,
                                                                '<div class="btn btn-sm btn-primary">Detail</div>'
                                                            ) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>