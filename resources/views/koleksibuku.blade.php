<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Perpustakaan</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    </head>

    <body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('PEMINJAMAN') }}
            </h2>
        </x-slot>
        <div class="mt-3 container">
           
        </div>
    </body>

    <div class="container mt-5">
        <h4 class="mb-4">Koleksi Buku</h4>
        <div class="row">
            @foreach ($KategoriBuku as $data)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nama_kategori }}</h5>
                            <p class="card-text">{{ $data->deskripsi_kategori }}</p>
                            <a href="{{ route('koleksi', ['id_kategori' => $data->id_kategori]) }}"
                                class="btn btn-primary">Lihat Buku</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </html>
</x-app-layout>
