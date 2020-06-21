<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Detail Pesanan: <div class="badge badge-primary">invoice <?php echo $invoice->id ?></div>
    </h1>
    <p class="mb-4">Tabel ini berisi detail dari pesanan.</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Detail Pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Id Barang</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga Satuan</th>
                            <th>Sub-Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($pesanan as $psn) :
                            $subtotal = $psn->jumlah * $psn->harga;
                            $total += $subtotal;
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $psn->id_brg ?></td>
                                <td><?php echo $psn->nama_brg ?></td>
                                <td class="text-center"><?php echo $psn->jumlah ?></td>
                                <td><?php echo number_format($psn->harga) ?></td>
                                <td>Rp <?php echo number_format($subtotal, 2, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <tfooter>
                        <tr>
                            <td colspan="4" align="right">Grand Total</td>
                            <td>Rp <?php echo number_format($total, 2, ',', '.') ?></td>
                        </tr>
                    </tfooter>
                </table>
                <div align="right">
                    <a href="<?php echo site_url('admin/pesanan/kirimkan/' . $invoice->id) ?>">
                        <div class="btn btn-sm btn-danger"><i class="fas fa-shipping-fast"></i> KIRIMKAN</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>