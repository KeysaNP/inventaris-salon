<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventaris Salon</title>

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <?php
    // Ambil halaman dari URL
    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

    // Panggil sidebar
    include 'views/sidebar.php';
    ?>

    <!-- ================= Main ================= -->
    <div class="main">

        <?php
        // Tentukan file halaman
        $page_file = "views/{$page}.php";

        // Panggil halaman
        if (file_exists($page_file)) {
            include $page_file;
        } else {
            echo "<div style='padding: 20px;'>
                    <h2>404 - Halaman Tidak Ditemukan</h2>
                  </div>";
        }
        ?>

    </div>

    <!-- JS -->
    <script src="public/js/main.js"></script>

    <!-- Ionicons -->
    <script type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>

    <script nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>

</body>
</html>