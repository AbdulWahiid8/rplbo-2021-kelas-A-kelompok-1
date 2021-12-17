<x-master-layout title="Detail Legalisir">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Detail Legalisir</h1>
            </section>
            <div class="card">
                <div class="card-body">
                    <div class="row p-2 mt-4">
                        <div class="col-md text-center mt-4">
                            <img src="{{ url('image/file-preview.png') }}" alt="" width="160">
                            <div>
                            @if ($legalisir->lampiran)
                                <a href="#" class="px-3 btn btn-outline-secondary btn-sm text-decoration-underline text-primary">
                                    1290-12200.pdf
                                </a>
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
                                    <small class="d-inline btn btn-dark btn-sm shadow-none"># Detail Legalisir Masuk</small>
                                    <p class="d-inline ms-3 text-dark fw-bolder fs-5">PRA.13/2021/14/22</p>
                                </div>
                                <hr class="mt-2 line-hr">
                                <div class="detail">
                                    <p class="d-inline detail-up">Tanggal</p>
                                    <p class="d-inline ms-3 text-dark"><i class="far fa-calendar-alt me-1"></i>{{ $legalisir->date }}</p>
                                </div>
                                <hr class="mt-2 line-hr">
                                <div class="col-md text-end">
                                    <p>Pengirim</p>
                                    <p>NIS</p>
                                    <p>Email</p>
                                    <p>Nomor HP</p>
                                    <p>Perihal</p>
                                </div>
                                <div class="col-md-8 text-dark">
                                    <p>{{ $legalisir->nama }}</p>
                                    <p>{{ $legalisir->nis }}</p>
                                    <p>{{ $legalisir->email }}</p>
                                    <p>{{ $legalisir->nomor_telp }}</p>
                                    <p>{{ $legalisir->perihal }}</p>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </div>
                    @if (!$legalisir->konfirmasi_leges)
                        <form action="" class="text-center ms-5">
                            <input type="hidden" name="konfirmasi_leges" id="" value="date now">
                            @csrf
                            <button type="submit" class="btn btn-success fs-6">Konfirmasi</button>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-master-layout>


    {{-- <div class="detail-body">
            <p class="d-inline text-end">Pengirim</p>
            <p class="d-inline ms-3 text-dark">Abdul Wahid</p>
        </div>
        <div class="detail-body">
            <p class="d-inline text-end">NIS</p>
            <p class="d-inline ms-3 text-dark">120121210</p>
        </div>
        <div class="detail-body">
            <p class="d-inline text-end">Email</p>
            <p class="d-inline ms-3 text-dark">abdulwahid@gmail.com</p>
        </div>
        <div class="detail-body">
            <p class="d-inline text-end">Nomor HP</p>
            <p class="d-inline ms-3 text-dark">085263535031</p>
        </div>
        <div class="detail-body">
            <p class="d-inline text-end">Perihal</p>
            <p class="d-inline ms-3 text-dark">Legalisir Ijazzh</p>
        </div> --}}


                       {{-- <div class="ms-5">
                                    <span class="btn btn-dark btn-sm shadow-none d-inline"># Detail Surat Masuk</span>
                                    <h4 class="d-inline ms-3">Nomor Surat</h4>
                                </div>
                                <hr>
                                 <div class="ms-5">
                                    <p class="d-inline text-end">Tanggal</p>
                                    <p class="d-inline ms-3">2021-12-12</p>
                                </div>
                                <hr> --}}
