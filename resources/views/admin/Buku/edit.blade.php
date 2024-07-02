<x-app-layout>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h1 class="mb-0"> Edit Buku </h1>

                   <form action="{{ route('admin.Buku.update', $Buku-> id_buku) }}" method="POST">
                    @csrf
                    <label> Judul Buku </label>
                    <input type=" text " name="judul_buku" value=" {{ $Buku->judul_buku}}" class="form-control mb-2">
                    <label> Penulis</label>
                    <input type=" text " name="penulis_buku" value=" {{ $Buku->penulis_buku}}"  class="form-control mb-2">
                    <label> Tahun Terbit</label>
                    <input type=" text " name="tahun_terbit" value=" {{ $Buku->tahun_terbit}}"  class="form-control mb-2">
                    <label> Jumlah Halaman</label>
                    <input type=" text " name="jumlah_halaman" value=" {{ $Buku->jumlah_halaman}}"  class="form-control mb-2">
                  <button class="btn btn-primary">Edit</button>
                  </form>


                    
        
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
