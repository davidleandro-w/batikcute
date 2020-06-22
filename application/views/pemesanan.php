<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"><br>
            <?php
            $grand_total = 0;
            if ($keranjang = $this->cart->contents()) {
                foreach ($keranjang as $item) {
                    $grand_total = $grand_total + $item['subtotal'];
                }

            ?>
                <h3>Input Alamat Pengiriman dan Pembayaran</h3>
                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group">
                        <label>Nama</label><input type="text" name="nama" class="form-control" placeholder="Nama penerima paket" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label><input type="text" name="alamat" class="form-control" placeholder="Alamat lengkap pengiriman" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label><input type="text" name="no_telp" class="form-control" placeholder="Nomor telepon anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control" name="kurir" type="text">
                            <option>JNE</option>
                            <option>JNT</option>
                            <option>POS Indonesia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Bank Untuk Pembayaran Tagihan</label>
                        <select class="form-control" name="bank" type="text">
                            <option>Koin Batikcute</option>
                            <option>BCA</option>
                            <option>BRI</option>
                            <option>BNI</option>
                            <option>Mandiri</option>
                        </select>
                    </div>

                    <div class="btn btn-sm btn-danger">
                        <?php echo "Total Belanja Anda: Rp " . number_format($grand_total, 2, ',', '.'); ?>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                </form>
            <?php
            } else {
                echo "Keranjang belanja anda masih kosong";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>