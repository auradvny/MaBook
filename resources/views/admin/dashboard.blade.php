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
            {{ __('Dashboard Admin') }}
<div class ="mt-3 container"> <h4> List Kategori Buku </h4>

<div class="ms-auto"> 
    <a class="btn btn-success" href='{{ route('admin.KategoriBuku.create') }}'>Tambah</a>
</div>
</div>
    <Table class ="table">
       <tr> 
        <th> No </th>
        <th> Nama Kategori</th>
        <th> Deskripsi Kategori </th>
        {{-- <th> Gambar </th> --}}
        <th> Aksi </th>
    </tr>
    <?php $no = 1; ?> 
    @foreach ($KategoriBuku as $data )
    <tr> 
        <td> {{ $no++ }}</td>
        <td> {{ $data->nama_kategori }}</td>
        <td>{{ $data->deskripsi_kategori}} </td>
        {{-- <td><img src="{{ $data->image_url }}" alt="{{ $data->nama_kategori }}" style="width: 50px; height: 50px;"></td> --}}
        <td> 
            <a href="{{ route('admin.KategoriBuku.edit', $data->id_kategori)}}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('admin.KategoriBuku.delete', $data->id_kategori) }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-danger"> Hapus </button>
            </form>
    </tr>
    @endforeach
        
    
   
    </Table>
</div>

    <div class ="mt-3 container"> <h4> Manage Buku </h4>
    <div class="ms-auto"> 
        <a class="btn btn-success" href='{{ route('admin.Buku.manage') }}'>Manage</a>
    </div>
    <div class ="mt-3 container"> <h4> Manage User </h4>
        <div class="ms-auto"> 
            <a class="btn btn-success" href='{{ route('admin.User.manage') }}'>Manage</a>
        </div>
        <div class ="mt-3 container"> <h4> Manage Peminjaman </h4>
            <div class="ms-auto"> 
                <a class="btn btn-success" href='{{ route('admin.Peminjaman.manage') }}'>Manage</a>
            </div>
    {{-- <div class="ms-auto"> 
        <a class="btn btn-success" href='{{ route('admin.Buku.create') }}'>Manage Buku</a>
    </div> --}}






{{-- <div class ="mt-3 container"> <h4> List Buku </h4>

    <div class="ms-auto"> 
        <a class="btn btn-success" href='{{ route('admin.Buku.tambah') }}'>Tambah</a>
    </div>
</div>
<Table class ="table">
   <tr> 
    <th> No </th>
    <th> Judul Buku</th>
    <th> Penulis </th>
    <th> Tahun Terbit </th>
    <th> Jumlah Halaman </th>
    <th> Aksi </th>
</tr>
<?php $no = 1; ?> 
@foreach ($Buku as $data )
<tr> 
    <td> {{ $no++ }}</td>
    <td> {{ $data->judul_buku }}</td>
    <td>{{ $data->penulis_buku}} </td>
    <td> 
        <a href="{{ route('admin.Buku.edit', $data->id_buku)}}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('admin.Buku.delete', $data->id_buku) }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-danger"> Hapus </button>
        </form>
</tr>
@endforeach
    

</Table>
</div> --}}

        </h2>
    </x-slot>
</body>
</html>
   
    {{-- <div>
        <h1 class="mb-0">List Kategori Buku</h1>
        <a class="btn btn-primary" href='{{ route('admin.KategoriBuku.create') }}' role="button">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
           
        </table>

        
    </div>
</div>
</div>

                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}
</x-app-layout>
