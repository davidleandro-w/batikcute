<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-fw fa-file-invoice-dollar"></i> Belum Dibayar</h1>
    <p class="mb-4">Tabel ini berisi pesanan dari seluruh pengguna yang belum dibayar.</p>
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
                            <th>Email Pemesan</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Batas Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($pesanan)) : ?>
                            <?php
                            foreach ($pesanan as $a) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $a->id ?></td>
                                    <td class="text-center"><?php echo $a->id_pemesan ?></td>
                                    <td><?php echo $a->email ?></td>
                                    <td class="text-center"><?php echo $a->tgl_pesan ?></td>
                                    <td class="text-center"><?php echo $a->batas_bayar ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>