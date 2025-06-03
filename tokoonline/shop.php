<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbuck</title>
    <style>
        /* Import fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Header Styles */
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 1rem 0;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color:rgb(53, 187, 71);
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
        }

        .nav-menu a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color:rgba(40, 218, 70, 0.8);
        }

        .shop-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 20px;
        }

        .shop-title {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2rem;
            color:rgb(39, 197, 65);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .product-price {
            color: #27ae60;
            font-weight: 600;
            font-size: 1.1rem;
        }
        footer {
            text-align: center;
            background-color:rgb(49, 202, 75);
            color: white;
            padding: 3rem 0;
        }

        .contact-info {
            margin-bottom: 1.5rem;
        }
        .social-links a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #3498db;
            
        }
    </style>
</head>
<body>

<header>
        <nav>
            <div class="nav-container">
                <div class="logo">Starbuck</div>
                <div class="nav-menu">
                    <a href="#">Beranda</a>
                    <a href="shop.php">Belanja</a>
                    <a href="tentangkami.php">Tentang Kami</a>
                    <a href="hubungikami.php">Hubungi Kami</a>
                    <a href="login.php">Masuk</a>
                    <a href="register.php">Daftar</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="shop-container">
        <h1 class="shop-title">COFFE</h1>
        <div class="product-grid">
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="produk">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/300/250" alt="Produk ">
                <div class="product-info">
                    <h3 class="product-title"></h3>
                    <p class="product-price">harga</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container text-center">
            <div class="contact-info">
                <p>Email: info@tokonline.com | Telepon: (021) 1234-5678</p>
                <p>Alamat: Jalan Contoh No. 123, Jakarta</p>
            </div>
            <div class="social-links">
                <a href="#"><span>📱</span></a>
                <a href="#"><span>📸</span></a>
                <a href="#"><span>🐦</span></a>
            </div>
            <p class="mt-4">&copy; 2025 TokoOnline. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
