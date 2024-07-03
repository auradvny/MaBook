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
              height: 100%; /* Menetapkan ketinggian 100% */
          }

          .card:hover {
              transform: translateY(-5px); /* Efek mengangkat saat hover */
              box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Bayangan yang lebih lembut */
          }

          .card-body {
              height: 100%; /* Menetapkan ketinggian 100% untuk bagian badan kartu */
              display: flex;
              flex-direction: column;
          }

          .card-title {
              font-size: 1.25rem; /* Ukuran font yang lebih besar */
              font-weight: bold; /* Teks tebal */
              color: #333; /* Warna teks lebih gelap */
              margin-bottom: 0.75rem; /* Ruang bawah */
          }

          .card-text {
              flex-grow: 1; /* Membuat teks dapat berkembang dalam bagian badan kartu */
          }
      </style>
  </head>
  <body>
      <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Dashboard') }}
          </h2>
      </x-slot>

      <div class="container mt-5">
          <h4 class="mb-4">Koleksi Buku</h4>
          <div class="row">
              @foreach ($KategoriBuku as $data)
              <div class="col-md-4 mb-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{ $data->nama_kategori }}</h5>
                          <p class="card-text">{{ $data->deskripsi_kategori }}</p>
                          <a href="{{ route('koleksi', ['id_kategori' => $data->id_kategori]) }}" class="btn btn-primary">Lihat Buku</a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </body>
  </html>
</x-app-layout>
