<x-master-layout title="Legalisir">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Legalisir</h1>
            </section>
            <div class="card">
                <div class="card-body mt-4">
                  <div class="table-responsive">
                    <table class="table table-bordered table-lg">
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>NIS</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    @foreach ($data as $number => $item)
                      <tr>
                        <td>{{ $number + 1 }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->perihal }}</td>
                    @if (!$item->konfirmasi_leges)
                        <td><div class="badge badge-danger">Belum Konfirmasi</div></td>
                    @else
                        <td><div class="badge badge-success">Terkonfirmasi</div></td>
                    @endif
                        <td><a href="{{ route('legalisirmasuk.detail', $item->id) }}" class="btn btn-primary">Detail</a></td>
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
