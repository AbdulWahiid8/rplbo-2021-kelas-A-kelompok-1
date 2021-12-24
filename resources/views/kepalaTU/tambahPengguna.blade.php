<x-master-layout title="Tambah Pengguna">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Tambah Pengguna</h1>
            </section>
            <form action="{{ route('kelolapengguna.store') }}" method="POST" class="needs-validation card-pengguna mt-3" novalidate>
                @csrf
                <div class="card">
                    <div class="card-body px-5 mt-3">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @enderror" required>
                            @error('username')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" class="form-control" required>
                            <div class="invalid-feedback">
                                Field Tidak Boleh Kosong!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <x-icon-pass/>
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Hak Akses</label>
                            <select class="form-select" name="role" id="role" required>
                                <option selected>....</option>
                                <option value="resepsionis">Resepsionis</option>
                                <option value="staf">Staf</option>
                                <option value="ktu">Kepala Tata Usaha</option>
                                <option value="kepsek">Kepala Sekolah</option>
                            </select>
                        </div>

                        <!-- <small class="text-secondary">Pastikan data yang anda isi benar</small> -->
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    @endsection
</x-master-layout>
