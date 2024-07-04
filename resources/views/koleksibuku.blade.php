<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Perpustakaan</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <style>
             .text-center {
                text-align: center;
            }
            .card-color-1 {
                background-color: #006384;
                color: white;
            }

            .card-color-2 {
                background-color: #4CAF50;
                color: white;
            }

            .card-color-3 {
                background-color: #FFC107;
                color: black;
            }

            .card-color-4 {
                background-color: #E91E63;
                color: white;
            }

            .card-color-5 {
                background-color: #9C27B0;
                color: white;
            }
            .btn {
                background-color: white;
                color: #007bff;
            }

            .custom-card .btn:hover {
                background-color: #e2e6ea;
            }
        </style>
          <style>
            .font-montserrat {
                font-family: 'Montserrat', sans-serif;
            }
        </style>
    </head>

    <body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center ">
                <h1> <b>  <font face="Comic Sans MS, Helvetica, sans-serif" size="9" color="Black"  text-align: center;> <center> KOLEKSI BUKU</center></font></b></h1>
            </h2>
            <div class="container mt-5">
       
                <div class="row">
                    @foreach ($KategoriBuku as $data)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>{{ $data->nama_kategori }}</b></h5>
                                    <p> </p>
                                    <p class="card-text">{{ $data->deskripsi_kategori }}</p>
                                    <a href="{{ route('koleksi', ['id_kategori' => $data->id_kategori]) }}"
                                        class="btn btn-primary">Lihat Buku</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </x-slot>
      
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const cards = document.querySelectorAll('.card');
                const colors = ['card-color-1', 'card-color-2', 'card-color-3', 'card-color-4', 'card-color-5'];
                cards.forEach(card => {
                    const randomColor = colors[Math.floor(Math.random() * colors.length)];
                    card.classList.add(randomColor);
                });
            });
        </script>
        </div>
        </
    </html>
</x-app-layout>
