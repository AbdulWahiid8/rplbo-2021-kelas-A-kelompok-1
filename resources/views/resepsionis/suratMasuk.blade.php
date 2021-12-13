<x-master-layout title="Surat Masuk">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Surat Masuk</h1>
            </section>
            <div class="row mx-1">
                <div class="card">
                {{-- @foreach (\App\Models\Legalisir::get() as $item) --}}
                <div class="card-body mt-4">
                  <div class="table-responsive">
                    <table class="table table-bordered table-md">
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nomor Surat</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    @foreach ($data as $number => $item)
                      <tr>
                        <td>{{ $number + 1 }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->nomor_surat }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->perihal }}</td>
                        <td><div class="badge badge-success">Terkonfirmasi</div></td>
                        <td><a href="{{ $item->id }}" class="btn btn-primary">Detail</a></td>
                      </tr>
                    @endforeach
                    </table>
                  </div>
                </div>


                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>
        </section>
    @endsection
</x-master-layout>
