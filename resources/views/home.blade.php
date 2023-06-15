@extends('layouts.app')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.name', 'Diskominfo') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>
        <ul class="navbar-nav ms-auto">

                <div class="nav-item" >
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>

<main>
    <div class="container" style="margin-top: 10%">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Tampilkan pesan sukses jika ada -->
            @if(session('success'))
        <div>{{ session('success') }}</div>
            @endif
                <form method="POST" action="/home/process" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Select Model</label>
                        <select name="Select Model" class="form-control"style="background-color: darkgray; border-radius: 20px" required>
                            @foreach($options as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach 
                        </select>
                    </div> 
                     <div class="form-group">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">File Input</label>
                            <input name="formFile" class="form-control" type="file" id="formFile" style="background-color: darkgray; border-radius: 20px">
                          </div>
                    <button  class="btn text-white gap-8 col-8 mx-center offset-md-2" type="submit" style= "border-radius: 20px; background-color: #1063AD; "><b>Result</b></button>
                </form>
            </div>
        </div>
    </div>
</main>






{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
