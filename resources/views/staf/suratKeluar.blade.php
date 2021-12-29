<x-master-layout title="Surat Keluar">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Surat Keluar</h1>
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
                        <a href="{{ route('suratkeluar.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Tambah Surat Keluar
                        </a>
                    </div>
                @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nomor Surat</th>
                            <th>Pengirim</th>
                            <th>Perihal</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $number => $item)
                        <tr>
                            <td>{{ $number + 1 }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->nomor_surat }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>
                            @if (Auth::user()->role === 'staf')
                                <div class="d-flex">
                                    <a href="{{ route('suratkeluar.show', $item->id) }}" class="btn btn-icon btn-sm btn-success mb-2 me-2"><i class="far fa-folder-open"></i></a>
                                    <a href="{{ route('suratkeluar.edit', $item->id) }}" class="btn btn-icon btn-sm btn-info mb-2 me-2"><i class="fas fa-pencil-alt"></i></a>
                                    <!-- SweetAlert Delete -->
                                    <form action="{{ route('suratkeluar.destroy', $item->id) }}" method="POST" id="data-{{ $item->id }}">
                                        @method('delete')
                                        @csrf
                                    </form>
                                    <button onclick="deleteRow({{ $item->id }})" class="btn btn-icon btn-sm btn-danger mb-2"><i class="far fa-trash-alt"></i></button>
                                </div>
                            @else
                                <a href="{{ route('suratkeluar.show', $item->id) }}" class="btn btn-primary">Detail</a>
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
