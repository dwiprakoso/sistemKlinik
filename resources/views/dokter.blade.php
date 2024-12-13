<x-layout>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2">Dokter</h1>
        {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur ex nam! Fuga distinctio labore excepturi cumque ipsam qui ratione ad, dolor, aliquam reprehenderit quam eveniet accusamus assumenda aperiam, optio deserunt officiis nobis! Mollitia soluta quo odit provident assumenda iste accusamus officia! Hic facilis dolore omnis animi quo placeat. Nam?</p> --}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ url('/obat/create') }}" class="btn btn-info">
                    Add Obat
                </a>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Obat</th>
                                <th>Kemasan</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obats as $obat)
                                <tr>
                                    <td>{{ $obat->nama_obat }}</td>
                                    <td>{{ $obat->kemasan }}</td>
                                    <td>{{ $obat->harga }}</td>
                                    <td>
                                        {{-- kalau menggunakan controller, route diambil dari route list --}}
                                        <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('obat.destroy', $obat->id ) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $obats->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</x-layout>