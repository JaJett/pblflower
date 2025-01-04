<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Little Garden</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fef4f8;
            padding-top: 70px;
        }
        .navbar {
            background-color: #00281C !important;
        }
        .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: #FCD7E2 !important;
        }
        .filter-buttons a {
            background-color: #00281C;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            margin: 0 5px;
            transition: all 0.3s;
            text-decoration: none;
        }
        .filter-buttons a:hover {
            background-color: #FCD7E2;
            color: #00281C;
        }
        .hero {
            position: relative;
            height: 80vh;
            color: white;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); 
        }
        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.5rem;
        }
        .carousel-item {
        transition: transform 1.5s ease-in-out; /* Transisi lebih halus */
        }
        .product-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%; /* Membuat kartu menyesuaikan tinggi */
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }
        .product-card img {
            border-bottom: 5px solid #00281C;
            object-fit: cover;
            height: 400px; /* Atur tinggi gambar */
            width: 100%;
        }
        .footer {
            background-color: #00281C;
            padding: 20px 0;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="photo-content/logo.jpeg" alt="Sweet Little Garden" height="50" width="50" class="rounded-circle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop-all.php">Shop All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proses/order.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero" style="background: url('photo-content/hero1.jpeg') no-repeat center center/cover;">
                    <div class="hero-overlay"></div>
                    <div class="hero-content text-white">
                        <h1>Sweet Little Garden</h1>
                        <p>Your Destination for Premium Floral Arrangements</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero" style="background: url('photo-content/hero2.jpeg') no-repeat center center/cover;">
                    <div class="hero-overlay"></div>
                    <div class="hero-content text-white">
                        <h1>Beautiful Flowers</h1>
                        <p>Perfect for Every Occasion</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero" style="background: url('photo-content/hero3.jpeg') no-repeat center center/cover;">
                    <div class="hero-overlay"></div>
                    <div class="hero-content text-white">
                        <h1>Unique Arrangements</h1>
                        <p>Handcrafted with Love</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Products -->
    <div class="container my-5">
        <h3 class="text-center mb-4" style="font-weight: bold; color: #00281C;">Featured Products</h3>
        <!-- Filter Buttons -->
        <div class="filter-buttons d-flex justify-content-center mb-4">
            <?php
            include "koneksi/koneksi.php";

            // Mapping kategori ke nama
            $kategoriMap = [
                'A' => 'Bunga',
                'B' => 'Makanan',
                'C' => 'Uang'
            ];

            $query_kategori = "SELECT DISTINCT kategori FROM barang";
            $result_kategori = $db->query($query_kategori);

            echo '<a href="shop-all.php">All</a>';
            while ($row = $result_kategori->fetch_assoc()) {
                $kategori = htmlspecialchars($row['kategori']);
                $kategoriName = isset($kategoriMap[$kategori]) ? $kategoriMap[$kategori] : $kategori;
                echo '<a href="shop-all.php?kategori=' . urlencode($kategori) . '">' . $kategoriName . '</a>';
            }
            ?>
        </div>

        <!-- Search Form -->
        <form method="post" class="mb-4 text-center">
            <input type="text" name="search" class="form-control d-inline w-50" placeholder="Search products" value="<?= htmlspecialchars($_POST['search'] ?? '') ?>">
        </form>

        <!-- Product Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $search = $_POST['search'] ?? '';
            $filter_kategori = $_GET['kategori'] ?? '';

            if (!empty($filter_kategori)) {
                $sql = "SELECT * FROM barang WHERE kategori = '$filter_kategori' AND (nama LIKE '%$search%' OR kategori LIKE '%$search%')";
            } else {
                $sql = "SELECT * FROM barang WHERE nama LIKE '%$search%' OR kategori LIKE '%$search%'";
            }

            $data = mysqli_query($db, $sql);

            while ($product = mysqli_fetch_assoc($data)) {
                $kategori = htmlspecialchars($product['kategori']);
                $kategoriName = isset($kategoriMap[$kategori]) ? $kategoriMap[$kategori] : $kategori;

                echo '
                <div class="col">
                    <div class="card product-card">
                        <img src="photo/' . htmlspecialchars($product['foto']) . '" class="card-img-top" alt="' . htmlspecialchars($product['nama']) . '">
                        <div class="card-body text-center">
                            <h5 class="card-title">' . htmlspecialchars($product['nama']) . '</h5>
                            <p class="text-muted">' . $kategoriName . '</p>
                            <p class="text-muted">Rp ' . number_format($product['harga'], 2, ',', '.') . '</p>
                            <a href="proses/order.php?foto=' . urlencode($product['foto']) . '&kode=' . urlencode($product['nama']) . '" class="btn btn-success">
                                Order Now
                            </a>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Sweet Little Garden. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
