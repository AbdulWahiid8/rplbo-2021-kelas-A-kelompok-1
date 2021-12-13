<x-master-layout title="Dashboard">
    @section('content')
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible show fade d-flex">
                    <div class="alert-body fw-bold">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        <i class="fas fa-bullhorn mt-1 me-2"></i>
                        <b>Thank You!</b> {{ session('message') }}
                    </div>
                </div>
            @endif
                {{-- <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    This is a success alert.
                    </div>
                </div> --}}
            {{-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Surat Masuk</h4>
                        </div>
                        <div class="card-body">
                        10
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Leges</h4>
                        </div>
                        <div class="card-body">
                        4
                        </div>
                    </div>
                    </div>
                </div>
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
                        1
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Leges Keluar</h4>
                        </div>
                        <div class="card-body">
                        4
                        </div>
                    </div>
                    </div>
                </div>
            </div> --}}
        </section>
    @endsection
</x-master-layout>

