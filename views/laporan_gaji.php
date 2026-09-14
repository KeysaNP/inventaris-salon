<?php
// Dummy data untuk Tabel Utama (Laporan Gaji Karyawan)
// Nanti bagian ini diganti dengan query SELECT dari DB, misal: $laporanGaji = $db->query(...)->fetchAll();
$laporanGaji = [
    [
        'id_karyawan' => 1,
        'nama_karyawan' => 'Rina',
        'total_layanan' => 15,
        'pendapatan_bersih' => 810000,
        'komisi' => 324000,
        'status_pembayaran' => 'Belum Dibayar'
    ],
    [
        'id_karyawan' => 2,
        'nama_karyawan' => 'Eka',
        'total_layanan' => 20,
        'pendapatan_bersih' => 1250000,
        'komisi' => 500000,
        'status_pembayaran' => 'Belum Dibayar'
    ],
    [
        'id_karyawan' => 3,
        'nama_karyawan' => 'Maya',
        'total_layanan' => 18,
        'pendapatan_bersih' => 950000,
        'komisi' => 380000,
        'status_pembayaran' => 'Sudah Dibayar'
    ],
    [
        'id_karyawan' => 4,
        'nama_karyawan' => 'Sari',
        'total_layanan' => 12,
        'pendapatan_bersih' => 620000,
        'komisi' => 248000,
        'status_pembayaran' => 'Sudah Dibayar'
    ],
    [
        'id_karyawan' => 5,
        'nama_karyawan' => 'Dewi',
        'total_layanan' => 10,
        'pendapatan_bersih' => 540000,
        'komisi' => 216000,
        'status_pembayaran' => 'Belum Dibayar'
    ]
];

// Dummy data untuk Tabel Rincian Layanan Detail Karyawan (Contoh: Rina)
$rincianLayanan = [
    [
        'hari' => 'Senin',
        'layanan' => 'Rebonding',
        'pendapatan_bersih' => 435000,
        'komisi' => 174000
    ],
    [
        'hari' => 'Senin',
        'layanan' => 'Creambath',
        'pendapatan_bersih' => 75000,
        'komisi' => 30000
    ],
    [
        'hari' => 'Rabu',
        'layanan' => 'Pewarnaan',
        'pendapatan_bersih' => 300000,
        'komisi' => 120000
    ]
];

// Inisialisasi Total Rincian Detail
$totalPendapatanDetail = 0;
$totalKomisiDetail = 0;
?>

<div class="topbar">

    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <!-- Filter Kategori -->
    <div class="inventory-select">
        <select name="kategori">
            <option value="">
                Minggu ini
            </option>
            <?php foreach ($kategori as $item): ?>
                <option value="<?= $item['id']; ?>">
                    <?= $item['nama']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <ion-icon name="chevron-down-outline"></ion-icon>
    </div>

    <div class="inventory-select date-select">
        <input type="date" name="tanggal" value="<?= date('Y-m-d'); ?>">
    </div>


    <div class="search">
        <label>
            <input type="text" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>
</div>

<!-- Summary Cards (Atas) -->
<div class="card-box-laporan">

    <!-- Card 1: Karyawan -->
    <div class="card-laporan">
        <div class="card-icon">
            <ion-icon name="people-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Karyawan</span>
            <h3><?= $totalKaryawan ?? 6; ?></h3>
        </div>
    </div>

    <!-- Card 2: Total Layanan -->
    <div class="card-laporan">
        <div class="card-icon">
            <ion-icon name="document-text-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Total Layanan</span>
            <h3><?= $totalLayanan ?? 125; ?></h3>
        </div>
    </div>

    <!-- Card 3: Total Komisi -->
    <div class="card-laporan">
        <div class="card-icon">
            <ion-icon name="wallet-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Total Komisi</span>
            <h3>Rp <?= number_format($totalKomisi ?? 4850000, 0, ',', '.'); ?></h3>
        </div>
    </div>

    <!-- Card 4: Sudah Dibayar -->
    <div class="card-laporan">
        <div class="card-icon icon-success">
            <ion-icon name="checkmark-done-circle-outline"></ion-icon>
        </div>
        <div class="card-info">
            <span class="card-title">Sudah Dibayar</span>
            <h3>Rp <?= number_format($sudahDibayar ?? 3200000, 0, ',', '.'); ?></h3>
        </div>
    </div>

</div>

