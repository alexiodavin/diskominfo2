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
    <div class="container" style="margin-top:3%">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="color:#1063AD"><b>Teks Tengah</b></h1>
            </div>
            <div class="col-md-12 text-center">
                @if ($output)
                <p>Metode: {{ $output['metode'] }}</p>
                <p>Hasil: {{ $output['hasil'] }}</p>
                @else
                <p>Tidak ada hasil yang ditampilkan.</p>
                @endif
            </div>
        </div>
        </div>
            
    </div>
</main>

@endsection