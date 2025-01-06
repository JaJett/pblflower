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
            background-color: #FFC0D2; /* Warna background pink */
        }
        .navbar {
            background-color: #01302A !important; /* Warna hijau untuk navbar */
        }
        .navbar-toggler-icon {
            color: white;
        }
        .navbar-brand img {
            height: 50px;
            width: 50px; 
            border-radius: 50%; 
            transition: transform 0.3s ease; 
        }
        .navbar-brand img:hover {
            transform: scale(1.3); 
        }
        .nav-link {
            color: white !important; /* Warna teks navbar menjadi putih */
        }
        .nav-link:hover {
            color: #FCD7E2 !important; /* Warna hover teks navbar */
        }
        .btn-link i {
            color: white !important; /* Warna ikon akun dan keranjang */
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
        .product-card img {
            width: 100%; 
            height: 300px; 
            object-fit: cover; 
            border-radius: 8px; 
        }
        .product-card .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .product-card:hover {
            transform: scale(1.1); /* Membesar */
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
        }
        .hero-1{
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)), url('photo-content/hero1.jpeg') no-repeat center center/cover;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .our-store h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #01302A;
        }

        .our-store p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }

        .list-group-item {
            font-size: 1rem;
            background-color: #f9f9f9;
            border: none;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .list-group-item i {
            color: #01302A; /* Ikon hijau gelap */
            margin-right: 10px;
        }

        .btn-outline-success {
            border-color: #28A745; /* Hijau */
            color: #28A745;
            transition: 0.3s ease;
        }

        .btn-outline-success:hover {
            background-color: #28A745; /* Hijau solid */
            color: white;
        }


        .footer {
            background-color: #01302A;
            padding: 20px 0;
            text-align: center;
            color: white;
        }
        .btn {
        border-radius: 20px; /* Membuat tombol lebih bulat */
        padding: 10px 20px;
        display: flex; /* Gunakan flexbox untuk pengaturan konten tombol */
        justify-content: center; /* Pusatkan teks secara horizontal */
        align-items: center; /* Pusatkan teks secara vertikal */
        text-align: center; /* Pusatkan teks jika ada teks panjang */
        height: 50px; /* Konsistensi tinggi tombol */
        font-weight: bold;
        width: 100%; /* Tombol memenuhi lebar container */
        font-size: 16px; /* Ukuran teks konsisten */
        margin: 5px 0; /* Memberikan jarak vertikal antar tombol */
        transition: all 0.3s ease-in-out;
    }

    .btn-primary {
        background-color: #007BFF; /* Warna biru */
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05); /* Membesar saat hover */
    }

    .btn-success {
        background-color: #28A745; /* Warna hijau */
        border: none;
    }

    .btn-success:hover {
        background-color: #1e7e34;
        transform: scale(1.05); /* Membesar saat hover */
    }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="photo-content/logo.jpeg" alt="Sweet Little Garden"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
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
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            include "koneksi/koneksi.php"; 
            $search = $_POST['search'] ?? '';
            $sql = "SELECT * FROM barang WHERE nama LIKE '%$search%' OR kategori LIKE '%$search%' LIMIT 4";
            $data = mysqli_query($db, $sql);

            while ($product = mysqli_fetch_assoc($data)) {
                echo '
                <div class="col">
                    <div class="card product-card">
                        <img src="photo/' . htmlspecialchars($product['foto']) . '" class="card-img-top" alt="' . htmlspecialchars($product['nama']) . '">
                        <div class="card-body text-center">
                            <h5 class="card-title">' . htmlspecialchars($product['nama']) . '</h5>
                            <p class="text-muted">Rp ' . number_format($product['harga'], 2, ',', '.') . '</p>
                            <div class="d-grid gap-2">
                            <a href="detail-product.php?id_barang=' .urlencode($product['id_barang']) . '" class="btn btn-primary">Detail Produk</a>
                            <a href="proses/order.php?foto=' . urlencode($product['foto']) . '&kode=' . urlencode($product['nama']) . '" class="btn btn-success">
                                Pesan Sekarang
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>
    <div id="about-us" class="py-5">
    <!-- Bagian Hero dengan Gambar Latar Belakang -->
    <div class="hero-1" style="position: relative; height: 80vh; background: url('photo-content/hero1.jpeg') no-repeat center center/cover;">
        <div class="hero-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4);"></div>
        <div class="container position-relative text-white text-center" style="z-index: 1; top: 50%; transform: translateY(-50%);">
            <h1 class="display-4">Sweet Little Garden</h1>
            <br>
            <p class="lead">
            Sweet Little Garden adalah UMKM yang berdiri sejak tahun 2019, berfokus pada pembuatan buket bunga kreatif secara handmade. Kami percaya setiap buket memiliki cerita yang istimewa, dan kami berkomitmen untuk menghadirkan produk berkualitas dengan desain yang unik.
            </p>
        </div>
    </div>

    <!-- Informasi Toko -->
    <div class="our-store py-5">
        <div class="container text-center">
            <h3 class="mb-4">Our Store</h3>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p>
                        <strong>Sweet Little Garden</strong><br>
                        Jl. Agatis II No. 27 B, Sungai Miai Kec. Banjarmasin<br>
                        <strong>Monday:</strong> 08.00 - 17.00<br>
                        <strong>Tuesday - Friday:</strong> 08.30 - 17.00<br>
                        <strong>Saturday - Sunday</strong> 09.00 - 17.00<br>
                        <a href="https://maps.app.goo.gl/vVJHenu4tyqVYVvH7" target="_blank" class="btn btn-outline-success mt-3">
                        <i class="bi bi-geo-alt-fill"></i> Find Us on Maps</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Sweet Little Garden. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
