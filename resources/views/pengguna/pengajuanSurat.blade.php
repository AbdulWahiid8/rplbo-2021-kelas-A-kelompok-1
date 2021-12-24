<x-master-layout title="Pengajuan Surat">
    @section('content')
    <section class="section">
        <div class="section-header">
            <h1>Form Pengajuan Surat</h1>
        </div>
        <div class="row">
            <h1 class="font-header"> Silakan Isi Form (Form Tidak Boleh Kosong)</h1>
        </div>
        <form action="{{ route('surat.create') }}" class="needs-validation px-5 mt-3" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama / Instansi Pengirim <span class="text-danger">*</span></label>
                        <input id="nama" name="namaSurat" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nis">Nomor Induk Siswa (Opsional)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                   <i class="far fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nis" name="nis" type="text" class="form-control phone-number">
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                            {{-- <p class="text-secondary">(-) Isi jika Tidak Ada</p> --}}
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
                    <div class="row form-group form-surat">
                        <div class="col-md mb-3">
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
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    @endsection
</x-master-layout>
