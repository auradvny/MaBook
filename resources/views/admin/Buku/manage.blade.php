<x-app-layout>
    <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Aplikasi Perpustakaan</title>
      <link rel ="stylesheet" href='{{ asset ('bootstrap/css/bootstrap.css')}}'>
  </head>
  <body>
      <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              
  <div class ="mt-3 container">
     <h4> List Buku </h4>
  <div class="ms-auto"> 
      <a class="btn btn-success" href='{{ route('admin.Buku.create') }}'>Tambah</a>
  </div>

      <Table class ="table">
        <thead>
         <tr> 
          <th> No </th>
          <th> Judul Buku</th>
          <th> Penulis </th>
          <th> Tahun Terbit </th>
          <th> Jumlah Halaman </th>
          <th> Kategori Buku </th>
          <th> Aksi </th>
      </tr>
        </thead>
      <?php $no = 1; ?> 
      @foreach ($Buku as $data )
      <tr> 
          <td> {{ $no++ }}</td>
          <td> {{ $data->judul_buku }}</td>
          <td>{{ $data->penulis_buku}} </td>
          <td> {{ $data->tahun_terbit }}</td>
          <td> {{ $data->jumlah_halaman }}</td>
          <td>{{ $data->kategori->nama_kategori }}</td>
        </td>
        
          <td>
              <a href="{{ route('admin.Buku.edit', $data->id_buku) }}" class="btn btn-sm btn-warning">Edit</a>
           
          <form action="{{ route('admin.Buku.delete', $data->id_buku) }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-danger"> Hapus </button>
        </form>
      </tr>
      @endforeach
      </Table>
  </div>
</x-app-layout>