<x-master-layout title="Detail Surat">
    @section('content')
        <section class="section">
            <div class="section-header">
                <h1>Detail Surat</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row p-2 mt-4">
                        <div class="col-md text-center mt-4">
                            <img src="{{ url('image/file-preview.png') }}" alt="" width="160">
                            <div>
                                @if ($surat->lampiran)
                                    @if (Auth::check() && Auth::user()->role === 'resepsionis')
                                        <a href="#" class="px-3 btn btn-outline-secondary btn-sm text-decoration-underline text-primary">
                                            {{ $surat->lampiran }}
                                        </a>
                                    @else
                                        <a href="{{ asset('storage/' . $surat->lampiran) }}" class="px-3 btn btn-outline-secondary btn-sm text-decoration-underline text-primary">
                                            {{ $surat->lampiran }}
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
                                    <small class="d-inline btn btn-dark btn-sm shadow-none"># Detail Surat Masuk</small>
                                    <p class="d-inline ms-3 text-dark fw-bolder fs-5">{{ $surat->nomor_surat }}</p>
                                </div>
                                <hr class="mt-2 line-hr">
                                <div class="detail">
                                    <p class="d-inline detail-up">Tanggal</p>
                                    <p class="d-inline ms-3 text-dark"><i class="far fa-calendar-alt me-1"></i>{{ $surat->date }}</p>
                                </div>
                                <hr class="mt-2 line-hr">
                                <div class="col-md text-end">
                                    <p>Pengirim</p>
                                @if ($surat->nis)
                                    <p>NIS</p>
                                @endif
                                    <p>Email</p>
                                    <p>Nomor HP</p>
                                    <p>Perihal</p>
                                </div>
                                <div class="col-md-8 text-dark">
                                    <p>{{ $surat->nama }}</p>
                                @if ($surat->nis)
                                    <p>{{ $surat->nis }}</p>
                                @endif
                                    <p>{{ $surat->email }}</p>
                                    <p>{{ $surat->nomor_telp }}</p>
                                    <p>{{ $surat->perihal }}</p>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </div>
                    @if (!$surat->konfirmasi_surat)
                        <form action="{{ route('suratmasuk.confirm', $surat->id) }}" class="text-center ms-5" method="POST">
                            @method('put')
                            @csrf
                            {{-- @method('put') --}}
                            <input type="hidden" name="konfirmasi_surat" value="2021-12-02">
                            <button type="submit" class="btn btn-success fs-6">Konfirmasi</button>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-master-layout>
