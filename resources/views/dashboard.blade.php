<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Perpustakaan</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .card {
                transition: transform 0.2s;
                height: 100%;
                /* Menetapkan ketinggian 100% */
            }

            .card:hover {
                transform: translateY(-5px);
                /* Efek mengangkat saat hover */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Bayangan yang lebih lembut */
            }

            .card-body {
                height: 100%;
                /* Menetapkan ketinggian 100% untuk bagian badan kartu */
                display: flex;
                flex-direction: column;
            }

            .card-title {
                font-size: 1.25rem;
                /* Ukuran font yang lebih besar */
                font-weight: bold;
                /* Teks tebal */
                color: #333;
                /* Warna teks lebih gelap */
                margin-bottom: 0.75rem;
                /* Ruang bawah */
            }

            .card-text {
                flex-grow: 1;
                /* Membuat teks dapat berkembang dalam bagian badan kartu */
            }
        </style>
    </head>

    <body>
        

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src=" assets/img/image1.png" class="d-block w-100" alt="image1">
               
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src=" assets/img/image2.png" class="d-block w-100" alt="image2">
              </div>
              <div class="carousel-item">
                <img src=" assets/img/image1.png " class="d-block w-100" alt="image3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

          <img src=" assets/img/1.png" >

          <div class="container">
            <div class="row row-cols-2">
              <div class="col">  <img src=" assets/img/2.jpg">  </div>

              <div class="col">
                <p></p>
                  
                <h1 style="color: rgb(0, 82, 132); font-size: 2em;" ><b>Koleksi</b></h1>
             
                
                <p> Perpustakaan Ma'arif NU 1 Ajibarang memiliki lebih dari banyak koleksi dalam berbagai bentuk, seperti buku, buku digital, audiovisual, majalah, koran, jurnal, dan jurnal elektronik. Koleksi ini mencakup beragam topik dan genre yang cocok untuk semua kalangan pembaca, mulai dari pelajar hingga peneliti profesional. Dengan terus memperbarui koleksi, perpustakaan ini berkomitmen untuk menyediakan sumber daya informasi yang terkini dan relevan.</p>
            </div>
            <div class="col">
                <p>
                </p>
                <h1 style="color: rgb(0, 82, 132); font-size: 2em;" style="text-align: right;"><b>Pelayanan</b></h1>
                <p> Pelayanan Perpustakaan Ma'arif NU 1 Ajibarang yang profesional dan sesuai dengan 
                    Standar Nasional</p>
            </div>
              <div class="col"> <img src=" assets/img/3.png"></div>
            </div>
          </div>
          <img src=" assets/img/1.png" >

          <footer id="footer" class="footer position-relative" style="background-color: #006979; color: white; padding: 20px 0;">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename" style="color: white; font-size: 1.5em; font-weight: bold;">Alamat</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Jl. Raya Ajibarang Km. 1 Ajibarang,</p>
                            <p>Kab. Banyumas Jawa Tengah</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+62-281-571 284</span></p>
                            <p><strong>Email:</strong> <span>smkmanusa_ajibarang@yahoo.co.id</span></p>
                        </div>
                    </div>
        
                    
        
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4 style="color: white;">Our Team</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li><a href="https://www.instagram.com/" target="_blank" style="color: #a0c4ff;">Sesa Ajeng Maesara</a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" style="color: #a0c4ff;">Dwita Isma Aprilia</a></li>
                            <li><a href="https://www.instagram.com/" target="_blank" style="color: #a0c4ff;">Aura Devany Salsabila Bachtiar</a></li>
                            
                        </ul>
                    </div>
        
                    
                </div>
            </div>
        
            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">MaBook</strong><span> All Rights Reserved</span></p>
            </div>
        
        </footer>
        
        </div>
    </body>

    </html>
</x-app-layout>
