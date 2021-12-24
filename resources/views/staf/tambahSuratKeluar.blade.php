<x-master-layout title="Tambah Surat Keluar">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Tambah Surat Keluar</h1>
            </section>
            <form action="{{ route('suratkeluar.store') }}" class="needs-validation px-5 mt-3" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Pengirim <span class="text-danger">*</span></label>
                            <input id="nama" name="nama" type="text" class="form-control" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noSurat">Nomor Surat <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-pen-square"></i>
                                    </div>
                                </div>
                                <input id="noSurat" name="noSurat" type="text" class="form-control" required>
                                <div class="invalid-feedback">
                                    Field Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </div>
                                </div>
                                <input id="perihal" name="perihal" type="text" class="form-control" required>
                                <div class="invalid-feedback">
                                    Field Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan <span class="text-danger">*</span></label>
                            <input id="tujuan" name="tujuan" type="text" class="form-control" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                        <div class="row form-group form-surat">
                            <div class="col-md">
                                <label for="lampiran">Lampiran</label>
                                <input id="lampiran" name="lampiran" class="form-control @error('lampiran') is-invalid @enderror" type="file">
                                @error('lampiran')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md">
                                <label for="date">Tanggal <span class="text-danger">*</span></label>
                                <input id="date" name="date" type="date" class="form-control datepicker" required>
                                <div class="invalid-feedback">
                                    Field Tidak Boleh Kosong!
                                </div>
                            </div>
                        </div>

                        <!-- <small class="text-secondary">Pastikan data yang anda isi benar</small> -->
                        <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    @endsection
</x-master-layout>
