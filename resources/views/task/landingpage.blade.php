<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage</title>
</head>


<body>
<header>
    <div class="container">
      <div class="search-bar">
      <img src="{{ asset('asset/pngtree-vector-search-icon-png-image_320926-removebg-preview.png') }}" alt="Masakan"  class="search-icon">
        <input type="text" placeholder="Search" />
      </div>      
      <div class="categories">
        <div class="category">Minuman</div>
        <div class="category">Makanan</div>
      </div>
      <div class="profile-menu">
      <img src="{{ asset('asset/817103f8-719b-4057-975a-572d226f306d.png') }}" alt="Masakan" class="profile-pic">
        <div class="dropdown-menu">
          <a href="#">Profile</a>
          <a href="#">Settings</a>
          <a href="#">Logout</a>
        </div>
      </div>
    </div>
  </header>  
  <section class="recipe-section">
    <div class="container">
      <div class="test2">
      <h2>Let Them Cook!</h2>
      </div>
      <hr>
      <div class="test">
        <h3>Resep Populer Saat Ini</h3>
      </div>
      <div class="recipe-grid">
        <div class="recipe-card">
        <img src="{{ asset('asset/0c25d3d0-828e-45d2-a527-05033410665b.png') }}" alt="Masakan">
          <h3>Masakan Pertama</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/22387820-5938-4886-9afd-c916c40a7163.png') }}" alt="Masakan">
          <h3>Masakan Kedua</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/844eb381-6eb7-43dc-80b2-7e0333b4752f.png') }}" alt="Masakan">
          <h3>Masakan Ketiga</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/c8d47cdf-dd2a-466d-9747-17a5d7fd860a.png') }}" alt="Masakan">
          <h3>Masakan Keempat</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/08539719-9d8b-4bc2-8d09-1aba40fbbbac.png') }}" alt="Masakan">
          <h3>Masakan Kelima</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/c086692c-a385-4dbc-b4b8-0dcea30829e8.png') }}" alt="Masakan">
          <h3>Masakan Keenam</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/4fce87b3-bc08-4e2a-bdd2-74f0d5941906.png') }}" alt="Masakan">
          <h3>Masakan Ketujuh</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/08539719-9d8b-4bc2-8d09-1aba40fbbbac.png') }}" alt="Masakan">
          <h3>Masakan Kedelapan</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/c086692c-a385-4dbc-b4b8-0dcea30829e8.png') }}" alt="Masakan">
          <h3>Masakan Kesembilan</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/844eb381-6eb7-43dc-80b2-7e0333b4752f.png') }}" alt="Masakan">
          <h3>Masakan Kesepuluh</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/c086692c-a385-4dbc-b4b8-0dcea30829e8.png') }}" alt="Masakan">
          <h3>Masakan Kesebelas</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
        <div class="recipe-card">
        <img src="{{ asset('asset/4fce87b3-bc08-4e2a-bdd2-74f0d5941906.png') }}" alt="Masakan">
          <h3>Masakan keduabelas</h3>
          <p>Deskripsi singkat tentang resep ini.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="call-to-action">
    <div class="container">
    <img src="{{ asset('asset/6ad137c6-a14d-4115-9d60-cf5c9099b5f2.png') }}" alt="">
      <h2>Berbagi resep mu dengan orang lain, dan temukanlah resep yang kamu suka!</h2>
      <button>Unggah Resep mu</button>
    </div>
  </section>
  <footer>
    <div class="container">
      <p>&copy; 2023 Let Him Cookit. All rights reserved.</p>
      <a href="#">Followed</a> | <a href="#">Ikuti Kami</a>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const profileMenu = document.querySelector('.profile-menu');
      const dropdownMenu = document.querySelector('.dropdown-menu');
  
      profileMenu.addEventListener('click', function() {
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
      });
  
    
      window.addEventListener('click', function(event) {
        if (!profileMenu.contains(event.target)) {
          dropdownMenu.style.display = 'none';
        }
      });
    });
  </script>  
</body>
</html>