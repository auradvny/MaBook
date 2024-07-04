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
                {{ __('User') }}
            </h2>
        </x-slot>
        <div class="container mt-3">
            <h4>List Siswa</h4>
            {{-- <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-success" href="{{ route('admin.User.create') }}">Tambah</a>
            </div> --}}
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th><center>No</th>
                        <th><center>Nama</th>
                        <th><center>Email</th>
                        {{-- <th>Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($siswa as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            {{-- <td class="d-flex">
                                <a href="{{ route('admin.User.edit', $data->id) }}"
                                    class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('admin.User.delete', $data->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h4>List Admin</h4>
            {{-- <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-success" href="{{ route('admin.Admin.create') }}">Tambah</a>
            </div> --}}
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th><center>No</th>
                        <th><center>Nama</th>
                        <th><center>Email</th>
                        {{-- <th>Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($admin as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            {{-- <td class="d-flex">
                                <a href="{{ route('admin.User.edit', $data->id) }}"
                                    class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="{{ route('admin.User.delete', $data->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    </html>
</x-app-layout>
