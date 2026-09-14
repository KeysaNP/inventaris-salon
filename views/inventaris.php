<!--data dummy aja-->
<?php
$inventaris = [
    [
        'kode' => 'B001',
        'nama' => 'Krim Rebonding Makarizo',
        'stok' => 850,
        'satuan' => 'gram',
        'harga_modal' => 400,
        'status' => 'Aman'
    ],
    [
        'kode' => 'B002',
        'nama' => "Sampo L'Oreal",
        'stok' => 450,
        'satuan' => 'ml',
        'harga_modal' => 100,
        'status' => 'Aman'
    ],
    [
        'kode' => 'B003',
        'nama' => 'Serum Biolios',
        'stok' => 50,
        'satuan' => 'ml',
        'harga_modal' => 250,
        'status' => 'Rendah'
    ],
    [
        'kode' => 'B004',
        'nama' => 'Hair Cream Makarizo',
        'stok' => 8,
        'satuan' => 'pcs',
        'harga_modal' => 75000,
        'status' => 'Aman'
    ],
    [
        'kode' => 'B005',
        'nama' => 'Kutek OPI',
        'stok' => 20,
        'satuan' => 'pcs',
        'harga_modal' => 50000,
        'status' => 'Aman'
    ]
];
?>

<?php
$resep = [
    [
        'barang' => 'Krim Rebonding Makarizo',
        'takaran' => '150 gram',
        'modal' => 60000
    ],
    [
        'barang' => "Sampo L'Oreal",
        'takaran' => '50 ml',
        'modal' => 5000
    ]
];

$totalModalResep = 65000;
?>
<?php
$kategori = [
    [
        'id' => 1,
        'nama' => 'Obat Kimia Rambut'
    ],
    [
        'id' => 2,
        'nama' => 'Shampoo'
    ],
    [
        'id' => 3,
        'nama' => 'Skincare'
    ],
    [
        'id' => 4,
        'nama' => 'Nail Care'
    ]
];

$statusBarang = [
    [
        'value' => 'aman',
        'nama' => 'Aman'
    ],
    [
        'value' => 'rendah',
        'nama' => 'Rendah'
    ],
    [
        'value' => 'habis',
        'nama' => 'Habis'
    ]
];
?>

<?php
$dataPerHalaman = 5;

$totalData = count($inventaris);

$totalHalaman = ceil($totalData / $dataPerHalaman);

$halamanAktif = isset($_GET['halaman'])
    ? (int) $_GET['halaman']
    : 1;

if ($halamanAktif < 1) {
    $halamanAktif = 1;
}

if ($halamanAktif > $totalHalaman) {
    $halamanAktif = $totalHalaman;
}

$mulai = ($halamanAktif - 1) * $dataPerHalaman;

$inventarisTampil = array_slice(
    $inventaris,
    $mulai,
    $dataPerHalaman
);
$detailBarang = $inventaris[0];
?>

<?php
// Hitung otomatis berdasarkan data array inventaris
$totalBarang = count($inventaris);
$stokAman   = 0;
$stokRendah = 0;
$stokHabis  = 0;

foreach ($inventaris as $item) {
    if ($item['status'] === 'Aman') {
        $stokAman++;
    } elseif ($item['status'] === 'Rendah') {
        $stokRendah++;
    } elseif ($item['status'] === 'Habis') {
        $stokHabis++;
    }
}
?>


<!-- ========================= Main ==================== -->

<div class="topbar">

    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
    <div class="search">
        <label>
            <input type="text" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>

    <!-- Filter Kategori -->
    <div class="inventory-select">
        <select name="kategori">
            <option value="">
                Semua Kategori
            </option>
            <?php foreach ($kategori as $item): ?>
                <option value="<?= $item['id']; ?>">
                    <?= $item['nama']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <ion-icon name="chevron-down-outline"></ion-icon>
    </div>

    <!-- Filter Status -->
    <div class="inventory-select">
        <select name="status">
            <option value="">
                Semua Status
            </option>
            <?php foreach ($statusBarang as $status): ?>
                <option value="<?= $status['value']; ?>">
                    <?= $status['nama']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <ion-icon name="chevron-down-outline"></ion-icon>
    </div>

    <!-- Tambah Barang -->
    <button type="button" class="inventory-add-btn">
        <ion-icon name="add-outline"></ion-icon>
        <span>Tambah Barang</span>
    </button>
</div>

