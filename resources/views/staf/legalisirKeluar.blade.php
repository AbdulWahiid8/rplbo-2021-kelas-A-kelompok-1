<x-master-layout title="Legalisir Keluar">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Legalisir Keluar</h1>
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
                <div class="card-body mt-3">
                @if (Auth::user()->role === 'staf')
                    <div class="text-end mb-4">
                        <a href="{{ route('legalisirkeluar.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Tambah Legalisir Keluar
                        </a>
                    </div>
                @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Nomor Induk Siswa</th>
                            <th>E-mail</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $number => $item)
                        <tr>
                            <td>{{ $number + 1 }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->nama}}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                            @if (Auth::user()->role === 'staf' )
                                <div class="d-flex">
                                    <a href="{{ route('legalisirkeluar.show', $item->id) }}" class="btn btn-icon btn-sm btn-success mb-2 me-2"><i class="far fa-folder-open"></i></a>
                                    <a href="{{ route('legalisirkeluar.edit', $item->id) }}" class="btn btn-icon btn-sm btn-info mb-2 me-2"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="{{ route('legalisirkeluar.destroy', $item->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-icon btn-sm btn-danger mb-2" id="swal-6"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('legalisirkeluar.show', $item->id) }}" class="btn btn-primary">Detail</a>
                            @endif
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
                <!-- Paginate -->
                <div class="d-flex justify-content-end me-3 mb-3">
                    {{ $data->links() }}
                </div>
            </div>
        </section>
    @endsection
</x-master-layout>
