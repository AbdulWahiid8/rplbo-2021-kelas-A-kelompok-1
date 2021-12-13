<x-master-layout title="Pengajuan Leges">
    @section('content')
    <section class="section">
        <div class="section-header">
            <h1>Form Pengajuan Leges</h1>
        </div>
         <div class="row">
            <h1 class="font-header"> Silakan Isi Form (Form Tidak Boleh Kosong)</h1>
        </div>
        <form action="{{ Route('leges.create') }}" method="POST" class="needs-validation px-5 mt-3" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="card">
                <div class="card-body">
                     <div class="form-group">
                        <label for="nama">Nama / Instansi Pengirim <span class="text-danger">*</span></label>
                        <input id="nama" name="namaLeges" type="text" class="form-control" required>
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                   <i class="far fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nis" name="nis" type="text" class="form-control phone-number">
                        </div>
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
                            <input id="noTelp" name="telepon" type="text" class="form-control phone-number" required>
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
                            <input id="email" name="email" type="email" class="form-control" required>
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
                            <input id="perihal" name="perihal" type="text" class="form-control" required>
                        </div>
                        <div class="invalid-feedback">
                            Field Tidak Boleh Kosong!
                        </div>
                    </div>

                    <div class="row form-group form-surat">
                        <div class="col-md">
                            <label for="lampiran">Lampiran</label>
                            <input name="lampiran" class="form-control" type="file" id="lampiran">
                        </div>
                        <div class="col-md">
                            <label for="date">Tanggal <span class="text-danger">*</span></label>
                            <input id="date" name="date" type="date" class="form-control datepicker" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    @endsection
</x-master-layout>
