<x-master-layout title="Edit Surat Masuk">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Edit Surat Masuk</h1>
            </section>
        <form action="{{ route('suratmasuk.update', $data->id) }}" class="needs-validation px-5 mt-3" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama / Instansi Pengirim <span class="text-danger">*</span></label>
                        <input id="nama" name="namaSurat" type="text" value="{{ $data->nama }}" class="form-control" required>
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
                            <input id="nis" name="nis" type="text" value="{{ $data->nis }}" class="form-control phone-number">
                        </div>
                            {{-- <p class="text-secondary">(-) Isi jika Tidak Ada</p> --}}
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
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
                            <input id="noTelp" name="telepon" type="text" value="{{ $data->nomor_telp }}" class="form-control phone-number" required>
                        </div>
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
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
                            <input id="email" name="email" type="email" value="{{ $data->email }}" class="form-control" required>
                        </div>
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
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
                            <input id="perihal" name="perihal" type="text" value="{{ $data->perihal }}" class="form-control" required>
                        </div>
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
                            <input id="noSurat" name="noSurat" type="text" value="{{ $data->nomor_surat }}" class="form-control" required>
                        </div>
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="row form-group form-surat">
                        <div class="col-md">
                            <label for="lampiran">Lampiran</label>
                            <input id="lampiran" name="lampiran" class="form-control" type="file">
                        </div>
                        <div class="col-md">
                            <label for="date">Tanggal <span class="text-danger">*</span></label>
                            <input id="date" name="date" type="date" value="{{ $data->date }}" class="form-control datepicker" required>
                        </div>
                    </div>
                    <!-- <small class="text-secondary">Pastikan data yang anda isi benar</small> -->
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
        </section>
    @endsection
</x-master-layout>
