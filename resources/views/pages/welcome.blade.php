@extends('layouts.app')
@section('welcome')
    <main class="d-flex flex-wrap flex-column align-items-center justify-content-center wrapper_welcome">
    <h1>MY CORPORATE</h1>
    <div class="btns-start">
        <a name="" id="" class="btn btn-primary alt" href="#" role="button">OUR SITE</a>
        @auth
            <a name="" id="" class="btn btn-primary alt" href="{{__('profile')}}" role="button">VAI ALLA TUA PAGINA</a>
            @else
            <a name="" id="" class="btn btn-primary alt" href="{{ __('login') }}" role="button">LOGIN</a>
        @endauth
    </div>
    {{-- se loggato --}}
    @auth
        <div class="welcome_name">
            <h5>Benvenuto/a {{ Auth::user()->name}}</h5>
        </div>
           <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Esci
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    @endauth
    </main>
@endsection

