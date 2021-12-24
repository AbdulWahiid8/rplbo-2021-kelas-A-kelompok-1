<x-master-layout title="Edit Password">
    @section('content')
        <section class="section">
            <section class="section-header">
                <h1>Edit Password</h1>
            </section>
            <form action="{{ route('updatepassword.update', $data->id) }}" method="POST" class="needs-validation card-pengguna mt-3" novalidate>
                @method('put')
                @csrf
                <div class="card">
                    <div class="card-body px-5 mt-3">
                        <div class="form-group">
                            <label for="password_lama">Password Lama</label>
                            <input id="password_lama" type="password" class="form-control @error('password_lama') is-invalid @enderror" name="password_lama" required>
                            @error('password_lama')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
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
