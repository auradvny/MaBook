<!-- resources/views/buku/detail.blade.php -->
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aplikasi Perpustakaan</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f8f9fa;
            }

            .header {
                background-color: #bdc2c6;
                color: #fff;
                padding: 1rem;
                border-radius: 5px;
                margin-bottom: 1rem;
                text-align: center;
            }

            .table-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50vh;
                /* Contoh: Membuat tabel ditengah */
            }

            .table {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                overflow: hidden;
            }

            .table th,
            .table td {
                padding: 1rem;
                text-align: left;
            }

            .table th {
                background-color: #ffffff;
                color: #000000;
            }

            .table td {
                background-color: #fff;
            }

            .btn-primary {
                background-color: #007bff;
                border: none;
                padding: 0.5rem 1rem;
                font-size: 1rem;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <x-slot name="header">
            <div class="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Detail Buku: {{ $Buku->judul_buku }}
                </h2>
            </div>
        </x-slot>
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <td>{{ $Buku->judul_buku }}</td>
                    </tr>
                    <tr>
                        <th>Penulis</th>
                        <td>{{ $Buku->penulis_buku }}</td>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <td>{{ $Buku->tahun_terbit }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah Halaman</th>
                        <td>{{ $Buku->jumlah_halaman }}</td>
                    </tr>
                </thead>
            </table>
        </div>

        <form action="{{ route('submit', ['id_buku' => $Buku->id_buku]) }}" method="POST">
            @csrf
            <input type="hidden" name="buku_id" value="{{ $Buku->id_buku }}">
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Pinjam</label>
                <input type="date" name="tanggal_peminjaman" class="form-control mb-2" required>
            </div>
            </div>
            <button class="btn btn-primary">Pinjam</button>
        </form>
        {{-- <tr> 
                        <th> Tanggal Pinjam </th>
                        <td> <input type=" date " name="tanggal_peminjaman" class="form-control mb-2"></td>
                </thead>
            </table>
        </div>
 <form action="{{ route('submit', ['id_buku' => $Buku->id_buku]) }}" method="POST">
            @csrf
            <input type="hidden" name="id_buku" value="{{ $Buku->id_buku }}">
            <button class="btn btn-primary">Pinjam</button>
        </form>
                    
                </tbody> --}}
        </table>
        </div>
    </body>

    </html>
</x-app-layout>
