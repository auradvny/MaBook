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
                {{ __('Buku') }}
            </h2>
        </x-slot>

        <div class="container mt-3">
            <h4>List Buku</h4>
            <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-success" href="{{ route('admin.Buku.create') }}">Tambah</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Jumlah Halaman</th>
                        <th>Kategori Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($Buku as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->judul_buku }}</td>
                            <td>{{ $data->penulis_buku }}</td>
                            <td>{{ $data->tahun_terbit }}</td>
                            <td>{{ $data->jumlah_halaman }}</td>
                            <td>{{ $data->kategori->nama_kategori }}</td>
                            <td class="d-flex">
                                <a href="{{ route('admin.Buku.edit', $data->id_buku) }}"
                                    class="btn btn-sm btn-warning me-2">Edit</a>
                                {{-- <form action="{{ route('admin.Buku.delete', $data->id_buku) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form> --}}
                                <form action="{{ route('admin.Buku.delete', $data->id_buku) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    </html>
</x-app-layout>
