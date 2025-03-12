<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="bg-white text-gray-800 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Bagian Kiri: Title of Website -->
            <div class="text-lg font-bold ml-3">
                <a href="#">Title of Website</a>
            </div>

            <!-- Bagian Tengah: Menu -->
            <div class="hidden md:flex space-x-4">
                <a href="#home" class="hover:text-blue-500">Home</a>
                <a href="#about" class="hover:text-blue-500">About</a>
                <a href="#contact" class="hover:text-blue-500">Contact</a>
            </div>

            <!-- Bagian Kanan: Login/Register -->
            <div class="space-x-4 mr-4">
                <a href="/login" class="px-4 py-2 hover:bg-blue-300 hover:text-white rounded">Login</a>
                <a href="/register" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">Register</a>
            </div>
        </div>
    </nav>

    <!-- Main Section -->
    <main class="py-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Bagian Kiri: Text Besar dan Deskripsi -->
            <div class="flex-1 text-center md:text-left mb-8 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-4">
                    Welcome to Our Website
                </h1>
                <p class="text-gray-600 text-lg mb-6">
                    Discover amazing content and features that will elevate your experience. Join us today!
                </p>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#learn-more" class="px-6 py-3 bg-blue-500 text-white rounded-4xl hover:bg-blue-600">
                        Learn More
                    </a>
                    <a href="#get-started" class="px-6 py-3 bg-gray-300 text-gray-800 rounded-4xl hover:bg-gray-400">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Bagian Kanan: Gambar -->
            <div class="flex-1">
                <img src="https://img.freepik.com/free-vector/app-monetization-concept-illustration_114360-7404.jpg?t=st=1740565995~exp=1740569595~hmac=c34de0309c6ae2dab93fd2f45a1f288b06438b1e85fa2573a345bc25547ad69a&w=1800"
                    alt="Sample Image" class="max-w-full rounded">
            </div>
        </div>
    </main>

    <!-- 3 Kotak Berdampingan -->
    <section class="py-6">
        <div
            class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4 space-y-6 md:space-y-0 md:space-x-6">
            <!-- Kotak 1 -->
            <a href="#" class="bg-white shadow-2xl rounded p-6 flex-1 text-center hover:bg-blue-100 ">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Kotak 1</h2>
                <p class="text-gray-600">
                    Ini adalah deskripsi singkat untuk kotak pertama.
                </p>
            </a>

            <!-- Kotak 2 -->
            <a href="#" class="bg-white shadow-2xl rounded p-6 flex-1 text-center hover:bg-blue-100 ">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Kotak 2</h2>
                <p class="text-gray-600">
                    Ini adalah deskripsi singkat untuk kotak kedua.
                </p>
            </a>

            <!-- Kotak 3 -->
            <a href="#" class="bg-white shadow-2xl rounded p-6 flex-1 text-center hover:bg-blue-100">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Kotak 3</h2>
                <p class="text-gray-600 ">
                    Ini adalah deskripsi singkat untuk kotak ketiga.
                </p>
            </a>
        </div>
</body>

</html>