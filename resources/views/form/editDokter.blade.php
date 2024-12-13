<x-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Data Dokter</h1>
            <a href="{{ url('dokter') }}" class="btn btn-danger float-end">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                {{-- action diambil dari route list --}}
                <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Nama Dokter</label>
                        <input type="text" name="nama" class="form-control" value="{{ $dokter->nama }}" >
                        @error('nama') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $dokter->alamat }}" >
                        @error('alamat') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">No Telepon</label>
                        <input type="text" name="no_hp" class="form-control" value="{{ $dokter->no_hp }}" >
                        @error('no_hp') <span class="text-danger">{{ $message }} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="id_poli">Poli:</label>
                        <select name="id_poli" id="id_poli" class="form-control">
                            <option value="">-- Pilih Poli --</option>
                            @foreach ($polis as $poli)
                                <option value="{{ $poli->id }}" 
                                    {{ $dokter->id_poli == $poli->id ? 'selected' : '' }}>
                                    {{ $poli->nama_poli }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        
  </div>
  <!-- /.container-fluid -->
  
  </x-layout>