<!-- Tabel Daftar Laporan Gaji Utama -->
<div class="laporan-table-wrapper">
    <h3>Daftar Laporan Gaji</h3>
    <table class="laporan-table">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Total Layanan</th>
                <th>Pendapatan Bersih</th>
                <th>Komisi 40%</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($laporanGaji)): ?>
                <?php foreach ($laporanGaji as $row): ?>
                    <tr>
                        <td class="fw-bold"><?= htmlspecialchars($row['nama_karyawan']); ?></td>
                        <td><?= $row['total_layanan']; ?></td>
                        <td>Rp <?= number_format($row['pendapatan_bersih'], 0, ',', '.'); ?></td>
                        <td>Rp <?= number_format($row['komisi'], 0, ',', '.'); ?></td>
                        <td>
                            <?php if ($row['status_pembayaran'] === 'Sudah Dibayar'): ?>
                                <span class="badge-status status-sudah">Sudah Dibayar</span>
                            <?php else: ?>
                                <span class="badge-status status-belum">Belum Dibayar</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada data laporan gaji.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Panel Detail Gaji Karyawan (Bagian Bawah) -->
<div class="gaji-detail-panel">
    <h3>Detail Gaji Karyawan</h3>

    <!-- 1. Header Profil & Total Gaji (Atas) -->
    <div class="detail-header-card">
        <div class="profile-section">
            <div class="profile-info-top">
                <div class="avatar-icon">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </div>
                <h4><?= htmlspecialchars($detailKaryawan['nama'] ?? 'Rina'); ?></h4>
            </div>

            <div class="profile-stats">
                <div class="stat-item">
                    <span class="stat-label">Periode</span>
                    <strong><?= htmlspecialchars($detailKaryawan['periode'] ?? '7 - 13 September 2026'); ?></strong>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Total Layanan</span>
                    <strong><?= $detailKaryawan['total_layanan'] ?? 15; ?> layanan</strong>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Total Pendapatan Bersih</span>
                    <strong>Rp <?= number_format($detailKaryawan['pendapatan_bersih'] ?? 810000, 0, ',', '.'); ?></strong>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Komisi</span>
                    <strong><?= $detailKaryawan['persen_komisi'] ?? '40%'; ?></strong>
                </div>
            </div>
        </div>

        <div class="total-gaji-badge">
            <span>TOTAL GAJI</span>
            <h2>Rp <?= number_format($detailKaryawan['total_komisi'] ?? 324000, 0, ',', '.'); ?></h2>
        </div>
    </div>

    <!-- 2. Grid Bawah: Tabel Rincian & Box Pembayaran -->
    <div class="detail-grid">
        
        <!-- Tabel Rincian Layanan (Kiri) -->
        <div class="detail-left">
            <h5 class="sub-title">Rincian Layanan</h5>
            <table class="rincian-table">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Layanan</th>
                        <th>Pendapatan Bersih</th>
                        <th>Komisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $totalPendapatanDetail = 0;
                    $totalKomisiDetail = 0;
                    ?>
                    <?php if (!empty($rincianLayanan)): ?>
                        <?php foreach ($rincianLayanan as $detail): ?>
                            <?php
                            $totalPendapatanDetail += $detail['pendapatan_bersih'];
                            $totalKomisiDetail += $detail['komisi'];
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($detail['hari']); ?></td>
                                <td><?= htmlspecialchars($detail['layanan']); ?></td>
                                <td>Rp <?= number_format($detail['pendapatan_bersih'], 0, ',', '.'); ?></td>
                                <td>Rp <?= number_format($detail['komisi'], 0, ',', '.'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" style="text-align: center;">Tidak ada rincian transaksi.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"><strong>Total</strong></td>
                        <td><strong>Rp <?= number_format($totalPendapatanDetail, 0, ',', '.'); ?></strong></td>
                        <td><strong>Rp <?= number_format($totalKomisiDetail, 0, ',', '.'); ?></strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Box Pembayaran Gaji (Kanan) -->
        <div class="detail-right">
            <div class="payment-box">
                <h5>Pembayaran Gaji</h5>
                
                <div class="payment-status">
                    <span>Status</span>
                    <?php if (($detailKaryawan['status'] ?? 'Belum Dibayar') === 'Sudah Dibayar'): ?>
                        <span class="badge-status status-sudah">Sudah Dibayar</span>
                    <?php else: ?>
                        <span class="badge-status status-belum">Belum Dibayar</span>
                    <?php endif; ?>
                </div>

                <div class="payment-total">
                    <span>Total yang harus dibayar</span>
                    <h3>Rp <?= number_format($detailKaryawan['total_komisi'] ?? 324000, 0, ',', '.'); ?></h3>
                </div>

                <button class="btn-tandai">
                    <ion-icon name="checkmark-outline"></ion-icon>
                    Tandai Sudah Dibayar
                </button>
            </div>
        </div>

    </div>
</div>