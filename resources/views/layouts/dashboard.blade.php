<x-master-layout title="Dashboard">
    @section('content')
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Surat Masuk</h4>
                        </div>
                        <div class="card-body">
                    @if (Auth::check() && Auth::user()->role === 'resepsionis')
                        {{ \App\Models\Surat::get()->count() }}
                    @else
                        {{ \App\Models\Surat::where('konfirmasi_surat', '2021-12-02')->get()->count() }}
                    @endif
                        </div>
                    </div>
                    </div>
                </div>
            {{-- @if (!\App\Models\Legalisir::get('konfirmasi_leges')) --}}
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Legalisir</h4>
                        </div>
                        <div class="card-body">
                    @if (Auth::check() && Auth::user()->role === 'resepsionis')
                        {{ \App\Models\Legalisir::get()->count() }}
                    @else
                        {{ \App\Models\Legalisir::where('konfirmasi_leges', '2021-12-30')->get()->count() }}
                    @endif

                        </div>
                    </div>
                    </div>
                </div>
            {{-- @endif --}}
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Surat Keluar</h4>
                        </div>
                        <div class="card-body">
                        {{ \App\Models\SuratKeluar::get()->count() }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Legalisir Keluar</h4>
                        </div>
                        <div class="card-body">
                        {{ \App\Models\LegalisirKeluar::get()->count() }}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-master-layout>

