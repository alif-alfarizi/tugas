<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
 
        }
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
            color:rgb(48, 177, 58);
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
            color:rgba(39, 218, 48, 0.82);
        }

        .nav-link {
            font-weight: 500;
            color: #2c3e50 !important;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #3498db !important;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 2rem;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            padding: 0.75rem 1.5rem;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        footer {
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

    <div class="container">
        <h2>Hubungi Kami</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>

    <footer>
        <div class=" text-center">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
