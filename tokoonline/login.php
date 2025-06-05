<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            max-width: 450px;
            margin: 100px auto;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            font-size: 1.8rem;
            color: #333;
        }

        .form-control {
            border-radius: 25px;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 1rem;
            border: 2px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: none;
        }

        .btn-login {
            background-color: #3498db;
            color: white;
            border-radius: 25px;
            padding: 12px;
            font-size: 1rem;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #2980b9;
        }

        .text-center {
            margin-top: 20px;
        }

        .text-center a {
            color: #3498db;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Login TokoOnline</h2>
        </div>
        <form action="#" method="POST">
            <input type="email" class="form-control" placeholder="Email" required>
            <input type="password" class="form-control" placeholder="Password" required>
            <button type="submit" class="btn-login">Masuk</button>
        </form>
        <div class="text-center">
            <p>Belum punya akun? <a href="#">Daftar di sini</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
