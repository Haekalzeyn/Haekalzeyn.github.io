<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoTHEBHE</title>
    <h> example : marketplace</h>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #42b549;
            color: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .search-bar {
            flex: 1;
            margin: 0 20px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .nav-links {
            display: flex;
            gap: 15px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        }

        .nav-button.left {
            left: 10px;
        }S

        .nav-button.right {
            right: 10px;
        }

        /* Categories */
        .categories {
            display: flex;
            overflow-x: auto;
            padding: 10px ;
            background-color: #f6f6f6;
            gap: 10px;
        }

        .category {
            min-width: 190px;
            flex: 0 0 auto;
            text-align: center;
        }

        .category img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            transition: transform 0.3s, filter 0.3s;
            cursor: pointer;
        }

        .category img:hover {
            transform: scale(1.1);
            filter: brightness(0.8);
        }
        .categories a {
        text-decoration: none; /* Menghilangkan garis bawah */
        color: inherit; /* Mengambil warna teks dari elemen induk */
    }
    
    .categories p {
        color: black; /* Atur warna teks sesuai keinginan */
    }
        /* Product Gallery */
.custom-size-1 {
    height: 170px;
    width: auto;
}

.custom-size-2 {
    height: 170px;
    width: auto;
}

.custom-size-3 {
    height: 170px;
    width: auto;
}
.custom-size-4 {
    height: 170px;
    width: auto;
}

        .product-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center; /* Center the gallery */
            background-color: #f9f9f9; /* Light background for gallery */
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px; /* Fixed width for cards */
            text-align: center;
            transition: transform 0.3s;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .product-card h3 {
            padding: 10px;
            font-size: 18px;
            color: #333;
        }

        .product-card p {
            padding: 0 10px 10px;
            color: #42b549;
            font-weight: bold;
        }

        .product-card:hover {
            transform: scale(1.05); /* Zoom effect on hover */
        }

        .product-card a {
            margin-bottom: 10px;
            display: inline-block;
        }

        /* Popup Style */
        .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    text-align: center;
    width: 80%; /* Membuat popup lebih lebar */
    max-width: 800px; /* Membatasi lebar maksimum */
}

.popup img {
    max-width: 30%; /* Membuat gambar lebih kecil agar ada ruang untuk deskripsi */
    height: auto;
    border-radius: 5px;
    margin-bottom: 10px;
}

.popup .close-btn {
    background-color: #42b549;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
}

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }
        .carousel-item{
            width:100%;
            height:300px;
        }
        /* Footer */
        footer {
            padding: 20px;
            background-color: #333;
            color: white;
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff; /* Warna latar belakang */
            border: none;
            border-radius: 5px; /* Sudut melengkung */
            text-decoration: none; /* Menghilangkan garis bawah */
            text-align: center;
            cursor: pointer; /* Menunjukkan bahwa ini bisa diklik */
            transition: background-color 0.3s; /* Efek transisi */
        }
        .button:hover {
            background-color: #0056b3; /* Warna saat hover */
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">Serba Bisa dan Ada</div> 
        <div class="search-bar">
            <input type="text" placeholder="search">
        </div>   
        <div class="nav-links">
            <a href="Login.html">Login</a>
        </div>
    </header>

    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- carausel ni bang -->
     <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item">
          <center><img src="img/carausel/iphonecarausel.png" width="800" height="400"></center>
        </div>
        <div class="carousel-item">
        <center><img src="img/carausel/images.jpg" width="800" height="400"></center>
        </div>
        <div class="carousel-item active">
        <center><img src="img/carausel/Cover-spesifikasi-Iphone-16_result.webp" width="800" height="400"></center>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <!-- Categories -->
<div class="categories">
    <div class="category">
        <a href="laptop.html">
            <img src="laptop-open-frontal-view-with-buttons-and-blank-screen.png" alt="Laptop/PC">
            <p>Laptop/PC</p>
        </a>
    </div>
    <div class="category">
        <a href="smartwatch.html">
            <img src="smartwatch.png" alt="Smartwatch">
            <p>Smartwatch</p>
        </a>
    </div>
    <div class="category">
        <a href="earbuds.html">
            <img src="earbuds.png" alt="Bluetooth">
            <p>earphone</p>
        </a>
    </div>
    <div class="category">
        <a href="motorcycle.html">
            <img src="motorcycle-of-big-size-black-silhouette.png" alt="Motorcycle">
            <p>Motorcycle</p>
        </a>
    </div>
    <div class="category">
        <a href="car.html">
            <img src="car.png" alt="Car">
            <p>Car</p>
        </a>
    </div>
    <div class="category">
        <a href="cosmetics.html">
            <img src="cosmetics.png" alt="MakeUp">
            <p>MakeUp</p>
        </a>
    </div>
    <div class="category">
        <a href="food-drink.html">
            <img src="fast-food.png" alt="Food And Drink">
            <p>Food And Drink</p>
        </a>
    </div>
    <div class="category">
        <a href="Travel.html">
            <img src="delivery.png" alt="Transport">
            <p>Travel</p>
        </a>
    </div>
</div>

    <!-- Products -->
    <div class="product-gallery">
        <div class="product-card" onclick="showPopup('Rp17.999.000', )"> 
        <img src="img/carausel/product/iPhone14ProMax.jpg" alt="iPhone 14 Pro Max" class="custom-size-1">  
            <h3>iPhone 14 Pro Max</h3>      
            <p>Rp17.999.000</p>
            <a href="pertama.html" class="button">lihat produk</a>
        </div>
        <div class="product-card" onclick="showPopup('Rp15,999.000',  )">
        <img src="img/carausel/product/12-PRO-blue.jpg" alt="iPhone 12 Pro Max" class="custom-size-2"> 
            <h3>iPhone 12 Pro Max</h3>      
            <p>Rp15,999.000</p>
            <a href="kedua.html" class="button">lihat produk</a>
        </div>
        <div class="product-card" onclick="showPopup('Rp29.999.000')">
            <img src="img/apple_iphone_13_full15_gmhaz6il.webp" alt="iPhone 15" class="custom-size-3"> 
            <h3>iPhone 13</h3>      
            <p>Rp10.249.000</p>
            <a href="ketiga.html" class="button">lihat produk</a>
        </div>
        <div class="product-card" onclick="showPopup('Rp29.999.000')">
        <img src="img/apple_iphone_15_plus_.webp" alt="iPhone 15" class="custom-size-4">
            <h3>iPhone 15 plus</h3>
            <p>Rp15.569.000</p>
            <a href="keempat.html" class="button">lihat produk</a>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        &copy; 2024 Madeby: HaekalZainM.
    </footer>

    <script>
        let currentSlide = 0;
        const slides = document.querySelector('.slides');
        const slideCount = document.querySelectorAll('.slide').length;

        function moveSlide(step) {
            currentSlide = (currentSlide + step + slideCount) % slideCount;
            slides.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function showPopup(title, price = '', image = '', description = '') {
            document.getElementById('popup-title').innerText = title;
            document.getElementById('popup-price').innerText = price;
            document.getElementById('popup-image').src = image;
            document.getElementById('popup-description').innerText = description;
            document.getElementById('popup-overlay').style.display = 'block';
            document.getElementById('popup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup-overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }
    </script>

</body>
</html>
