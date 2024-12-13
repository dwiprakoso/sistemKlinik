<x-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2">Pasien</h1>
        {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur ex nam! Fuga distinctio labore excepturi cumque ipsam qui ratione ad, dolor, aliquam reprehenderit quam eveniet accusamus assumenda aperiam, optio deserunt officiis nobis! Mollitia soluta quo odit provident assumenda iste accusamus officia! Hic facilis dolore omnis animi quo placeat. Nam?</p> --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ url('/pasien/create') }}" class="btn btn-info">
                    Add Pasien
                </a>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>No KTP</th>
                                <th>No HP</th>
                                <th>No RM</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasiens as $pasien)
                                <tr>
                                    <td>{{ $pasien->nama }}</td>
                                    <td>{{ $pasien->alamat }}</td>
                                    <td>{{ $pasien->no_ktp }}</td>
                                    <td>{{ $pasien->no_hp }}</td>
                                    <td>{{ $pasien->no_rm }}</td>
                                    <td>
                                        {{-- kalau menggunakan controller, route diambil dari route list --}}
                                        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('pasien.destroy', $pasien->id ) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $pasiens->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</x-layout>