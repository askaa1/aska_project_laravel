<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Page Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Login Page -->
    <section class="bg-gradient-to-r from-purple-600 to-blue-500 h-screen flex justify-center items-center">
        <div class="w-full max-w-sm bg-white bg-opacity-90 p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
            <form id="loginForm" class="space-y-6">
                <div>
                    <label for="username" class="block text-sm font-semibold text-gray-700">Username:</label>
                    <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-purple-600"
                    >
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700">Password:</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-purple-600"
                    >
                </div>
                <button 
                    type="submit" 
                    class="w-full py-3 bg-purple-600 text-white font-bold rounded-lg hover:bg-blue-500 transition-transform transform hover:-translate-y-1">
                    LOGIN
                </button>
            </form>
        </div>
    </section>

    <!-- Landing Page -->
    <header class="bg-gradient-to-r from-pink-500 to-red-500 text-white py-16 text-center">
        <h1 class="text-4xl font-bold tracking-wide">Selamat Datang di Website Kami</h1>
        <p class="text-lg mt-4">Website terbaik untuk kebutuhan Anda</p>
        <a href="#about" 
           class="inline-block bg-white text-red-500 font-bold py-2 px-6 rounded-lg mt-6 hover:bg-red-500 hover:text-white transition">
            Pelajari Lebih Lanjut
        </a>
    </header>

    <section id="about" class="py-16 text-center">
        <h2 class="text-3xl font-bold text-red-500 mb-4">Tentang Kami</h2>
        <p class="text-lg text-gray-600 mb-8">Kami menyediakan layanan terbaik untuk Anda.</p>
        <div class="flex justify-center gap-6 flex-wrap">
            <img src="hsr.jpg" alt="Gambar 1" class="w-64 h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition">
            <img src="rusa.jpeg" alt="Gambar 2" class="w-64 h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition">
            <img src="serlok.jpeg" alt="Gambar 3" class="w-64 h-64 object-cover rounded-lg shadow-lg hover:scale-105 transition">
        </div>
        <p class="text-lg text-gray-600 mt-6">Menerima info serlok</p>
    </section>

    <!-- Gambar dengan Tulisan di Bawah -->
    <section class="flex justify-center items-center h-screen bg-gray-100">
        <div class="container bg-white text-center p-8 rounded-lg shadow-lg">
            <img src="mikir.jpeg" alt="Gambar di Tengah" class="w-72 h-72 object-cover rounded-lg shadow-md mb-5 hover:scale-105 transition-transform">
            <a href="#" 
               class="inline-block bg-red-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-pink-500 transform hover:-translate-y-1 transition-transform duration-200">
                Balik yuu
            </a>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-6 text-center">
        <p class="text-sm">&copy; 2024 PT.Sejahtera Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>