<?php
include "koneksi/koneksi.php";

if (isset($_GET['id_barang'])) {
    $id_barang = $_GET['id_barang'];
    $sql = "SELECT * FROM barang WHERE id_barang = '$id_barang'";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Produk tidak ditemukan!'); window.location.href='index.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ID produk tidak diberikan!'); window.location.href='index.php';</script>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - <?= htmlspecialchars($product['nama']); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FFC0D2;
        }
        .navbar {
            background-color: #01302A !important;
        }
        .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: #FCD7E2 !important;
        }
        .product-detail img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .btn-custom {
            background-color: #01302A;
            color: white;
            border: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #FCD7E2;
            color: #01302A;
        }
        .footer {
            background-color: #01302A;
            padding: 20px 0;
            text-align: center;
            color: white;
        }
        .product-detail img {
            max-width: 50%;
            max-height: 400px;
            width: auto;
            height: auto;
            border-radius: 8px;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="photo-content/logo.jpeg" alt="Sweet Little Garden" style="height: 50px; width: 50px; border-radius: 50%;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop-all.php">Shop All</a></li>
                    <li class="nav-item"><a class="nav-link" href="proses/order.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Detail Produk -->
    <div class="container my-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="photo/<?= htmlspecialchars($product['foto']); ?>" 
                     alt="<?= htmlspecialchars($product['nama']); ?>" 
                     class="img-fluid rounded mx-auto d-block" 
                     style="max-height: 400px; object-fit: contain;">
            </div>
            <div class="col-md-6">
                <h1><?= htmlspecialchars($product['nama']); ?></h1>
                <p class="text-muted">Rp <?= number_format($product['harga'], 2, ',', '.'); ?></p>
                <p><?= htmlspecialchars($product['ket']); ?></p>
                <a href="proses/order.php?foto=<?= urlencode($product['foto']); ?>&kode=<?= urlencode($product['nama']); ?>
                " class="btn btn-custom">Order Now</a>
                <a href="index.php" class="btn btn-custom">Kembali</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer fixed-bottom">
        <div class="container">
            <p>&copy; 2024 Sweet Little Garden. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
