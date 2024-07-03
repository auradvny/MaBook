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
        <div class="container mt-3">
            <h4>List Kategori Buku</h4>
            <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-success" href="{{ route('admin.KategoriBuku.create') }}">Tambah</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi Kategori</th>
                        {{-- <th>Gambar</th> --}}
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($KategoriBuku as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama_kategori }}</td>
                            <td>{{ $data->deskripsi_kategori }}</td>
                            {{-- <td><img src="{{ $data->image_url }}" alt="{{ $data->nama_kategori }}" style="width: 50px; height: 50px;"></td> --}}
                            <td class="d-flex">
                                <a href="{{ route('admin.KategoriBuku.edit', $data->id_kategori) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('admin.KategoriBuku.delete', $data->id_kategori) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                <h4>Manage Buku</h4>
                <div class="d-flex justify-content-end mb-3">
                    <a class="btn btn-success" href="{{ route('admin.Buku.manage') }}">Manage</a>
                </div>
            </div>

            <div class="mt-3">
                <h4>Manage User</h4>
                <div class="d-flex justify-content-end mb-3">
                    <a class="btn btn-success" href="{{ route('admin.User.manage') }}">Manage</a>
                </div>
            </div>

            <div class="mt-3">
                <h4>Manage Peminjaman</h4>
                <div class="d-flex justify-content-end mb-3">
                    <a class="btn btn-success" href="{{ route('admin.Peminjaman.manage') }}">Manage</a>
                </div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>
