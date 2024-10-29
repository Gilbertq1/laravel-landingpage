<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

<header class="bg-white p-4 shadow-md">
    <div class="container mx-auto flex flex-col">
        <div class="flex items-center">
            <div class="relative flex-grow">
                <img src="{{ asset('asset/pngtree-vector-search-icon-png-image_320926-removebg-preview.png') }}" alt="Search" class="w-6 h-6 absolute left-3 top-2">
                <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 rounded-full bg-gray-200 focus:outline-none focus:ring-2 focus:ring-green-500 w-1/2 md:w-1/3" />
            </div>
            <div class="relative">
                <img src="{{ asset('asset/817103f8-719b-4057-975a-572d226f306d.png') }}" alt="Profile" class="w-10 h-10 rounded-full cursor-pointer" id="profile-menu">
                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden" id="dropdown-menu">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a>
                </div>
            </div>
        </div>
        <div class="flex space-x-4 mt-4">
            <div class="bg-black text-white px-4 py-2 rounded-full cursor-pointer hover:bg-green-500">Minuman</div>
            <div class="bg-black text-white px-4 py-2 rounded-full cursor-pointer hover:bg-green-500">Makanan</div>
        </div>
    </div>
</header>

<section class="py-20">
    <div class="container mx-auto">
        <h2 class="text-center text-4xl mb-10">Let Them Cook!</h2>
        <hr class="border-gray-300 mb-10">
        <h3 class="text-center text-2xl mb-10">Resep Populer Saat Ini</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            <!-- Recipe Card -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <img src="{{ asset('asset/0c25d3d0-828e-45d2-a527-05033410665b.png') }}" alt="Masakan" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl mb-2">Masakan Pertama</h3>
                <p class="text-gray-600">Deskripsi singkat tentang resep ini.</p>
            </div>
            <!-- Repeat for other recipe cards -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <img src="{{ asset('asset/22387820-5938-4886-9afd-c916c40a7163.png') }}" alt="Masakan" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl mb-2">Masakan Kedua</h3>
                <p class="text-gray-600">Deskripsi singkat tentang resep ini.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <img src="{{ asset('asset/844eb381-6eb7-43dc-80b2-7e0333b4752f.png') }}" alt="Masakan" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl mb-2">Masakan Ketiga</h3>
                <p class="text-gray-600">Deskripsi singkat tentang resep ini.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4">
                <img src="{{ asset('asset/c8d47cdf-dd2a-466d-9747-17a5d7fd860a.png') }}" alt="Masakan" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl mb-2">Masakan Keempat</h3>
                <p class="text-gray-600">Deskripsi singkat tentang resep ini.</p>
            </div>
            <!-- Add more cards as needed -->
        </div>
    </div>
</section>

<section class="bg-black text-white py-20 text-center">
    <div class="container mx-auto">
        <img src="{{ asset('asset/6ad137c6-a14d-4115-9d60-cf5c9099b5f2.png') }}" alt="Call to Action" class="mx-auto mb-6">
        <h2 class="text-lg font-bold mb-4">Berbagi resep mu dengan orang lain, dan temukanlah resep yang kamu suka!</h2>
        <button class="bg-white text-black px-4 py-2 rounded hover:bg-green-500">Unggah Resep mu</button>
    </div>
</section>

<footer class="bg-gray-800 text-white py-4 text-center">
    <div class="container mx-auto">
        <p>&copy; 2023 Let Him Cookit. All rights reserved.</p>
        <a href="#" class="text-green-400 hover:underline">Followed</a> | <a href="#" class="text-green-400 hover:underline">Ikuti Kami</a>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const profileMenu = document.getElementById('profile-menu');
        const dropdownMenu = document.getElementById('dropdown-menu');
  
        profileMenu.addEventListener('click', function(event) {
            event.stopPropagation();
            dropdownMenu.classList.toggle('hidden');
        });
  
        window.addEventListener('click', function() {
            dropdownMenu.classList.add('hidden');
        });
    });
</script>
</body>
</html>