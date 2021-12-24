<x-auth-layout title="Login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow mt-4">
                    <div class="card-body p-5">
                        <div class="icon-login text-center">
                            <img src="{{ url('image/tut-wuri-handayani.png') }}" alt="Tut Wuri Handayani" width="90">
                            <p class="mt-4">Silakan Login</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-2 form-input">
                                <div>
                                    <label for="username" class="col-form-label text-md-right">{{ __('Username') }}</label>
                                    <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-input">
                                <div>
                                    <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <x-icon-pass/>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           {{-- @if (Route::has('password.request'))
                            <div class="font-pass text-end">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                            @endif --}}

                            <div class="row mt-5">
                                <div class="text-center">
                                    <button type="submit" class="btn px-4 btn-submit">
                                        {{ __('Login') }}
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
