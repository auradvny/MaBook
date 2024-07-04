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
                {{ __('PENGEMBALIAN') }}
            </h2>
        </x-slot>
        <div class="mt-3 container">
            <h4>Daftar Pengembalian Buku</h4>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Dikembalikan</th>
                        <th>Denda</th>
                        <th>Status Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($pengembalians as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->buku->judul_buku }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->tanggal_peminjaman)->setTimezone('Asia/Jakarta')->format('d-m-Y') }}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($data->updated_at)->setTimezone('Asia/Jakarta')->format('d-m-Y') }}
                            </td>
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
