<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $harga_layanan = (int)$_POST['harga_layanan'];
    $modal_barang = (int)$_POST['modal_input'];
    $karyawan = $_POST['karyawan_pilih'];

    // HITUNG MATEMATIKA PHP (Logika 3)
    $pendapatan_bersih = $harga_layanan - $modal_barang;
    $komisi_karyawan = 0.40 * $pendapatan_bersih;
    $keuntungan_salon = $pendapatan_bersih - $komisi_karyawan;

    header("Location: views/kasir.html?sukses_kasir=1&total=$harga_layanan&komisi=$komisi_karyawan&salon=$keuntungan_salon&karyawan=" . urlencode($karyawan));
    exit();
}
?>
