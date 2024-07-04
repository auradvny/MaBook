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
                        <h1 class="mb-0"> Tambah Kategori Buku </h1>

                        <form action="{{ route('admin.KategoriBuku.submit') }}" method="POST" enctype="multipart/form-data>
                            @csrf
                            <label> Nama Kategori </label>
                            <input type=" text " name="nama_kategori" class="form-control mb-2">
                            <label> Deskripsi Kategori</label>
                            <input type=" text " name="deskripsi_kategori" class="form-control mb-2">
                            {{-- <label> Gambar</label>
                            <input type="file" name="image_url" class="form-control mb-2" accept=".png, .jpg, .jpeg"> --}}


                            <button class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
