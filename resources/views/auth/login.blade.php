@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row ">
        <div class="col-md-6">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div>
                    <h2>Konten Kolom 1</h2>
                    <p>Isi konten lainnya...</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex align-items-center justify-content-center h-100" style="margin-top:20%">
                <div class="col-md-8">
                    <div class="d-grid gap-2 col-8 mx-center">
                        <div class="card-body">
                            <div class="card" style="18rem">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                
                                        <div class="row mb-1">
                                            <label for="email" class="col-md-7">{{ __('Email Address') }}</label>
                
                                            <div class="col-md-15">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 ">{{ __('Password') }}</label>
                
                                            <div class="col-md-15">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-check offset-md-1">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                        </div> 
                                    </div>
                                    <button class="btn text-white gap-8 col-8 mx-center offset-md-2" type="submit" style= "border-radius: 20px; background-color: #1063AD " >{{ __('Login') }}</button>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link gap-8 col-10 mx-center offset-md-1" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    <p class="text-center">Don't have any account?<a href="{{ route('register') }}">click here</a></p>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="col-md-8 text-center">  
                      <p style= "color:#1063AD; margin-top:5px"><b>----Or login with----</b></p>
                      <div class="row justify-content-center ">
                        <div class="col-md-8">
                            <a type="button" class="btn btn-light "style="color: #093653; " href="{{ route('login.google') }}">
                                <i class="fa-brands fa-google fa-lg" style="color: #093653; margin-right:5px"></i>
                                  Login with Google</a>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
