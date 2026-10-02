<?php
// SISTEM BELAKANG LAYAR (MURNI LOGIKA MATEMATIKA PENJUMLAHAN PHP)

// Simulasi Log Data Kerja Karyawan "Rina" Sepanjang Minggu (Bisa ditarik dari database/session)
$nota_kerja_rina = [
    ["hari" => "Senin", "layanan" => "Smoothing Rambut (Makarizo)", "bersih" => 435000],
    ["hari" => "Rabu", "layanan" => "Warna Rambut (Matrix)", "bersih" => 210000],
    ["hari" => "Kamis", "layanan" => "Facial Wajah Dasar", "bersih" => 125000]
];

$total_komisi_mingguan = 0;
$rekap_baris_html = "";

// Perulangan untuk menghitung 40% per item dan menjumlahkannya (Logika 4)
foreach ($nota_kerja_rina as $row) {
    // 1. Hitung komisi 40% dari untung bersih per nota
    $komisi_per_item = 0.40 * $row['bersih'];
    
    // 2. Rumus penjumlahan kumulatif matematika PHP (+=)
    $total_komisi_mingguan += $komisi_per_item;

    // Susun baris tabel HTML secara senyap
    $rekap_baris_html .= "<tr>
        <td>{$row['hari']}</td>
        <td>{$row['layanan']}</td>
        <td style='color: green; font-weight: bold;'>Rp " . number_format($komisi_per_item, 0, ',', '.') . "</td>
        <td><span style='color:#2d4a36; background:#e2f0d9; padding:2px 6px; border-radius:4px; font-size:12px;'>Dihitung PHP</span></td>
    </tr>";
}

// balikin data string HTML dan total angka gaji ke halaman utama via URL query string
header("Location: views/laporan_gaji.html?sukses_gaji=1&total_gaji=$total_komisi_mingguan&rows=" . urlencode($rekap_baris_html));
exit();
?>
