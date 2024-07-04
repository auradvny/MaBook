{{-- <!-- resources/views/hasil_pencarian.blade.php -->

<x-app-layout>
    <div class="container mt-5">
        <h4 class="mb-4">Hasil Pencarian</h4>
        @if($hasilPencarian->isEmpty())
            <p>Tidak ada hasil yang ditemukan untuk "{{ request('query') }}"</p>
        @else
            <div class="row">
                @foreach ($hasilPencarian as $KategoriBuku)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                        
                              
                                    <h5 class="card-title">{{ $KategoriBuku->nama_kategori }}</h5>
                                    <p class="card-text">{{ $KategoriBuku->deskripsi_kategori }}</p>
                                    
                                <a href="{{ route('KategoriBuku', ['id' => $KategoriBuku->id_kategori]) }}" class="btn btn-primary">Lihat Buku</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout> --}}
