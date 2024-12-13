<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* Mengatur tampilan umum */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Mengatur header */
        header {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            letter-spacing: 2px;
        }

        header p {
            font-size: 1.2em;
            margin: 20px 0;
        }

        header .btn {
            background-color: #fff;
            color: #ff4b2b;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        header .btn:hover {
            background-color: #ff4b2b;
            color: #fff;
        }

        /* Mengatur section "About Us" */
        #about {
            padding: 60px 20px;
            text-align: center;
        }

        #about h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #ff4b2b;
        }

        #about p {
            font-size: 1.1em;
            margin-bottom: 40px;
            line-height: 1.6;
            color: #666;
        }

        /* Mengatur ukuran gambar agar berbentuk persegi */
        #about img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        #about img:hover {
            transform: scale(1.05);
        }

        /* Mengatur footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-size: 0.9em;
        }

        footer p {
            margin: 0;
        }

        /* Responsif untuk perangkat kecil */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            header p {
                font-size: 1em;
            }

            #about h2 {
                font-size: 1.8em;
            }

            #about p {
                font-size: 1em;
            }

            #about img {
                width: 200px;
                height: 200px;
            }
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #6a11cb;
        }

        .input-group input {
            padding-left: 35px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Selamat Datang di Website Kami</h1>
        <p>Website terbaik untuk kebutuhan Anda</p>
        <a href="#about" class="btn">Pelajari Lebih Lanjut</a>
    </header>

    <!-- Navigation Menu -->
    <nav>
        <ul>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#gallery">Galeri</a></li>
            <li><a href="#login">Login</a></li>
        </ul>
    </nav>

    <!-- About Section -->
    <section id="about">
        <h2>Tentang Kami</h2>
        <p>Kami menyediakan layanan terbaik untuk Anda.</p>
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <h2>Galeri</h2>
        <div>
            <img src="hsr.jpg" alt="Gambar 1">
            <img src="rusa.jpeg" alt="Gambar 2">
            <img src="serlok.jpeg" alt="Gambar 3">
            <p>Menerima info serlok</p>
        </div>
        <div>
            <img src="mikir.jpeg" alt="Gambar di Tengah">
            <a href="#header" class="btn">Balik yuu</a>
        </div>
    </section>

    <!-- Login Section -->
    <section id="login">
        <h2>Login</h2>
        <form id="loginForm">
            <div>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">LOGIN</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 PT.Sejahtera Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
