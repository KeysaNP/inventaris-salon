<?php
// 1. Ambil parameter halaman dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Salon</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <div style="display: flex;">
        <!-- Tampilkan Menu Samping -->
        <?php include 'views/sidebar.php'; ?>

        <!-- Wadah Konten Utama Halaman (Akan berubah otomatis saat menu diklik) -->
        <div class="main-content" style="flex: 1; padding: 20px;">
            <?php
            switch ($page) {
                case 'dashboard':
                    include 'views/dashboard.php';
                    break;
                case 'inventaris':
                    include 'views/inventaris.php';
                    break;
                case 'kasir':
                    include 'views/kasir.php';
                    break;
                case 'laporan_gaji':
                    include 'views/laporan_gaji.php';
                    break;
                case 'password':
                    include 'views/password.php';
                    break;
                case 'logout':
                    echo "<script>alert('Log out berhasil'); window.location.href='index.php';</script>";
                    break;
                default:
                    echo "<h2>Halaman tidak ditemukan!</h2>";
                    break;
            }
            ?>
        </div>
    </div>

    <script type="module" src="https://unpkg.com"></script>
    <script nomodule src="https://unpkg.com"></script>
</body>
</html>
