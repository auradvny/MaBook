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
                        <h1 class="mb-0">Tambah Peminjaman</h1>
                        <form action="{{ route('admin.Peminjaman.submit') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="user_id" class="form-label">User</label>
                                <select name="user_id" class="form-control">
                                    @foreach ($User as $data)
                                        @if ($data->usertype == 'user')
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="buku_id" class="form-label">Judul Buku</label>
                                <select name="buku_id" class="form-control">
                                    @foreach ($Buku as $data)
                                        <option value="{{ $data->id_buku }}">{{ $data->judul_buku }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" name="tanggal_peminjaman" class="form-control">
                            </div>
                            {{-- <div class="mb-2">
                                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" name="tanggal_pengembalian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="status_peminjaman" class="form-label">Status Peminjaman</label>
                                <select class="form-control" name="status_peminjaman" required>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <button class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>
