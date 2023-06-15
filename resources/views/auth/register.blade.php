@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
            <div class="d-flex align-items-center justify-content-center h-100" style="margin-top:15%">
                <div class="col-md-8">
                    
                    <div class="d-grid gap-2 col-8 mx-center">
                        <div class="card-body">
                            <div class="card" style="18rem">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                
                                        <div class="row mb-1">
                                            <label for="name" class="col-md-4 ">{{ __('Name') }}</label>
                
                                            <div class="col-md-15">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-1">
                                            <label for="email" class="col-md-7 ">{{ __('Email Address') }}</label>
                
                                            <div class="col-md-15">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-1">
                                            <label for="password" class="col-md-4 ">{{ __('Password') }}</label>
                
                                            <div class="col-md-15">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-1">
                                            <label for="password-confirm" class="col-md-7">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-15">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <br>  
                                        <button  class="btn text-white gap-8 col-8 mx-center offset-md-2" type="submit" style= "border-radius: 20px; background-color: #1063AD " >{{ __('Register') }}</button>                                        <p class="text-center">Already have account?<a href="{{ route('login') }}">Login</a></p>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8 text-center">
                      <p style= "color:#1063AD;margin-top:5px"><b>----Or Register with----</b></p>
                      <div class="row justify-content-center ">
                        <div class="col-md-10">
                            <a type="button" class="btn btn-light "style="color: #093653; " href="{{ route('login.google') }}">
                                <i class="fa-brands fa-google fa-lg" style="color: #093653; margin-right:5px"></i>
                                  Register with Google</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
