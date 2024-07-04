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
    <style>
    .table th{
        background-color: #00687f; /* Warna biru tosca */
        color: white; /* Teks putih */
    }
    </style>

    <body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <h1> <b>  <font face="Times New Roman, Helvetica, sans-serif" size="6" color="Black"  text-align: center;> <center> 
                {{ __('DAFTAR PEMINJAMAN') }} </center></font></b>
            </h2>
        </x-slot>
        <div class="mt-3 container">
            
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th><center> Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($peminjamans as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->buku->judul_buku }}</td>
                            <td>{{ $data->tanggal_peminjaman }}</td>
                            <td>{{ $data->tanggal_pengembalian }}</td>
                            <td>{{ $data->status_peminjaman }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>

    </html>
</x-app-layout>
