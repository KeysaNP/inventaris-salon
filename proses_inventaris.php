<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $harga_beli = (int)$_POST['harga_beli'];
    $jumlah = (float)$_POST['jumlah'];
    $satuan = $_POST['satuan'];

    // HITUNG MATEMATIKA PHP (Logika 1)
    if ($satuan == "kg" || $satuan == "liter") {
        $total_basis = $jumlah * 1000;
        $satuan_basis = ($satuan == "kg") ? "gram" : "ml";
    } else {
        $total_basis = $jumlah;
        $satuan_basis = $satuan;
    }
    $harga_satuan = $harga_beli / $total_basis;

    header("Location: views/inventaris.html?sukses_gudang=1&total_basis=$total_basis&satuan_basis=$satuan_basis&harga_satuan=$harga_satuan");
    exit();
}
?>