<!-- Summary Cards Inventaris -->
<div class="card-box-inventaris">
    
    <!-- Total Barang -->
    <div class="card-inv">
        <div class="card-icon icon-total">
            <ion-icon name="cube-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Total Barang</span>
            <h3><?= $totalBarang; ?></h3>
        </div>
    </div>

    <!-- Stok Aman -->
    <div class="card-inv">
        <div class="card-icon icon-aman">
            <ion-icon name="lock-open-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Stok Aman</span>
            <h3><?= $stokAman; ?></h3>
        </div>
    </div>

    <!-- Stok Rendah -->
    <div class="card-inv">
        <div class="card-icon icon-rendah">
            <ion-icon name="bag-handle-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Stok Rendah</span>
            <h3><?= $stokRendah; ?></h3>
        </div>
    </div>

    <!-- Stok Habis -->
    <div class="card-inv">
        <div class="card-icon icon-habis">
            <ion-icon name="lock-closed-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Stok Habis</span>
            <h3><?= $stokHabis; ?></h3>
        </div>
    </div>

</div>


<div class="inventory-table-wrapper">
    
    <h3>
        Daftar Inventaris
    </h3><br>
    <table class="inventory-table">

        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Harga Modal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($inventaris as $barang): ?>

                <tr>

                    <td>
                        <?= $barang['kode'] ?>
                    </td>

                    <td class="barang-name">
                        <?= $barang['nama'] ?>
                    </td>

                    <td>
                        <?= $barang['stok'] ?>
                    </td>

                    <td>
                        <?= $barang['satuan'] ?>
                    </td>

                    <td>
                        Rp <?= number_format(
                            $barang['harga_modal'],
                            0,
                            ',',
                            '.'
                        ) ?>/<?= $barang['satuan'] ?>
                    </td>

                    <td>

                        <?php if ($barang['status'] == 'Aman'): ?>

                            <span class="inventory-status status-aman">
                                Aman
                            </span>

                        <?php elseif ($barang['status'] == 'Rendah'): ?>

                            <span class="inventory-status status-rendah">
                                Rendah
                            </span>

                        <?php else: ?>

                            <span class="inventory-status status-habis">
                                Habis
                            </span>

                        <?php endif; ?>

                    </td>

                    <td>

                        <button type="button" class="inventory-action" title="Aksi">
                            <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                        </button>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>
<div class="inventory-details">
    <!-- Card Detail Barang -->
    <div class="dtl-barang">
        <div class="dtl-header">
            <h3>Detail Barang</h3>
        </div>

        <div class="dtl-content">
            <div class="dtl-image">
                <img src="assets/imgs/customer02.jpg" alt="<?= $detailBarang['nama']; ?>" onerror="this.style.display='none';">
            </div>

            <div class="dtl-info">
                <div class="dtl-name"><?= $detailBarang['nama']; ?></div>
                <div class="dtl-kode"><?= $detailBarang['kode']; ?></div>
                <div class="dtl-stok">
                    Stok: <?= $detailBarang['stok']; ?> <?= $detailBarang['satuan']; ?>
                </div>
            </div>
        </div>

        <div class="dtl-data">
            <div class="dtl-row">
                <span>Kategori</span>
                <strong>Obat Kimia Rambut</strong>
            </div>
            <div class="dtl-row">
                <span>Harga Modal</span>
                <strong>
                    Rp <?= number_format($detailBarang['harga_modal'], 0, ',', '.') ?> / <?= $detailBarang['satuan']; ?>
                </strong>
            </div>
            <div class="dtl-row">
                <span>Harga Pembelian</span>
                <strong>Rp400.000 / 1 kg</strong>
            </div>
        </div>

        <button type="button" class="dtl-history-btn">
            Lihat Riwayat Stok
        </button>
    </div>

    <!-- Card Resep Layanan -->
    <div class="recipe-box">
        <div class="recipe-header">
            <h3>Resep Layanan</h3>
        </div>

        <div class="recipe-select-wrapper">
            <select name="layanan_resep" class="recipe-select">
                <option value="1">Rebonding Makarizo</option>
                <option value="2">Smoothing L'Oreal</option>
            </select>
            <ion-icon name="chevron-down-outline"></ion-icon>
        </div>

        <table class="recipe-table">
            <thead>
                <tr>
                    <th>Barang</th>
                    <th>Takaran</th>
                    <th>Modal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resep as $item): ?>
                    <tr>
                        <td><?= $item['barang'] ?></td>
                        <td><?= $item['takaran'] ?></td>
                        <td>Rp <?= number_format($item['modal'], 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Total Modal Barang</td>
                    <td>Rp <?= number_format($totalModalResep, 0, ',', '.') ?></td>
                </tr>
            </tfoot>
        </table>

        <button type="button" class="recipe-add-btn">
            <ion-icon name="add-outline"></ion-icon>
            Tambah Resep
        </button>
    </div>
</div>