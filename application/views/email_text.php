<div>
        <p>
                Pembayaran anda telah berhasil<br>
                ID Invoice : <?php echo $invoice->id ?>
                Nama Pemesan : <?php echo $this->session->userdata('email') ?>
                Nama Penerima : <?php echo $invoice->nama ?><br>
                Tanggal Pemesanan : <?php echo $invoice->tgl_pesan ?><br>
                Metode Pembayaran : <?php echo $invoice->bank ?><br>
                Total Pembayaran : <?php echo $invoice->bank ?><br>
                Alamat Pengiriman : <?php echo $invoice->alamat ?><br>
                Jasa Pengiriman : <?php echo $invoice->kurir ?><br>
                Pesanan akan segera dikirim. Terima kasih telah berbelanja di Batikcute.<br>
        </p>
</div>