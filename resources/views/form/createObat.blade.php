<x-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Obat</h1>
            <a href="{{ url('obat') }}" class="btn btn-danger float-end">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                {{-- action diambil dari route list --}}
                <form action="{{ route('obat.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" >
                        @error('nama_obat') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Kemasan</label>
                        <input type="text" name="kemasan" class="form-control" >
                        @error('kemasan') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" >
                        @error('harga')<span class="text-danger">{{ $message }} </span>  @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        
  </div>
  <!-- /.container-fluid -->
  
  </x-layout>