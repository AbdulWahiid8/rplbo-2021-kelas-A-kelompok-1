<x-master-layout title="Kelola Pengguna">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Kelola Pengguna</h1>
            </section>
            @if (session()->has('pesan'))
                <div class="alert alert-success alert-dismissible show fade d-flex">
                    <div class="alert-body fw-bold">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <i class="fas fa-bullhorn mt-1 me-2"></i>
                        <b>Success!</b> {{ session('pesan') }}
                    </div>
                </div>
            @endif
            <div class="card">
                {{-- @foreach (\App\Models\Legalisir::get() as $item) --}}
                <div class="card-body mt-3 mb-4">
                    <div class="text-end mb-4">
                        <a href="{{ route('kelolapengguna.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Tambah Pengguna
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Hak Akses</th>
                            {{-- <th>Perihal</th> --}}
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $number => $item)
                        <tr>
                            <td>{{ $number + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->username }}</td>
                        @if ($item->role === 'resepsionis')
                            <td>Resepsionis</td>
                        @elseif ($item->role === 'staf')
                            <td>Staf Tata Usaha</td>
                        @elseif ($item->role === 'ktu')
                            <td>Kepala Tata Usaha</td>
                        @else
                            <td>Kepala Sekolah</td>
                        @endif
                            {{-- <td>{{ $item->perihal }}</td> --}}
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('updatepassword.edit', $item->id) }}" class="btn btn-icon btn-sm btn-warning mb-2 me-2"><i class="fas fa-key"></i></a>
                                    <a href="{{ route('kelolapengguna.edit', $item->id) }}" class="btn btn-icon btn-sm btn-info mb-2 me-2"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="{{ route('kelolapengguna.destroy', $item->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-icon btn-sm btn-danger mb-2" id="swal-6"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-master-layout>
