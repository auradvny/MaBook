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
            .table-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50vh; /* Contoh: Membuat tabel ditengah */
            }
        </style>
    </head>
    <body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Buku: {{ $Buku->judul_buku }}
        </h2>
        <div class="table-container">
                <table class="table">

                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <td> {{ $Buku->judul_buku }}</td>
                        </tr>
                        <thead>
                            <tr>
                            <th>Penulis</th>
                            <td>{{ $Buku->penulis_buku}} </td>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                            <th>Tahun Terbit</th>
                            <td> {{ $Buku->tahun_terbit }}</td>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                            <th>Jumlah Halaman</th>
                            <td> {{ $Buku->jumlah_halaman }}</td>
                        </tr>
                        </thead>
                    </thead>
                   
                   
                       <td>
                                    <form action="{{ route('peminjaman', ['id_buku' => $Buku->id_buku]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Pinjam</button>
                                    </form>
                                </td>
{{--                         
                          <td>
                              <a href="{{ route('admin.Buku.edit', $data->id_buku) }}" class="btn btn-sm btn-warning">Edit</a>
                           
                          <form action="{{ route('admin.Buku.delete', $data->id_buku) }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-danger"> Hapus </button>
                        </form>
                      </tr>
                      @endforeach
                      </Table> --}}
                     {{-- <tbody> 
                        @foreach ($Buku as $index => $data)
                            <tr> 
                                <td>{{ $data->judul_buku }}</td>
                                <td>{{ $data->penulis_buku }}</td>
                                <td>{{ $data->tahun_terbit }}</td>
                                <td>{{ $data->jumlah_halaman }}</td>
                                <td>
                                    <form action="{{ route('oke', ['id_buku' => $data->id_buku]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Pinjam</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody> --}}
                </table>
                
        </div>
    </body>
    </html>  
</x-app-layout>
