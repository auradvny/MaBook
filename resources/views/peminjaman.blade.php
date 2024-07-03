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
                <class="p-6 text-gray-900">
                   <h1 class="mb-0"> Buku yang dipinjam </h1>

                
                   <table class="table table-bordered table-hover">
                       <thead class="table-dark">
                           <tr>
                               <th>No</th>
                               <th>Judul Buku</th>
                               <th> Tanggal Peminjaman </th>
                               <th> Tanggal Pengembalian </th>
                               <th> Status Peminjaman </th>
                           </tr>
                       </thead>
                      <tbody>
                        @foreach ($Buku as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data->Buku->judul_buku}}</td>
                            <td>{{ $data->tanggal_peminjaman}}</td>
                            <td>{{ $data->tanggal_pengembalian}}</td>
                            <td>{{ $data->status_peminjaman}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                    
            </div>
        </div>
    </div>
</x-app-layout>

