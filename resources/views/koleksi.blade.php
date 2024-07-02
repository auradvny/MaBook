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
    </head>
    <body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Buku dalam Kategori: {{ $KategoriBuku->nama_kategori }}
            </h2>
        </x-slot>
        <div class="mt-3 container">
            <h4>Daftar Buku dalam Kategori: {{ $KategoriBuku->nama_kategori }}</h4>
            @if($Buku->isEmpty())
                <p>Tidak ada buku dalam kategori ini.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th> Aksi </th>
                            {{-- <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Jumlah Halaman</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Buku as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->judul_buku }}</td>
                                {{-- <td>{{ $data->penulis_buku }}</td>
                                <td>{{ $data->tahun_terbit }}</td>
                                <td>{{ $data->jumlah_halaman }}</td> --}}
                                <td>
                                    {{-- <form action="{{ route('pinjam', ['id_buku' => $data->id_buku]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Pinjam</button>
                                    </form> --}}

                                    <a href="{{ route('pinjam', ['id_buku' => $data->id_buku]) }}" class="btn btn-primary">Pinjam</a>
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
