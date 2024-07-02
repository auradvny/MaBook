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
     <h4> List User </h4>
  <div class="ms-auto"> 
      <a class="btn btn-success" href='{{ route('admin.User.create') }}'>Tambah</a>
  </div>

      <Table class ="table">
        <thead>
         <tr> 
          <th> No </th>
          <th> Nama</th>
          <th> Email</th>
          <th> Usertype </th>
          <th> Aksi </th>
      </tr>
        </thead>
      <?php $no = 1; ?> 
      @foreach ($User as $data )
      <tr> 
          <td> {{ $no++ }}</td>
          <td> {{ $data->name }}</td>
          <td>{{ $data->email}} </td>
          <td> {{ $data->usertype}}</td>
          <td>
              <a href="{{ route('admin.User.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
           
          <form action="{{ route('admin.User.delete', $data->id) }}" method="POST">
            @csrf 
            <button class="btn btn-sm btn-danger"> Hapus </button>
        </form>
      </tr>
      @endforeach
      </Table>
  </div>
</x-app-layout>