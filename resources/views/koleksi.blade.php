<!-- resources/views/buku/index.blade.php -->
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Perpustakaan</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }

            .header-title {
                background-color: #bdc2c6;
                padding: 1rem;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 1rem;
                font-weight: 500;
                text-align: center;

            }

            .table {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .table th,
            .table td {
                vertical-align: middle;
                font-weight: 400;
            }

            .action-btns {
                display: flex;
                gap: 0.5rem;
            }
            .table th{
                background-color: #00687f; /* Warna biru tosca */
                color: white; /* Teks putih */
            }
        </style>
    </head>

    <body>
        <x-slot name="header">
         
                <h2 class="font-semibold text-xl text-gray-800 leading-tight  ">
                    <h1> <b>  <font face="Times New Roman, Helvetica, sans-serif" size="6" color="Black"  text-align: center;> <center> 
                
                    Koleksi Buku  : {{ $KategoriBuku->nama_kategori }} </center></font></b>
                </h2>
            
        </x-slot>
        <div class="mt-3 container">

            @if ($Buku->isEmpty())
                <div class="alert alert-warning">
                    <p>Tidak ada buku dalam kategori ini.</p>
                </div>
            @else
                <table class="table table-bordered table-hover">
                    <thead class="table-dark" >
                        <tr>
                            <th><center>No</th>
                            <th><center>Judul Buku</th>
                            <th><center>Penulis</th>
                            <th><center>Tahun Terbit</th>
                            <th><center>Jumlah Halaman</th>
                            <th><center>Keterangan </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Buku as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->judul_buku }}</td>
                                <td>{{ $data->penulis_buku }}</td>
                                <td>{{ $data->tahun_terbit }}</td>
                                <td>{{ $data->jumlah_halaman }}</td>
                                <td class="action-btns">
                                    <a href="{{ route('pinjam', ['id_buku' => $data->id_buku]) }}" class="btn btn-primary" center >Pinjam</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </body>

    </html>
</x-app-layout>
