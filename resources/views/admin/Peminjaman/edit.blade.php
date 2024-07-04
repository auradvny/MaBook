<x-app-layout>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="mb-0"> Edit Peminjaman</h1>
                        <form action="{{ route('admin.Peminjaman.update', $Peminjaman->id_peminjaman) }}"
                            method="POST">
                            @csrf
                            <label for="user_id">Nama Siswa</label>
                            <select name="user_id" class="form-control mb-2">
                                @foreach ($User as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id == $Peminjaman->user_id ? 'selected' : '' }}>
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>

                            <label for="buku_id">Judul Buku</label>
                            <select name="buku_id" class="form-control mb-2">
                                @foreach ($Buku as $data)
                                    <option value="{{ $data->id_buku }}"
                                        {{ $data->id_buku == $Peminjaman->buku_id ? 'selected' : '' }}>
                                        {{ $data->judul_buku }}
                                    </option>
                                @endforeach
                            </select>

                            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" class="form-control mb-2"
                                value="{{ $Peminjaman->tanggal_peminjaman }}" disabled>

                            <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control mb-2"
                                value="{{ $Peminjaman->tanggal_pengembalian }}" disabled>

                            <div class="form-group">
                                <label for="status_peminjaman">Status Peminjaman :</label>
                                <select class="form-control" name="status_peminjaman" required>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status }}"
                                            {{ $status == $Peminjaman->status_peminjaman ? 'selected' : '' }}>
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                                <button class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>
        </div>
        </div>
</x-app-layout>
