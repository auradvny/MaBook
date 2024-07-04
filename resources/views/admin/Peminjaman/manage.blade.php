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
                {{ __('Peminjaman dan Pengembalian') }}
            </h2>
        </x-slot>

        <div class="mt-3 container">
            <h4>List Peminjaman</h4>
            <div class="ms-auto mb-3">
                <a class="btn btn-success" href="{{ route('admin.Peminjaman.create') }}">Tambah</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($PeminjamanBelumDikembalikan as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->User->name }}</td>
                            <td>{{ $data->Buku->judul_buku }}</td>
                            <td>{{ $data->tanggal_peminjaman }}</td>
                            <td>{{ $data->tanggal_pengembalian }}</td>
                            <td>{{ $data->status_peminjaman }}</td>
                            <td>
                                <a href="{{ route('admin.Peminjaman.edit', $data->id_peminjaman) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.Peminjaman.delete', $data->id_peminjaman) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3 container">
            <h4>List Pengembalian</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Dikembalikan</th>
                        <th>Denda</th>
                        <th>Status Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($PeminjamanDikembalikan as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->User->name }}</td>
                            <td>{{ $data->Buku->judul_buku }}</td>
                            <td>{{ $data->tanggal_peminjaman }}</td>
                            <td>{{ $data->updated_at }}</td>
                            <td>Rp. {{ $data->denda }}</td>
                            <td>{{ $data->status_peminjaman }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    </html>
</x-app-layout>
