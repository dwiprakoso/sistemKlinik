<x-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Poli</h1>
            <a href="{{ url('poli') }}" class="btn btn-danger float-end">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                {{-- action diambil dari route list --}}
                <form action="{{ route('poli.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama Poli</label>
                        <input type="text" name="nama_poli" class="form-control" >
                        @error('nama_poli') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" >
                        @error('keterangan') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        
  </div>
  <!-- /.container-fluid -->
  
  </x-layout>