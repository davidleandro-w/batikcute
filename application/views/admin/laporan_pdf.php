<!DOCTYPE html>
<html lang="en"><head>
    <title></title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
h1,h2,h3 {text-align: center;}
</style>
</head><body>
    <h1>LAPORAN KEUNGAN BATIKCUTE</h1>
    <h3>TABEL INVOICE BULAN INI</h3>
    <p><?php echo "Laporan tertanggal: " . date("Y/m/d"); echo ", " . date("h:i:sa"); ?></p>
    <table style="width:100%">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>ID Pemesan</th>
            <th>Nama Penerima</th>
            <th>Alamat Pengiriman</th>
            <th>No Telp.</th>
            <th>Tanggal Pesan</th>
            <th>Bank</th>
            <th>Kurir</th>
            <th>Status</th>
        </tr>
        <?php
        $no = 1;
        foreach ($invoice as $a) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $a->id ?></td>
                <td><?php echo $a->id_pemesan ?></td>
                <td><?php echo $a->nama ?></td>
                <td><?php echo $a->alamat ?></td>
                <td><?php echo $a->no_telp ?></td>
                <td><?php echo $a->tgl_pesan ?></td>
                <td><?php echo $a->bank ?></td>
                <td><?php echo $a->kurir ?></td>
                <td><?php echo $a->status ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br><br>
    <h3>TABEL PESANAN BULAN INI</h3>
    <p><?php echo "Laporan tertanggal: " . date("Y/m/d"); echo ", " . date("h:i:sa"); ?></p>
    <table style="width:100%">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>ID Invoice</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>            
        </tr>
        <?php
        $no = 1;
        foreach ($pesanan as $a) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $a->id ?></td>
                <td><?php echo $a->id_invoice ?></td>
                <td><?php echo $a->id_brg ?></td>
                <td><?php echo $a->nama_brg ?></td>
                <td><?php echo $a->jumlah ?></td>
                <td><?php echo $a->harga ?></td>                
            </tr>
        <?php endforeach; ?>
    </table>

    <br><br>
    <h3>TABEL KETERSEDIAAN STOK SAAT INI</h3>
    <p><?php echo "Laporan tertanggal: " . date("Y/m/d"); echo ", " . date("h:i:sa"); ?></p>
    <table style="width:100%">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Jenis</th>
            <th>Ukuran</th>
            <th>Modal</th>
            <th>Harga</th>
            <th>Stok</th>            
        </tr>
        <?php
        $no = 1;
        foreach ($stok as $a) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $a->id_brg ?></td>
                <td><?php echo $a->nama_brg ?></td>
                <td><?php echo $a->kategori ?></td>
                <td><?php echo $a->jenis ?></td>
                <td><?php echo $a->ukuran ?></td>
                <td><?php echo $a->modal ?></td>                
                <td><?php echo $a->harga ?></td>                
                <td><?php echo $a->stok ?></td>                
            </tr>
        <?php endforeach; ?>
    </table>

    <br><br><br><br><br><br>
    <h3>RESUME</h3>
    <p><?php echo "Laporan tertanggal: " . date("Y/m/d"); echo ", " . date("h:i:sa"); ?></p>
    <h5>Pendapatan total bulan ini: Rp <?php echo number_format($pendapatan->total, 2, ',', '.') ?></h5>
    <h5>Keuntungan total bulan ini: Rp <?php echo number_format($keuntungan->total, 2, ',', '.') ?></h5>
    <h5>Jumlah Barang terjual bulan ini: <?php echo $barang->total ?></h5>
    <h5>Jumlah Transaksi bulan ini: <?php echo $transaksi->total ?></h5>
    <br><br><br>
    <p>batikcute.manajer@gmail.com</p>
</body></html>