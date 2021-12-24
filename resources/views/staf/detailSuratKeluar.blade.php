<x-master-layout title="Detail Surat Keluar">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Detail Surat Keluar</h1>
            </section>
            <div class="card">
                <div class="card-body">
                    <div class="row p-2 mt-4">
                        <div class="col-md text-center mt-4">
                            <img src="{{ url('image/file-preview.png') }}" alt="" width="160">
                            <div>
                                @if ($data->lampiran)
                                     @if (Auth::check() && Auth::user()->role === 'resepsionis')
                                        <a href="#" class="px-3 btn btn-outline-secondary btn-sm text-decoration-underline text-primary">
                                            {{ $data->lampiran }}
                                        </a>
                                    @else
                                        <a href="{{ asset('storage/' . $data->lampiran) }}" class="px-3 btn btn-outline-secondary btn-sm text-decoration-underline text-primary">
                                            {{ $data->lampiran }}
                                        </a>
                                    @endif
                                @else
                                    <a href="#" class="px-3 btn btn-outline-secondary btn-sm text-decoration-underline text-primary">
                                        Tidak Ada Lampiran
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row mt-2">
                                <div class="ms-5">
                                    <small class="d-inline btn btn-dark btn-sm shadow-none"># Detail Surat Keluar</small>
                                    <p class="d-inline ms-3 text-dark fw-bolder fs-5">{{ $data->nomor_surat }}</p>
                                </div>
                                <hr class="mt-2 line-hr">
                                <div class="detail">
                                    <p class="d-inline detail-up">Tanggal</p>
                                    <p class="d-inline ms-3 text-dark"><i class="far fa-calendar-alt me-1"></i>{{ $data->date }}</p>
                                </div>
                                <hr class="mt-2 line-hr">
                                <div class="col-md text-end">
                                    <p>nama</p>
                                    <p>Perihal</p>
                                    <p>Tujuan</p>
                                </div>
                                <div class="col-md-8 text-dark">
                                    <p>{{ $data->nama }}</p>
                                    <p>{{ $data->perihal }}</p>
                                    <p>{{ $data->tujuan }}</p>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-master-layout>
