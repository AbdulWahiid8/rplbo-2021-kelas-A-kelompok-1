<x-master-layout title="Edit Legalisir Keluar">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Edit Legalisir Keluar</h1>
            </section>
            <form action="{{ route('legalisirkeluar.update', $data->id) }}" class="needs-validation px-5 mt-3" method="POST" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama<span class="text-danger">*</span></label>
                            <input id="nama" name="namaLeges" value="{{ $data->nama }}" type="text" class="form-control" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nis">Nomor Induk Siswa<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="far fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nis" name="nis" value="{{ $data->nis }}" type="text" class="form-control" required>
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
                                <input id="email" name="email" value="{{ $data->email }}" type="email" class="form-control" required>
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
                                <input id="date" name="date" value="{{ $data->date }}" type="date" class="form-control datepicker" required>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    @endsection
</x-master-layout>
