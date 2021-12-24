<x-master-layout title="Edit Pengguna">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Edit Pengguna</h1>
            </section>
        </section>
                <form action="{{ route('kelolapengguna.update', $data->id) }}" class="needs-validation card-pengguna mt-3" method="POST" novalidate>
                @method('put')
                @csrf
                <div class="card">
                    <div class="card-body px-5 mt-3">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" value="{{ $data->username }}" class="form-control" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" value="{{ $data->name }}" class="form-control" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role">Hak Akses</label>
                            <select class="form-select" name="role" id="role">
                                <option selected>....</option>
                                <option value="resepsionis">Resepsionis</option>
                                <option value="staf">Staf</option>
                                <option value="ktu">Kepala Tata Usaha</option>
                                <option value="kepsek">Kepala Sekolah</option>
                            </select>
                        </div>

                        <!-- <small class="text-secondary">Pastikan data yang anda isi benar</small> -->
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            <a href="{{ route('kelolapengguna.index') }}" class="btn btn-secondary text-dark">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
    @endsection
</x-master-layout>
