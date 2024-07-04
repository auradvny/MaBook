<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Perpustakaan</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
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



        </div>
    </body>

    </html>
</x-app-layout>
