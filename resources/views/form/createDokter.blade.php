<x-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Dokter</h1>
            <a href="{{ url('dokter') }}" class="btn btn-danger float-end">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                {{-- action diambil dari route list --}}
                <form action="{{ route('dokter.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama Dokter</label>
                        <input type="text" name="nama" class="form-control" >
                        @error('nama') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" >
                        @error('alamat') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">No Hp</label>
                        <input type="text" name="no_hp" class="form-control" >
                        @error('no_hp')<span class="text-danger">{{ $message }} </span>  @enderror
                    </div>
                    <!-- Pilih Poli -->
                    {{-- <label>Pilih Poli:</label>
                    <select class="form-select" display="block" name="id_poli" id="id_poli" required>
                        <option selected >---> Pilih Poli <---</option>
                        @foreach ($polis as $poli)
                            <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                        @endforeach
                    </select> --}}


                    <div class="mb-3">
                        <label for="id_poli">Poli:</label>
                        <select name="id_poli" id="id_poli" class="form-control">
                            <option value="">-- Pilih Poli --</option>
                            @foreach ($polis as $poli)
                                <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                            @endforeach
                        </select>
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