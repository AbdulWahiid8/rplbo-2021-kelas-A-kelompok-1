<x-auth-layout title="Register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body px-5 pt-3">
                        <div class="icon-login text-center">
                            <img src="{{ url('image/tut-wuri-handayani.png') }}" alt="Tut Wuri Handayani" width="90">
                            <p class="mt-4">Silakan Register</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-2">
                                <div class="form-input">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="form-input">
                                    <label for="username" class="col-form-label text-md-right">{{ __('Username') }}</label>
                                    <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="off">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="form-input">
                                    <label for="role">Role</label>
                                    <select id="role" name="role" class="form-select" aria-label="Default select example" required>
                                        <option selected>Pilih Role..</option>
                                        <option value="resepsionis">Resepsionis</option>
                                        <option value="staf">Staf</option>
                                        <option value="ktu">Kepala Tata Usaha</option>
                                        <option value="kepsek">Kepala Sekolah</option>
                                    </select>
                                    @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="form-input">
                                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-submit px-4">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
