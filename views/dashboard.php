<!--data dummy aja-->
<?php
$stokRendah = [
    [
        'nama' => 'Kirim Rebonding Makarizo',
        'sisa' => '150 gram',
        'gambar' => 'customer02.jpg'
    ],
    [
        'nama' => "Sampo L'Oreal",
        'sisa' => '200 gram',
        'gambar' => 'customer01.jpg'
    ],
    [
        'nama' => 'Hair Cream Makarizo',
        'sisa' => '2 pcs',
        'gambar' => 'customer02.jpg'
    ]
];
?>

<div class="topbar">

    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="tanggal">
        <div class="icon-tgl">
            <ion-icon name="time-outline"></ion-icon>
        </div>

        <div class="info-tgl">
            <div class="tgl">Senin, 8 September 2026</div>
            <div class="jam">10:30</div>
        </div>
    </div>

</div>

<div class="title-page">
    <h1>DASHBOARD</h1>
    <h3>Selamat datang, Agus</h3>
</div>

<!-- ======================= Cards ================== -->
<div class="cardBox">
    <div class="card">
        <div class="iconBx">
            <ion-icon name="wallet-outline"></ion-icon>
        </div>

        <div>
            <div class="cardName">Pendapatan Hari ini</div>
            <div class="numbers">Rp. 2.850.000</div>
            <div class="status-card">
                <div class="up">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </div>
                <span class="profit-naik">12% dari kemarin</span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="iconBx">
            <ion-icon name="cut-outline"></ion-icon>
        </div>

        <div>
            <div class="cardName">Layanan Hari ini</div>
            <div class="angka">18</div>
            <div class="status-card">
                <div class="down">
                    <ion-icon name="arrow-down-outline"></ion-icon>
                </div>
                <span class="profit-turun">3% dari kemarin</span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="iconBx">
            <ion-icon name="cube-outline"></ion-icon>
        </div>

        <div>
            <div class="cardName">Barang Stok Rendah</div>
            <div class="angka">3</div>
            <span class="stok">Perlu segera dibeli</span>

        </div>
    </div>

    <div class="card">
        <div class="iconBx">
            <ion-icon name="people-outline"></ion-icon>
        </div>

        <div>
            <div class="cardName">Karyawan Aktif</div>
            <div class="angka">6</div>
            <span class="aktif">Hari ini bekerja</span>
        </div>
    </div>
</div>

<!-- ================ Details List ================= -->
<div class="details">
    <div class="income">
        <div class="cardHeader">
            <h2>PENDAPATAN SALON</h2>
        </div>
        <div class="pendapatan-hari">
            <h2>Rp. 2.580.000</h2>
        </div>

        <table>

            <?php for ($i = 0; $i < count($stokRendah); $i++) { ?>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/<?= $stokRendah[$i]['gambar']; ?>" alt="">
                        </div>
                    </td>

                    <td>
                        <h4>
                            <?= $stokRendah[$i]['nama']; ?>
                        </h4>
                    </td>
                    <td><span class=""><?= $stokRendah[$i]['sisa']; ?></span></td>
                </tr>

            <?php } ?>

        </table>
    </div>

    <!-- ================= New Customers ================ -->
    <div class="stok-rendah">
        <div class="cardHeader">
            <h2>STOK RENDAH</h2>
            <a href="#" class="btn">View All</a>
        </div>

        <table>

            <?php for ($i = 0; $i < count($stokRendah); $i++) { ?>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/<?= $stokRendah[$i]['gambar']; ?>" alt="">
                        </div>
                    </td>

                    <td>
                        <h4>
                            <?= $stokRendah[$i]['nama']; ?><br>
                            <span class="stok">
                                Sisa: <?= $stokRendah[$i]['sisa']; ?>
                            </span>
                        </h4>
                    </td>
                    <td><span class="status return">Beli Cepat</span></td>
                </tr>

            <?php } ?>

        </table>
    </div>

    <div class="layanan">
        <div class="cardHeader">
            <h2>LAYANAN TERATAS</h2>
            <a href="#" class="btn">View All</a>
        </div>

        <table>

            <?php for ($i = 0; $i < count($stokRendah); $i++) { ?>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/<?= $stokRendah[$i]['gambar']; ?>" alt="">
                        </div>
                    </td>

                    <td>
                        <h4>
                            <?= $stokRendah[$i]['nama']; ?><br>
                        </h4>
                    </td>
                    <td><span>
                            <?= $stokRendah[$i]['sisa']; ?> transaksi
                        </span></td>
                </tr>

            <?php } ?>

        </table>
    </div>

    <div class="aktivitas">
        <div class="cardHeader">
            <h2>AKTIVITAS TERBARU</h2>
            <a href="#" class="btn">View All</a>
        </div>

        <table>

            <?php for ($i = 0; $i < count($stokRendah); $i++) { ?>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/<?= $stokRendah[$i]['gambar']; ?>" alt="">
                        </div>
                    </td>

                    <td>
                        <h4>
                            <?= $stokRendah[$i]['nama']; ?><br>
                            <span class="stok">
                                Sisa: <?= $stokRendah[$i]['sisa']; ?>
                            </span>
                        </h4>
                    </td>
                </tr>

            <?php } ?>

        </table>
    </div>
</div>
</div>