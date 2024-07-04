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
                {{ __('Dashboard Admin') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Buku</h5>
                            {{-- <p class="card-text">{{ $jumlahBuku }}</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah User</h5>
                            {{-- <p class="card-text">{{ $id_user }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>
