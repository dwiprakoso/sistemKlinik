<x-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2">Dokter</h1>
        {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur ex nam! Fuga distinctio labore excepturi cumque ipsam qui ratione ad, dolor, aliquam reprehenderit quam eveniet accusamus assumenda aperiam, optio deserunt officiis nobis! Mollitia soluta quo odit provident assumenda iste accusamus officia! Hic facilis dolore omnis animi quo placeat. Nam?</p> --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ url('/dokter/create') }}" class="btn btn-info">
                    Tambah Dokter
                </a>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Dokter</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Poli</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokters as $dokter)
                                <tr>
                                    <td>{{ $dokter->nama }}</td>
                                    <td>{{ $dokter->alamat }}</td>
                                    <td>{{ $dokter->no_hp }}</td>
                                    {{-- <td>{{ $dokter->id_poli }}</td> --}}
                                    <td>{{ $dokter->poli->nama_poli ?? 'Poli tidak ditemukan' }}</td>
                                    <td>
                                        {{-- kalau menggunakan controller, route diambil dari route list --}}
                                        <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('dokter.destroy', $dokter->id ) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $dokters->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</x-layout>