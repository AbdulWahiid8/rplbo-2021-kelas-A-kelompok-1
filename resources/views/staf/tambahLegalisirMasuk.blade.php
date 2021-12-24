<x-master-layout title="Tambah Legalisir Masuk">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Tambah Legalisir Masuk</h1>
            </section>
            <form action="{{ route('legalisirmasuk.store') }}" method="POST" class="needs-validation px-5 mt-3" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="card">
                <div class="card-body">
                     <div class="form-group">
                        <label for="nama">Nama Pengirim<span class="text-danger">*</span></label>
                        <input id="nama" name="namaLeges" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                   <i class="far fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nis" name="nis" type="text" class="form-control" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="noTelp">Nomor Telepon <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input id="noTelp" name="telepon" type="text" class="form-control phone-number" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="email" class="form-control" required>
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

                    <div class="row form-group form-surat">
                        <div class="col-md">
                            <label for="lampiran">Lampiran</label>
                            <input name="lampiran" class="form-control @error('lampiran') is-invalid @enderror" type="file" id="lampiran">
                            @error('lampiran')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label for="date">Tanggal <span class="text-danger">*</span></label>
                            <input id="date" name="date" type="date" class="form-control datepicker" required>
                        </div>
                    </div>
                    <!-- confirm -->
                    <input type="hidden" name="konfirmasi_leges" value="2021-12-30">
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </form>
        </section>
    @endsection
</x-master-layout>
