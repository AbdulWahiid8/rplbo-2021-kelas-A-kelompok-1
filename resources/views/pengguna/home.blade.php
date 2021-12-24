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
        </section>
    @endsection
</x-master-layout>

