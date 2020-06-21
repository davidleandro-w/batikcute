<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold"><i class="fas fa-tachometer-alt"></i> Dashboard dan Laporan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-danger shadow-sm"><i class="fas fa-file-pdf fa-sm text-white-50"></i> Cetak PDF</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pendapatan perHari Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?php echo number_format($data1->total, 2, ',', '.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pendapatan perBulan Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?php echo number_format($data2->total, 2, ',', '.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Harus Dikirim</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $data3->total ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $data3->total . "%" ?>" aria-valuenow="<?php echo $data3->total ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shipping-fast fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Stok Habis</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data4->total ?></div>
                        </div>

                        <a href="<?php echo site_url('admin/kelola/stok_tampil') ?>" class="btn btn-sm btn-secondary">Kelola</a>
                        <div class="col-auto ml-2">
                            <i class="fas fa-thermometer-empty fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-check-circle text-success"></i> Grafik Penjualan Tahun Ini</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div>
                        <div class="chart-area">
                            <canvas id="myChart"></canvas>
                        </div>
                        <script>
                            var ctx = document.getElementById("myChart");
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: [<?php
                                                if (count($data5) > 0) {
                                                    foreach ($data5 as $d) {
                                                        echo "'" . $d->bulan . "',";
                                                    }
                                                }
                                                ?>],
                                    datasets: [{
                                        label: '# Data Penjualan Barang',
                                        data: [<?php
                                                if (count($data5) > 0) {
                                                    foreach ($data5 as $d) {
                                                        echo $d->total . ", ";
                                                    }
                                                }
                                                ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-list text-primary"></i> Terjual perKategori Bulan Ini</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie">
                        <canvas id="myChartPie"></canvas>
                        <script>
                            var ctx = document.getElementById("myChartPie");
                            var myChart = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: [<?php
                                                if (count($data5) > 0) {
                                                    foreach ($data6 as $d) {
                                                        echo "'" . $d->kategori . "',";
                                                    }
                                                }
                                                ?>],
                                    datasets: [{
                                        label: '# of Votes',
                                        data: [<?php
                                                if (count($data6) > 0) {
                                                    foreach ($data6 as $d) {
                                                        echo $d->total . ", ";
                                                    }
                                                }
                                                ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132)',
                                            'rgba(54, 162, 235)',
                                            'rgba(255, 206, 86)',
                                            'rgba(75, 192, 192)',
                                            'rgba(153, 102, 255)',
                                            'rgba(255, 159, 64)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-table text-info"></i> Tabel Keuntungan Bulan Ini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>Tanggal</th>
                                    <th>Transaksi</th>
                                    <th>Terjual</th>
                                    <th>Pendapatan</th>
                                    <th>Keuntungan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (is_array($data7)) : ?>
                                    <?php
                                    foreach ($data7 as $d) : ?>
                                        <tr>
                                            <td class="text-center"><?php echo $d->tanggal ?></td>
                                            <td class="text-center"><?php echo $d->transaksi ?></td>
                                            <td class="text-center"><?php echo $d->terjual ?></td>
                                            <td>Rp <?php echo number_format($d->pendapatan, 2, ',', '.') ?></td>
                                            <td>Rp <?php echo number_format($d->keuntungan, 2, ',', '.') ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-users text-danger"></i> 3 Pengguna Paling Banyak Melakukan Transaksi Bulan Ini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>Rank</th>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Transaksi</th>
                                    <th>Uang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (is_array($data8)) : ?>
                                    <?php
                                    $rank = 1;
                                    foreach ($data8 as $d) : ?>
                                        <tr>
                                            <td class="text-center"><?php echo $rank++ ?></td>
                                            <td class="text-center"><?php echo $d->id ?></td>
                                            <td><?php echo $d->email ?></td>
                                            <td class="text-center"><?php echo $d->transaksi ?></td>
                                            <td>Rp <?php echo number_format($d->uang, 2, ',', '.') ?></td>
                                            <!--
                                        <td class="text-center"><?php echo anchor(
                                                                    'invoice/detail/' . $inv->id,
                                                                    '<div class="btn btn-sm btn-primary">Detail</div>'
                                                                ) ?></td>
                                                                -->
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-boxes text-warning"></i> 5 Barang Paling Banyak Terjual Bulan Ini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>Rank</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Terjual</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if (is_array($data9)) : ?>
                                    <?php
                                    $rank = 1;
                                    foreach ($data9 as $d) : ?>
                                        <tr>
                                            <td class="text-center"><?php echo $rank++ ?></td>
                                            <td class="text-center"><?php echo $d->id ?></td>
                                            <td class="text-center"><?php echo $d->nama ?></td>
                                            <td class="text-center"><?php echo $d->kategori ?></td>
                                            <td class="text-center"><?php echo $d->terjual ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->